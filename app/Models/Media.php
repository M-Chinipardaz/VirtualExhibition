<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    protected $fillable = ['media', 'media_type', 'image_type', 'post_id'];

    public function post():BelongsTo{
        return $this->belongsTo(Post::class);
    }
}
