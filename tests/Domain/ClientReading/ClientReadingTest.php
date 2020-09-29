<?php

namespace App\Tests\Domain\ClientReading;



use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReading;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingId;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingItem;
use App\SuspiciousReadingDetector\Domain\Reading\ReadingId;
use App\Tests\BaseTestCase;

class ClientReadingTest extends BaseTestCase
{
    private $clientReadingId;

    protected function setUp(): void
    {
        parent::setUp();

        $this->clientReadingId = new ClientReadingId($this->faker->uuid);
    }

    public function testGivenAReadingItemToAddWhenEmptyClientReadingThenAdded(): void
    {
        $clientReading = ClientReading::createEmpty($this->clientReadingId);

        $readingId = new ReadingId($this->faker->uuid);

        $readingItem = ClientReadingItem::create($readingId);

        $clientReading->addReading($readingItem);

        $this->assertCount(1, $clientReading->readings());
    }

    public function testGivenAReadingItemToRemoveWhenExistingThenRemoved(): void
    {
        $clientReading = ClientReading::createEmpty($this->clientReadingId);

        $readingId = new ReadingId($this->faker->uuid);
        $otherReadingId = new ReadingId($this->faker->uuid);

        $firstReadingItem = ClientReadingItem::create($readingId);
        $secondReadingItem = ClientReadingItem::create($otherReadingId);

        $clientReading->addReading($firstReadingItem);
        $clientReading->addReading($secondReadingItem);

        $this->assertCount(2, $clientReading->readings());

        $clientReading->removeReading($firstReadingItem);

        $this->assertCount(1, $clientReading->readings());
    }

    public function testSuspectedFounded(): void
    {
        $this->markTestSkipped('I need to find a solution about DDD to share reading');
    }

}