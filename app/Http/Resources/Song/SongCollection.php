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
        $category = DB::table('categories')->where('id', $this->category_id)->get();
        $album = DB::table('albums')->where('id', $this->album_id)->get();

        return [
            'name' => $this->name,
            'artist' => $this->artist,
            'category' => [
                'category_id' => $category[0]->id,
                'category_name' => $category[0]->name,
            ],
            'album' =>[
                'album_id' => $album[0]->id,
                'album_name' => $album[0]->name,
            ],
            'cover' => $this->cover,
            'detail' => route('songs.show', $this->id)
            
        ];
    }
}
