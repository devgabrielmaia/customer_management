<?php

namespace App\Contracts;

interface Importer
{
    public function handle(string $path): void;
}