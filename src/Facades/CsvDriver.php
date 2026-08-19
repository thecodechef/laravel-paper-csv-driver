<?php

declare(strict_types=1);

namespace LaravelPaperCsvDriver\CsvDriver\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelPaperCsvDriver\CsvDriver\CsvDriver
 */
class CsvDriver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \LaravelPaperCsvDriver\CsvDriver\CsvDriver::class;
    }
}
