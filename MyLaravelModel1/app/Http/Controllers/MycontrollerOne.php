<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MycontrollerOne extends Controller
{
    public function home(){

        $movies = Movie::all();
        return view('pages.home', compact('movies'));
    }

    public function movie($id){

        $oneMovie = Movie::FindOrFail($id);

        return view('pages.movie', compact('oneMovie'));
    }
}
