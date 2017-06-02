<?php

namespace DashboardBundle\Interfaces;

/**
 * Interface MessageRepositoryInterface
 */
interface MessageRepositoryInterface
{
    public function getMessages(\DateTime $datetime = null);

    public function saveMessage($message);

    public function deleteMessage($message = null);
}
