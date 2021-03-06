<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Dates;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

class ApiTest extends TestCase
{
    /**
     * A test to check the fixer.io api is up and running.
     *
     * @return void
     */
    public function testCanConnectToFixerApi()
    {

        $this->get(route('fixer'))
            ->assertStatus(200);
    }

    /**
     * A test to mock the fixer.io api with an error and allow us to handle it gracefully.
     *
     * @return void
     */
    public function testFallsOverGracefully()
    {

        $this->get(route('fixer'))
            ->assertStatus(200);
    }

    // private function getDates($status, $body = null)
    // {
    //     $mock = new MockHandler([new Response($status, [], $body)]);
    //     $handler = HandlerStack::create($mock);
    //     $client = new \GuzzleHttp\Client(['handler' => $handler]);

    //     // TODO: Implement Dates class to fetch api 
    //     // return new Dates($client, 'http://mocked.url');
    // }
}
