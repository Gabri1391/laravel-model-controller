<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MainController extends Controller
{
    public function index()
    {
        // selezionare tutti i film dal DB
        $movies = Movie::all();
        return view('main', compact('movies'));
    }
}
