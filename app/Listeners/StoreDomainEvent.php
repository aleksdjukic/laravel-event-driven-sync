<?php

namespace App\Listeners;

use App\Events\ProductsSyncRequested;
use App\Models\StoredEvent;

class StoreDomainEvent
{
    public function handle(ProductsSyncRequested $event): void
    {
        StoredEvent::create([
            'event_type' => ProductsSyncRequested::class,
            'payload' => [],
        ]);
    }
}
