<?php

namespace App\Http\Controllers;

use App\Model\Song;
use Illuminate\Http\Request;
use App\Http\Resources\Song\SongCollection;
use App\Http\Resources\Song\SongResource;

class SongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SongCollection::collection(Song::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return new SongResource($song);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        //
    }
}
