<?php

namespace App\Http\Resources\Song;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Resources\Json\Resource;

class SongCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'cover' => $this->cover,
            'name' => $this->name,
            'artist' => $this->artist->name,
            'category' => $this->category->name,
            'album' => $this->album->name,
            'detail' => route('songs.show', $this->id)

        ];
    }
}
