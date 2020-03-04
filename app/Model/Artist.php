<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public function song()
    {
        return $this->hasOne('App\Model\Song');
    }

    public function album()
    {
        return $this->hasOne('App\Model\Album');
    }
}
