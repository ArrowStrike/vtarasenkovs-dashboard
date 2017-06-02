<?php

namespace DashboardBundle\Repository;

use DashboardBundle\Interfaces\CacheInterface;
use DashboardBundle\Interfaces\MessageRepositoryInterface;


class MemcacheMessageRepository implements MessageRepositoryInterface
{
    const CACHE_ID = 26;
    private $cache;
    private $isCache;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }


    public function getMessages(\DateTime $datetime = null)
    {
        $get = unserialize($this->cache->get(self::CACHE_ID));

        $this->isCache = true;
        if (!is_array($get)) {
            $this->isCache = false;
        } else {
            foreach ($get as $message) {
                if (!is_object($message) || (get_class($message) != 'DashboardBundle\Entity\Message')) {
                    $this->isCache = false;
                }
            }
        }

        if (!$this->isCache) {
            return false;
        }
        if ($datetime) {

            $datetime->modify('- 60 minutes')->format('Y-m-d H:i:s');

            $selectedCache = [];
            foreach ($get as $message) {
                if ($message->getCreatedAt() > $datetime) {
                    $selectedCache[] = $message;
                }
            }
            $get = $selectedCache;
        }

        return $get;
    }


    public function saveMessage($message)
    {
        return $this->cache->save(serialize($message), self::CACHE_ID);
    }

    public function deleteMessage($message = null)
    {
        return $this->cache->delete(self::CACHE_ID);
    }
}
