<?php

namespace App\SuspiciousReadingDetector\Infrastructure\Persistence\Doctrine;


use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;
use App\SuspiciousReadingDetector\Domain\Reading\Reading;
use App\SuspiciousReadingDetector\Domain\Reading\ReadingId;
use App\SuspiciousReadingDetector\Domain\Reading\ReadingRepository;

class ReadingDoctrineRepository extends DoctrineRepository implements ReadingRepository
{
    public function save(Reading $clientReading): void
    {
        //TODO: Implement save() method;
    }

    public function find(ReadingId $id): ?Reading
    {
        //TODO: Implement save() method;
    }

    public function delete(ReadingId $id): void
    {
        //TODO: Implement save() method;
    }
}