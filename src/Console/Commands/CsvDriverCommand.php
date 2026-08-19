<?php

declare(strict_types=1);

namespace LaravelPaperCsvDriver\CsvDriver\Console\Commands;

use Illuminate\Console\Command;

class CsvDriverCommand extends Command
{
    /**
     * The command signature.
     */
    protected $signature = 'laravel-paper-csv-driver:placeholder';

    /**
     * The command description.
     */
    protected $description = 'Placeholder Artisan command shipped by the package laravel-paper-csv-driver.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->line('CsvDriver placeholder command executed.');

        return self::SUCCESS;
    }
}
