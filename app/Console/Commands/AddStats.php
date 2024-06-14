<?php

namespace App\Console\Commands;



use App\Http\Controllers\ProductCRUDController;
use Illuminate\Console\Command;

class AddStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add-stats {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'AddStats for items in db_stats';

    /**
     * Execute the console command.
     */
    public function handle()
    {



    }
}
