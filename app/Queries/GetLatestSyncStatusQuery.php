<?php

namespace App\Queries;

use App\Models\SyncStatus;

class GetLatestSyncStatusQuery
{
    public function execute(): ?SyncStatus
    {
        return SyncStatus::latest()->first();
    }
}
