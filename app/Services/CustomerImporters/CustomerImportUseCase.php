<?php

namespace App\Services\CustomerImporters;

use App\Contracts\Importer;
use App\Contracts\InputPort;
use App\DTO\CustomerPayloadDto;

class CustomerImportUseCase implements InputPort
{
    public function __construct(private Importer $importer) {}

    public function perform(CustomerPayloadDto $payload)
    {
        $this->importer->handle($payload->path);
    }
}