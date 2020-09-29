<?php
declare(strict_types = 1);

namespace App\SuspiciousReadingDetector\Domain\Reading;


class Reading
{
    private $id;
    private $date;
    private $amount;

    public function __construct(ReadingId $id, string $date, int $amount)
    {
        $this->id = $id;
        $this->date = $date;
        $this->amount = $amount;
    }

    public function date()
    {
        $this->date;
    }

    public function amount()
    {
        $this->amount;
    }
}