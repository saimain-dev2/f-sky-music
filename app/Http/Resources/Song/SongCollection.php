<?php

namespace App\Http\Resources\Song;

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
            'name' => $this->name,
            'artist' => $this->artist,
            'category_id' => $this->category_id,
            'album_id' => $this->album_id,
            'cover' => $this->cover,
            'href' => [
                'link' => route('songs.show', $this->id)
            ]
        ];
    }
}
