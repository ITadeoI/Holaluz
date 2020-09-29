<?php
declare(strict_types = 1);

namespace App\SuspiciousReadingDetector\Application\ClientReading;

use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReading;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingId;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingItem;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingRepository;
use App\SuspiciousReadingDetector\Domain\Reading\ReadingId;
use DomainException;

class AddReadingsToClientReadingsUseCase
{
    private $repository;

    public function __construct(ClientReadingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(AddReadingsToClientReadingRequest $request)
    {
        $clientReadingId = new ClientReadingId($request->clientReadingId());

        $clientReading = $this->repository->find($clientReadingId);

        if ($clientReading == null) {
            throw new DomainException('ClientReading not found');
        }

        $readingsIds = $request->readingsIds();
        foreach ($readingsIds as $readingId)
        {
            $clientReading->addReading(
                ClientReadingItem::create(new ReadingId($readingId))
            );
        }
    }

}