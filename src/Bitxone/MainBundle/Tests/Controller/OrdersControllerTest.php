<?php

namespace Bitxone\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OrdersControllerTest extends WebTestCase
{
    public function testExportneworderstoerp()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/exportNewOrdersToErp');
    }

}
