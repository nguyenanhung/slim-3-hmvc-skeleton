<?php

namespace Tests\Functional;

/**
 * Class AppTest
 *
 * @package Tests\Functional
 */
class AppTest extends BaseTestCase
{
    /**
     * Test Get /app/test is http code 200
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/24/18 00:36
     *
     * @throws \Slim\Exception\MethodNotAllowedException
     * @throws \Slim\Exception\NotFoundException
     */
    public function testGetAppTest()
    {
        $response = $this->runApp('GET', '/app/test');
        $this->assertEquals(200, $response->getStatusCode());
    }

    /**
     * Test that the /app/test route won't accept a post request
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/24/18 00:35
     *
     * @throws \Slim\Exception\MethodNotAllowedException
     * @throws \Slim\Exception\NotFoundException
     */
    public function testPostAppTestNotAllowed()
    {
        $response = $this->runApp('POST', '/app/test', ['test']);

        $this->assertEquals(405, $response->getStatusCode());
        $this->assertContains('Method not allowed', (string) $response->getBody());
    }

}