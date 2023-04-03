<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use Exception;
use Illuminate\Support\Facades\Log;

class MoviesController extends Controller
{
    public function index()
    {
        return view('posts.index', ['movies' => Movie::latest()->paginate()]);
    }

    public function create(Movie $movie)
    {
        return view('posts.create', ['movie' => $movie]);
    }

    public function store(Request $request)
    {
        $data = [
            'title'=> $request->title,
            'year'=> $request->year,
            'director'=> $request->director,
            'poster'=> $request->image,
            'synopsis'=> $request->synopsis
        ];
        // Log::error('info data ' .json_encode($data));
        // try {
            $movie = Movie::create($data);

        // } catch (Exception $e) {
        //     Log::error('error creando movie msg:'.$e->getMessage());
        //     return "Error";
        // }

        return redirect()->route('posts.edit', ['movie' => $movie]);


    }
}

