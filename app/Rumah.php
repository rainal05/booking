<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $guarded = [];

    public function blok()
    {
        return $this->belongsTo(Blok::class);
    }
}
