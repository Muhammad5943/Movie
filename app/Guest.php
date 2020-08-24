<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
