<?php

namespace App\Console\Commands;

use App\Models\db_item_stat;
use App\Models\User;
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

        $name = $this->argument('name');
        $NewId = db_item_stat::create([
            'name' => $name,
        ]);
        $this->info('Id-'.$name);
        $this->info($NewId);

    }
}
