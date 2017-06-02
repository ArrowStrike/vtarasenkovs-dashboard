<?php

namespace DashboardBundle\Tests\Controller;

use DashboardBundle\Services\CacheLiteService;
use DashboardBundle\Repository\MemcacheMessageRepository;

class MemcacheTest extends \PHPUnit_Framework_TestCase
{

    const CACHE_ID = 'test';
    const LIFE_TIME = 3600;
    const DATA = 'something';
    protected $cache;
    protected $messageRepository;

    public function __construct($cache = null, $messageRepository = null)
    {
        $this->cache = new CacheLiteService(self::LIFE_TIME);
        $this->messageRepository = new MemcacheMessageRepository($this->cache, self::DATA);
    }

    public function testGet()
    {
        $this->cache->save(self::DATA, self::CACHE_ID);
        $data = $this->cache->get(self::CACHE_ID);
        $this->assertEquals(self::DATA, $data);
    }

    public function testSave()
    {
        $condition = $this->cache->save(self::DATA, self::CACHE_ID);
        $this->assertTrue($condition);
    }

    public function testDelete()
    {
        $this->cache->save(self::DATA, self::CACHE_ID);
        $this->cache->delete(self::CACHE_ID);
        $this->assertFalse($this->cache->get(self::CACHE_ID));
    }
}
