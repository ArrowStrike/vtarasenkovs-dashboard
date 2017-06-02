<?php

namespace DashboardBundle\Listener;

use DashboardBundle\Event\MessageAddedEvent;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\RequestStack;

class MessageListener
{
    protected $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function historyAction(MessageAddedEvent $event)
    {
        $fileSystem = new Filesystem();
        $message = $event->getMessage();
        $file = '/tmp/history_'.$message->getUsername().'.log';
        if (!$fileSystem->exists($file)) {
            try {
                $fileSystem->dumpFile($file, '');
            } catch (IOException $e) {
                throw new IOException(
                    sprintf('An error occurred while creating "%s" file at "%s"', $file, $e->getPath())
                );
            }
        }

        $ms = $message->getAll();
        $content =
            $ms['id'].' '
            .$ms['createdAt']->format('Y-m-d H:i:s').' : '
            .$ms['message'].' ('
            .$ms['username'].' : '
            .$ms['email'].')'
            ."\n";

        file_put_contents($file, $content, FILE_APPEND);

        $request = $this->requestStack->getCurrentRequest();

        if ($request) {
            $session = $request->getSession();
            $session->set('datetime', $ms['createdAt']);
        }

        return;
    }
}
