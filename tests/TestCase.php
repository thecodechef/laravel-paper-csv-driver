<?php

declare(strict_types=1);

namespace LaravelPaperCsvDriver\CsvDriver\Tests;

use LaravelPaperCsvDriver\CsvDriver\CsvDriverServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            CsvDriverServiceProvider::class,
        ];
    }
}
