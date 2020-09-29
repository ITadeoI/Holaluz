<?php

namespace App\Domain\ClientReading;


use App\SuspiciousReadingDetector\Domain\Reading\Reading;
use App\SuspiciousReadingDetector\Domain\Reading\ReadingId;

class ClientReadingItem
{
    private $readingId;
    private $reading;

    public function __construct(ReadingId $readingId, Reading $reading)
    {
        $this->readingId = $readingId;
        $this->reading   = $reading;
    }

    public static function create(ReadingId $readingId): ClientReadingItem
    {
        return new self($readingId, []);
    }

    public function readingId()
    {
        return $this->readingId->id();
    }

    public function reading()
    {
        return $this->reading;
    }



}