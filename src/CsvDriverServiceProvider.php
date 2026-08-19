<?php

declare(strict_types=1);

namespace LaravelPaperCsvDriver\CsvDriver;

use Illuminate\Support\ServiceProvider;
use LaravelPaperCsvDriver\CsvDriver\Console\Commands\CsvDriverCommand;

class CsvDriverServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-paper-csv-driver.php', 'laravel-paper-csv-driver');

        $this->app->singleton(CsvDriver::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/laravel-paper-csv-driver.php');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-paper-csv-driver');

        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-paper-csv-driver');

        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/laravel-paper-csv-driver.php' => config_path('laravel-paper-csv-driver.php'),
        ], ['laravel-paper-csv-driver', 'laravel-paper-csv-driver-config']);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-paper-csv-driver'),
        ], ['laravel-paper-csv-driver', 'laravel-paper-csv-driver-views']);

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/laravel-paper-csv-driver'),
        ], ['laravel-paper-csv-driver', 'laravel-paper-csv-driver-lang']);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/laravel-paper-csv-driver'),
        ], ['laravel-paper-csv-driver', 'laravel-paper-csv-driver-assets']);

        $this->publishesMigrations([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ], ['laravel-paper-csv-driver', 'laravel-paper-csv-driver-migrations']);

        $this->commands([
            CsvDriverCommand::class,
        ]);
    }
}
