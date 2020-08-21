<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PhpCsFixer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'php-cs-fixer\'s command';

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
     * Execute the console command. test
     *
     * @return void
     */
    public function handle()
    {
        $this->info(shell_exec("./vendor/bin/php-cs-fixer fix ./app/ && ./vendor/bin/php-cs-fixer fix ./tests/"));
    }
}
