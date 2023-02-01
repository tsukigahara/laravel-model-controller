<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {

        $movies = Movie::all();

        var_dump($movies);

        return view('welcome');
    }
}
