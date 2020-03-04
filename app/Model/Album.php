<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function song()
    {
        return $this->hasOne('App\Model\Song');
    }

    public function artist()
    {
        return $this->belongsTo('App\Model\Artist');
    }
}
