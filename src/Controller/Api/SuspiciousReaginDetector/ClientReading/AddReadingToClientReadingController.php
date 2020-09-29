<?php

namespace App\Controller\Api\ClientReading;


use App\Controller\Api\AbstractApiController;
use App\SuspiciousReadingDetector\Application\ClientReading\AddReadingsToClientReadingRequest;
use App\SuspiciousReadingDetector\Application\ClientReading\AddReadingsToClientReadingsUseCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AddReadingToClientReadingController extends AbstractApiController
{
    private $useCase;

    public function __construct(AddReadingsToClientReadingsUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    public function __invoke(string $clientReadingId, Request $request): JsonResponse
    {
        $productIds = $this->getContentValue($request);

        $useCaseRequest = new AddReadingsToClientReadingRequest($clientReadingId, $productIds);

        $this->useCase->execute($useCaseRequest);

        return new JsonResponse([], Response::HTTP_CREATED);
    }

}