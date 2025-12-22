<?php

namespace App\Http\Controllers;

use App\Commands\StartProductSyncCommand;
use App\Queries\GetLatestSyncStatusQuery;
use Illuminate\Http\JsonResponse;

class SyncController extends Controller
{
    public function start(StartProductSyncCommand $command): JsonResponse
    {
        $command->execute();
        return response()->json(['message' => 'Sync started']);
    }

    public function status(GetLatestSyncStatusQuery $query): JsonResponse
    {
        return response()->json($query->execute());
    }
}
