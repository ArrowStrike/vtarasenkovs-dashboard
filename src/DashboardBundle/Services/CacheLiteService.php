<?php

namespace DashboardBundle\Services;

use DashboardBundle\Interfaces\CacheInterface;
use Cache_Lite;


class CacheLiteService implements CacheInterface
{
    protected $cache;
    protected $lifeTime;

    public function __construct($lifeTime)
    {
        $this->cache = new \Cache_Lite(
            ['lifeTime' => $lifeTime]
        );
    }

    public function get($id)
    {
        if ($data = $this->cache->get($id)) {
            return $data;
        } else {
            return false;
        }
    }

    public function save($data, $id)
    {
        if ($this->cache->save($data, $id)){
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        if ($this->cache->remove($id)){
            return true;
        } else {
            return false;
        }
    }
}
