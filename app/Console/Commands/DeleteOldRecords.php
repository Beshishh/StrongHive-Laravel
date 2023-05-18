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
        $qrCodePath = public_path('qr-codes/' . $orders->qr);

        if (file_exists($qrCodePath)) {
            unlink($qrCodePath);
        }
        Orders::where('subEnd', '<', now())->delete();
        $this->info('Old records have been deleted successfully.');
    }
}
