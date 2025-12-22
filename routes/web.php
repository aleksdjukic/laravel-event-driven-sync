<?php

use App\Commands\StartProductSyncCommand;
use Illuminate\Support\Facades\Route;


if (app()->environment('local')) {
    Route::get('/trigger-sync', function (StartProductSyncCommand $command) {
        $command->execute();
        return 'Sync triggered';
    });
}
