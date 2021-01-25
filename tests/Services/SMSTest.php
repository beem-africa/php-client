<?php

namespace Beem\SDK\Tests\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Beem\SDK\Services\SMS;
use PHPUnit\Framework\TestCase;
k
/**
 */
class SMSTest extends TestCase
{
    public function setup()
    {
        // Create a mock and queue two responses.
    }

    /** @test */
    public function simple()
    {
        $this->assertTrue(true);
    }
}
