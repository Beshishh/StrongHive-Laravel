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
        $expired = Carbon::now()->subDays(30);
        $records = MyModel::where('subEnd', '<', $expired)->get();
        dump($records); // выводим записи для удаления
        $records->delete(); // удаляем записи
    }
}
