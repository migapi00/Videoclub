<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CatalogController;

class HomeController extends Controller
{
    public function getHome()
    {
        return redirect()->action([CatalogController::class, 'getIndex']);
    }


}
