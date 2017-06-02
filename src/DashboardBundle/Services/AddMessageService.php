<?php

namespace DashboardBundle\Services;

use DashboardBundle\Entity\Message;
use DashboardBundle\Event\MessageAddedEvent;
use DashboardBundle\Repository\MemcacheMessageRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher;

class AddMessageService
{
    private $em;
    private $ed;
    private $mmr;

    public function __construct(EntityManager $em, TraceableEventDispatcher $ed, MemcacheMessageRepository $mmr)
    {
        $this->em = $em;
        $this->ed = $ed;
        $this->mmr = $mmr;
    }

    public function saveMessage(Message $message)
    {
        $msRepository = $this->em->getRepository('DashboardBundle:Message');

        $msRepository->saveMessage($message);

        $event = new MessageAddedEvent($message);
        $this->ed->dispatch(MessageAddedEvent::NAME, $event);

        $messages = $msRepository->getMessages();
        $this->mmr->saveMessage($messages);

        return $message;
    }
}