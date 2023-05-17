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
        
        $records = Orders::whereDate('subEnd', '<', now())->delete();
        dump($records); // выводим записи для удаления
        $records->delete(); // удаляем записи
        $this->info('Expired data cleared successfully.');
    }
}
