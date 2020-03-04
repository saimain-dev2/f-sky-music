<?php

namespace App\Http\Resources\Category;

use App\Http\Resources\Song\SongCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'songs' => $this->song()->count() == 0 ? 'Song not found in this category' : SongCollection::collection($this->song()->get()),
        ];
    }
}
