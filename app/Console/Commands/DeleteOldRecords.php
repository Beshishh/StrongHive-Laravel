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
        $date = now()->subDays(30);
        Orders::where('subEnd', '<', $date)->delete();
        $this->info('Old records have been deleted successfully.');
    }
}
