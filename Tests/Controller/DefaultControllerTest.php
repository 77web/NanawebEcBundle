<?php

namespace Nanaweb\EcBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/shop/');

        $this->assertTrue($crawler->filter('html:contains("Hello")')->count() > 0);
    }
}
