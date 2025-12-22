<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoredEvent extends Model
{
    protected $fillable = ['event_type','payload'];
    protected $casts = ['payload' => 'array'];
}
