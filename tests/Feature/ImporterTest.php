<?php

namespace Tests\Feature;

use App\Imports\UsersImport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Maatwebsite\Excel\Facades\Excel;
use Tests\TestCase;

class ImporterTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_import_users() 
    {
        Excel::import(new UsersImport, 'test_import.csv');
    }
}
