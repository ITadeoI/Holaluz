<?php


namespace App\SuspiciousReadingDetector\Infrastructure\Persistence\File;


use App\Shared\Infrastructure\Persistence\File\FileRepository;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReading;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingId;

class YamlFile extends FileRepository implements ClientReadingRepository
{
    public function save(ClientReading $clientReading): void
    {
        //TODO: Implement save() method;
    }

    public function find(ClientReadingId $id): ?ClientReading
    {
        //TODO: Implement find() method;
    }

    public function delete(ClientReadingId $id): void
    {
        //TODO: Implement delete() method;
    }
}