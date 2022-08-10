<?php

namespace App\Imports;

use App\Contracts\CustomerRepository;
use App\DTO\CustomerPayloadDto;
use App\Services\CustomerImporters\CustomerFactory;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    public function __construct(private CustomerRepository $repository) {}

    public function model(array $row)
    {
        if ($row[0] === 'id') return null;

        $this->repository->create(
            CustomerFactory::make(new CustomerPayloadDto(...$row))
        );
    }
}
