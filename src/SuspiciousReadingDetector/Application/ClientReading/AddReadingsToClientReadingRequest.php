<?php
declare(strict_types = 1);

namespace App\SuspiciousReadingDetector\Application\ClientReading;


class AddReadingsToClientReadingRequest
{
    private $clientReadingId;
    private $readingsIds;

    public function __construct(string $clientReadingId, array $readingsIds)
    {
        $this->clientReadingId = $clientReadingId;
        $this->readingsIds     = $readingsIds;
    }

    public function clientReadingId()
    {
        return $this->clientReadingId;
    }

    public function readingsIds()
    {
        return $this->readingsIds;
    }
}