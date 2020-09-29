<?php
/**
 * Created by PhpStorm.
 * User: tadeo
 * Date: 9/29/20
 * Time: 10:09 AM
 */

namespace App\SuspiciousReadingDetector\Infrastructure\Persistence\Doctrine;


use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReading;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingId;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingRepository;

class ClientReadingDoctrineRepository extends DoctrineRepository implements ClientReadingRepository
{
    public function save(ClientReading $clientReading): void
    {
        //TODO: Implement save() method;
    }

    public function find(ClientReadingId $id): ?ClientReading
    {
        //TODO: Implement save() method;
    }

    public function delete(ClientReadingId $id): void
    {
        //TODO: Implement save() method;
    }
}