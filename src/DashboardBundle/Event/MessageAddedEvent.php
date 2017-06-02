<?php

namespace DashboardBundle\Event;

use DashboardBundle\Entity\Message;
use Symfony\Component\EventDispatcher\Event;


class MessageAddedEvent extends Event
{
    const NAME = 'message.added';
    protected $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
