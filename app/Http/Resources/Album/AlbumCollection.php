<?php

namespace App\Http\Resources\Album;

use Illuminate\Http\Resources\Json\Resource;

class AlbumCollection extends Resource
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
            'detail' => route('album.show', $this->id)
        ];

        // return parent::toArray($request);
    }
}
