<?php
declare(strict_types = 1);

namespace App\SuspiciousReadingDetector\Domain\Reading;

class ReadingId
{
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function id(): string
    {
        return $this->id;
    }

}