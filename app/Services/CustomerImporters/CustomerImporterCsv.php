<?php

use App\Contracts\Importer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Facades\Excel;

class CustomerImporterCsv implements Importer
{
    public function __construct(private ToModel $importer) {}

    public function handle(string $path): void
    {
        Excel::import($this->importer, 'test_import.csv');
    }
}