<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SyncStatus extends Model
{
    protected $fillable = ['type','status','started_at','finished_at'];
}
