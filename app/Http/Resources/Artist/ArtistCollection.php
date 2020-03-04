<?php

namespace App\Http\Resources\Artist;

use Illuminate\Http\Resources\Json\Resource;

class ArtistCollection extends Resource
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
            'name' => $this->name,
            'detail' => route('artist.show', $this->id),
        ];
        // return parent::toArray($request);
    }
}
