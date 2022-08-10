<?php

namespace App\Repositories;

use App\Contracts\CustomerRepository;
use App\Models\Customer;
use App\Services\CustomerImporters\CustomerEntity;

class CustomerDatabaseEloquent implements CustomerRepository
{
    public function create(CustomerEntity $customer)
    {
        Customer::created([

        ]);
    }
}