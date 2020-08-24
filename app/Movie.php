<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];

    public function qualities()
    {
        return $this->belongsTo(Quality::class);
    }

    public function genres()
    {
        return $this->belongsTo(Genre::class);
    }

    public function years()
    {
        return $this->belongsTo(Year::class);
    }
}
