<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syarat extends Model
{
    protected $guarded = [];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
