<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Bus;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Jobs\SyncSingleProductJob;

class ProductSyncTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_dispatches_product_sync_batch()
    {
        Bus::fake();

        $response = $this->postJson('/api/sync/products');

        $response->assertStatus(200);

        Bus::assertBatched(function ($batch) {
            return $batch->name === 'Product Sync Batch'
                && count($batch->jobs) === 3;
        });
    }
}
