<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Orders;

class DeleteOldRecords extends Command
{
    protected $signature = 'delete:old-records';
    protected $description = 'Delete records older than 30 days';

    public function handle()
    {
        Orders::whereDate('subEnd', '<', now())->delete();
    
        $this->info('Expired data cleared successfully.');
    }
}
