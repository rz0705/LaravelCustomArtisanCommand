<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetAppName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get the name of the Laravel app';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $appName = config('app.name');
        $this->info("The name of the app is: $appName");
    }
}
