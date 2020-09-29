<?php

namespace App\SuspiciousReadingDetector\Domain\ClientReading;


use App\SuspiciousReadingDetector\Domain\Reading\ReadingId;

class ClientReadingItem
{
    private const ANNUAL_PERIOD = 12;
    private $readingId;
    private $period;

    public function __construct(ReadingId $readingId, int $period)
    {
        $this->readingId = $readingId;
        $this->period = $period;
    }

    public static function create(ReadingId $readingId): ClientReadingItem
    {
        return new self($readingId, self::ANNUAL_PERIOD);
    }

    public function readingId()
    {
        return $this->readingId;
    }

    public function period()
    {
        return $this->period;
    }
}