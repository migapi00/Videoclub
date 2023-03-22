<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class CatalogController extends Controller

{
    public function getIndex()
    {
        $user = Auth::user();
        dd($user);
       return view('catalog.index', [  'movies' => Movie::latest()->paginate()]);
    }

    public function getShow($id)
    {
        return view('catalog.show', ['movies' => Movie::findOrFail($id)]);
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        return view('catalog.edit', ['movies' => Movie::findOrFail($id)]);
    }
}
