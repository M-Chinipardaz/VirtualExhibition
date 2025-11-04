<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booth extends Model
{
    protected $fillable = ['name', 'started_at', 'finished_at', 'owner_id', 'description', 'image'];

    public function owner():BelongsTo {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
