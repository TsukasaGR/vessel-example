<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PhpStan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'analyse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'php stan\'s command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $this->info(shell_exec("./vendor/bin/phpstan analyse --memory-limit=2G"));
    }
}
