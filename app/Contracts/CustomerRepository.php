<?php

namespace App\Contracts;

use App\Services\CustomerImporters\CustomerEntity;

interface CustomerRepository
{
    public function create(CustomerEntity $customer);
}