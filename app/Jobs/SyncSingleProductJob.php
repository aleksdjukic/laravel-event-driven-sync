<?php

namespace App\Jobs;

use App\Models\Product;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SyncSingleProductJob implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public int $externalId,
        public string $name
    ) {}

    public function handle(): void
    {
        logger()->error('🔥 JOB HANDLE EXECUTED', [
            'id' => $this->externalId
        ]);

        Product::updateOrCreate(
            ['external_id' => $this->externalId],
            ['name' => $this->name]
        );
    }
}
