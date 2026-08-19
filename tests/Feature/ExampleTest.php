<?php

declare(strict_types=1);

use LaravelPaperCsvDriver\CsvDriver\CsvDriver;

it('resolves the singleton', function () {
    expect(app(CsvDriver::class))->toBeInstanceOf(CsvDriver::class);
});

it('returns the same instance from the container', function () {
    expect(app(CsvDriver::class))->toBe(app(CsvDriver::class));
});

it('merges the package config', function () {
    expect(config('laravel-paper-csv-driver.placeholder'))->toBe('default');
});

it('loads the package translations', function () {
    expect(trans('laravel-paper-csv-driver::messages.placeholder'))->toBe('CsvDriver placeholder translation.');
});

it('loads the package views', function () {
    expect(view()->exists('laravel-paper-csv-driver::placeholder'))->toBeTrue();
});

it('registers the artisan command', function () {
    $this->artisan('laravel-paper-csv-driver:placeholder')
        ->expectsOutputToContain('CsvDriver placeholder command executed.')
        ->assertSuccessful();
});
