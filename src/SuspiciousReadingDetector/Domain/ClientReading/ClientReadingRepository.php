<?php
declare(strict_types = 1);

namespace App\SuspiciousReadingDetector\Domain\ClientReading;

interface ClientReadingRepository
{
    public function save(ClientReading $clientReading): void;

    public function find(ClientReadingId $id): ?ClientReading;

    public function delete(ClientReadingId $id): void;

}