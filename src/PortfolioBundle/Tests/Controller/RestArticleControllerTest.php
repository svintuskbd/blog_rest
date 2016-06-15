<?php

namespace PortfolioBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RestArticleControllerTest extends WebTestCase
{
    public function testGetarticles()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getArticles');
    }

}
