<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

class LogsApiTest extends ApiTestCase
{
    public function testLogCountApiWithoutParameters(): void
    {
        $response = static::createClient()->request('GET', '/api/count');
        $responseString = $response->getContent();
        //  dd(gettype($respon));

        $this->assertResponseIsSuccessful();
        $this->assertStringContainsString('counter', $responseString);
    }

    public function testLogCountApiWithParametersWithCorrectValues(): void
    {
        $response = static::createClient()->request('GET', 
                        '/api/count?serviceName=USER-SERVICE&statusCode=201&startDate=2022-04-03&endDate=2022-04-03'
                    );
        $responseString = $response->getContent();
    
        $this->assertResponseIsSuccessful();
        $this->assertStringContainsString('counter', $responseString);
    }

    public function testLogDeleteApi(): void
    {
        $response = static::createClient()->request('GET', 
                        '/api/delete'
                    );
        $responseString = $response->getContent();
    
        $this->assertResponseIsSuccessful();
        $this->assertStringContainsString('deleted records', $responseString);
    }
}
