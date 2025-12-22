<?php

namespace App\Commands;

use App\Events\ProductsSyncRequested;

class StartProductSyncCommand
{
    public function execute(): void
    {
        event(new ProductsSyncRequested());
    }
}
