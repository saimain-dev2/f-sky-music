<?php

namespace App\Http\Resources\Song;

use Illuminate\Http\Resources\Json\JsonResource;

class SongResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
            'lyric' => $this->lyric,
            'href' => [
                'source' => $this->source,
            ]
        ];
    }
}
