<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\ProductsSyncRequested;
use App\Listeners\StoreDomainEvent;
use App\Listeners\StartProductSyncBatch;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ProductsSyncRequested::class => [
            StoreDomainEvent::class,
            StartProductSyncBatch::class,
        ],
    ];
}
