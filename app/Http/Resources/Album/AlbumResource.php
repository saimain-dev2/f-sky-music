<?php

namespace App\Http\Resources\Album;

use App\Http\Resources\Song\SongCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'artist' => [
                'name' => $this->artist->name,
                'detail' => route('artist.show', $this->id),
            ],
            'condition' => $this->song()->count() == 0 ? false : true,
            'songs' => SongCollection::collection($this->song()->get()),
        ];
    }
}
