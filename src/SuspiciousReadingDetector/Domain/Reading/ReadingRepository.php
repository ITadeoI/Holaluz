<?php
declare(strict_types = 1);

namespace App\SuspiciousReadingDetector\Domain\Reading;

interface ReadingRepository
{
    public function save(Reading $reading): void;

    public function find(ReadingId $id): ?Reading;

    public function delete(ReadingId $id): void;

}