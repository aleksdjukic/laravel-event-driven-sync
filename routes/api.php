
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SyncController;

Route::post('/sync/products', [SyncController::class, 'start']);
Route::get('/sync/status', [SyncController::class, 'status']);
