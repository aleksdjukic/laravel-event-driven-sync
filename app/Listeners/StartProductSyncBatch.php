<?php

namespace App\Listeners;

use App\Events\ProductsSyncRequested;
use App\Jobs\SyncSingleProductJob;
use Illuminate\Support\Facades\Bus;

class StartProductSyncBatch
{
    public function handle(): void
    {
        logger()->error('StartProductSyncBatch listener HIT');

        Bus::batch([
            new SyncSingleProductJob(1, 'Product A'),
            new SyncSingleProductJob(2, 'Product B'),
            new SyncSingleProductJob(3, 'Product C'),
        ])->name('Product Sync Batch')->dispatch();
    }
}
