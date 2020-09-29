<?php

namespace App\Tests\Application\ClientReading;


use App\SuspiciousReadingDetector\Application\ClientReading\AddReadingsToClientReadingRequest;
use App\SuspiciousReadingDetector\Application\ClientReading\AddReadingsToClientReadingsUseCase;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReading;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingId;
use App\SuspiciousReadingDetector\Domain\ClientReading\ClientReadingRepository;
use App\Tests\BaseTestCase;

class AddReadingsToClientReadingsUseCaseTest extends BaseTestCase
{
    private $repository;
    private $useCase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->repository = $this->prophesize(ClientReadingRepository::class);

        $this->useCase = new AddReadingsToClientReadingsUseCase(
            $this->repository->reveal()
        );
    }

    public function testGivenListOfReadingsWhenValidThenAdded(): void
    {
        $clientReadingId = new ClientReadingId($this->faker->uuid);

        $clientReading = ClientReading::createEmpty($clientReadingId);

        $readings = [
            $this->faker->uuid,
            $this->faker->uuid,
            $this->faker->uuid
        ];

        $request = new AddReadingsToClientReadingRequest($clientReadingId->id(), $readings);

        $this->repository->find($clientReadingId)->shouldBeCalled()->willReturn($clientReading);
        $this->repository->save($clientReading)->shouldBeCalled();

        $this->useCase->execute($request);
    }


}