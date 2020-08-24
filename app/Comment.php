<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    public function movies()
    {
        return $this->belongsTo(Movie::class);
    }

    public function guests()
    {
        return $this->belongsTo(Guest::class);
    }
}
