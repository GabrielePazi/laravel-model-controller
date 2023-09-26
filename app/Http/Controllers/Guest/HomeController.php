<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index() {
        $film = Movie::all();
        return view('home', ["movies" => $film]);
    }
}
