<?php

namespace Sal\Clientify\Tests\Adapter\Ssh;

use PHPUnit\Framework\TestCase;
use Sal\Clientify\Adapter\Ssh\SshAdapter;

class SshAdapterTest extends TestCase
{
    public function testSetters()
    {
        $adapter = new SshAdapter();
        $adapter->setHost('127.0.0.1');
        $adapter->setUser('admin');
        $adapter->setTimeout(30);

        $this->assertEquals('127.0.0.1', $adapter->getHost());
        $this->assertEquals('admin', $adapter->getUser());
        $this->assertEquals(30, $adapter->getTimeout());
        $this->assertContains('-o', $adapter->getOptions());
    }
}
