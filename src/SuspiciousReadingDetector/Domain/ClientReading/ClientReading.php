<?php
declare(strict_types = 1);

namespace App\SuspiciousReadingDetector\Domain\ClientReading;


class ClientReading
{
    private const ANNUAL_PERIOD = 12;

    private $clientReadingId;
    private $readings;

    public function __construct(ClientReadingId $clientReadingId, array $readings)
    {
        $this->clientReadingId = $clientReadingId;
        $this->readings        = $readings;
    }

    public static function createEmpty(ClientReadingId $clientReadingId): ClientReading
    {
        return new self($clientReadingId, []);
    }

    public function readings(): ?array
    {
        return $this->readings;
    }

    public function addReading(ClientReadingItem $reading): void
    {
        $this->readings[$reading->readingId()->id()] = $reading;
    }

    public function removeReading(ClientReadingItem $reading): void
    {
        unset($this->readings[$reading->readingId()->id()]);
    }

    public function suspectedReading()
    {
        $suspects = [];
        foreach ($this->readings as $reading)
        {
            if ($this->isAboveMedian($reading->amoung) || $this->isAboveMedian($reading->amoung))
            {
                $suspects[] = $reading;
            }
        }

        return $suspects;
    }

    public function median(): float
    {
        $annualAmount = 0;
        foreach ($this->readings as $reading)
        {
            $annualAmount += $reading->reading()->amount;
        }

        return round($annualAmount/ self::ANNUAL_PERIOD);
    }

    public function aboveMedian(): float
    {
        return $this->median() + ($this->median() / 2);
    }

    public function belowMedian(): float
    {
        return $this->median() - ($this->median() /2);
    }

    public function isAboveMedian(int $amount): bool
    {
        return $this->aboveMedian() <= $amount;
    }

    public function isBelowMedian(int $amount): bool
    {
        return $this->isBelowMedian() >= $amount;
    }

}