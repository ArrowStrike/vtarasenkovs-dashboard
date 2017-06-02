<?php

namespace DashboardBundle\Controller;

use DashboardBundle\Form\Type\MessageFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DashboardBundle\Entity\Message;

/**
 * Class DashboardController
 */
class DashboardController extends Controller
{
    private $dateTime;

    /**
     * @Route("/add", name="addAction")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {
        $message = new Message();

        $form = $this->createForm(MessageFormType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message->setCreatedAt();
            $this->get('add_message')->saveMessage($message);

            $this->addFlash(
                'notice',
                'Message Added'
            );

            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            '@Dashboard/Dashboard/message.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/", name="homepage")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $message = new Message();
        $this->createForm(
            MessageFormType::class,
            $message,
            [
                'action' => $this->generateUrl('addAction'),
            ]
        );

        $session = $request->getSession();

        if ($session->has('datetime')) {
            $this->dateTime = clone ($session->get('datetime'));
        } else {
            $this->dateTime = null;
        }

        $cache = $this->get('memcache');
        $messages = $cache->getMessages($this->dateTime);
        if (!$messages) {
            $em = $this->getDoctrine()->getManager();
            $messages = $em->getRepository('DashboardBundle:Message')->getMessages($this->dateTime);
        }

        return $this->render(
            '@Dashboard/Dashboard/index.html.twig',
            [
                'messages' => $messages,
            ]
        );
    }

    /**
     * @Route("delete/{id}", name="deleteAction")
     *
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine();
        $messageRepository = $em->getRepository('DashboardBundle:Message');
        $message = $messageRepository->find($id);

        $delete = $messageRepository->deleteMessage($message);

        if ($delete) {
            $cache = $this->get('memcache');

            $cache->deleteMessage();

            $messages = $messageRepository->getMessages();
            $cache->saveMessage($messages);

            $this->addFlash(
                'error',
                'The message with the ID:'.$id.' was removed'
            );

        } else {
            $this->addFlash(
                'warning',
                'Sorry, but message with the ID:'.$id.' was deleted already!'
            );

        }

        return $this->redirectToRoute('homepage');
    }
}
