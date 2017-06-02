<?php

namespace DashboardBundle\Interfaces;

/**
 * Interface CacheInterface
 */
interface CacheInterface
{
    public function get($id);

    public function save($data, $id);

    public function delete($id);
}
