<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quality extends Model
{
    use SoftDeletes;

    protected $guarded = [
        'id'
    ];
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
