<?php

namespace App\Services\CustomerImporters;

use App\DTO\CustomerPayloadDto;

class CustomerFactory
{
    public function make(CustomerPayloadDto $customerData)
    {
        return new CustomerEntity(...$customerData->toArray());
    }
}