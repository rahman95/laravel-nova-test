<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = [
        'published_on',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
