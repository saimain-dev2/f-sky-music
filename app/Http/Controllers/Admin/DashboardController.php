<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Model\Song;
use App\Model\Album;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $songs = Song::all();
        $albums = Album::all();
        $categories = Category::all();
        $users = User::all();
        return view('backend.dashboard', compact('songs', 'albums', 'categories', 'users'));
    }
}
