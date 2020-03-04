<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function song()
    {
        return $this->hasOne('App\Model\Song');
    }
}
