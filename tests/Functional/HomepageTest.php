<?php

namespace Tests\Functional;

/**
 * Class HomepageTest
 *
 * @package Tests\Functional
 */
class HomepageTest extends BaseTestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/24/18 00:35
     *
     * @throws \Slim\Exception\MethodNotAllowedException
     * @throws \Slim\Exception\NotFoundException
     */
    public function testGetHomepageWithoutName()
    {
        $response = $this->runApp('GET', '/');
        // $this->assertEquals(200, $response->getStatusCode());
        $this->assertContains('Custom by HungNg', (string) $response->getBody());
        $this->assertNotContains('Hello', (string) $response->getBody());
    }

    /**
     * Test that the index route won't accept a post request
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/24/18 00:35
     *
     * @throws \Slim\Exception\MethodNotAllowedException
     * @throws \Slim\Exception\NotFoundException
     */
    public function testPostHomepageNotAllowed()
    {
        $response = $this->runApp('POST', '/', ['test']);
        $this->assertEquals(405, $response->getStatusCode());
        $this->assertContains('Method not allowed', (string) $response->getBody());
    }
}
