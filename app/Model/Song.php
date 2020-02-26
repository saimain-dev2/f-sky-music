<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name','artist','category_id','album_id','cover'
    ];

    public function category()
    {
        return $this->hasOne('App\Model\Category');
    }

    public function album($var = null)
    {
        return $this->hasOne('App\Model\Album');
    }

    public function artist()
    {
        return $this->hasOne('App\Model\Artist');
    }
}
