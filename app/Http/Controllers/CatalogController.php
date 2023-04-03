<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;


class CatalogController extends Controller

{
    public function getIndex(Request $request)
    {
       return view('catalog.index', ['movies' => Movie::latest()->paginate()]);
    }

    public function getShow($id)
    {
        return view('catalog.show', ['movies' => Movie::findOrFail($id)]);
    }



    // public function store(Request $request)
    // {
    //     Movie::create( $request->validated() );

	// 	return redirect()->route('movies.index')->with('status', 'La película fue creada con éxito');
    // }

    public function getEdit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('catalog.edit', compact('movie'));
    }

    // public function update(Request $request,  $id)
    //     {

    //     $movie = Movie::findOrFail($id);

    //         $movie->titulo = $request->Titulo;
    //         $movie->año = $request->Año;
    //         $movie->director = $request->Director;
    //         $movie->url_imagen = $request->Url_Imagen;
    //         $movie->resumen = $request->Resumen;



    //         $movie->save();

    //         return redirect('catalog');
    //     }



}
