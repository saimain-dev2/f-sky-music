<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name', 'artist', 'category_id', 'album_id', 'cover'
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    public function album($var = null)
    {
        return $this->belongsTo('App\Model\Album');
    }

    public function artist()
    {
        return $this->belongsTo('App\Model\Artist');
    }
}
