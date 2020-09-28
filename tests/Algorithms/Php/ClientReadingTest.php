<?php

namespace App\Tests\Algorithms\Php;


use App\Algorithms\Php\ClientReading;
use App\Tests\BaseTestCase;


class ClientReadingTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testFindTheHighestReading(): void
    {
        $clients = [
            new ClientReading($this->faker->uuid, 2000),
            new ClientReading($this->faker->uuid, 1000),
            new ClientReading($this->faker->uuid, 300),
            new ClientReading($this->faker->uuid, 500),
            new ClientReading($this->faker->uuid, 50),
            new ClientReading($this->faker->uuid, 3000),
            new ClientReading($this->faker->uuid, 1000),
        ];

        usort($clients,function($first,$second){
            return $first->getClientReading() < $second->getClientReading();
        });

        for ($i = 1 ; $i < count($clients) ; $i++ )
        {
            $this->assertGreaterThanOrEqual($clients[$i]->getClientReading(), $clients[$i-1]->getClientReading());
        }
    }
}