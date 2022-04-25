<?php

namespace App\Http\Controllers\Negocios;

use App\Http\Controllers\Controller;
use App\Models\Negocio;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SearchController extends Controller
{
    public function index(Request $request){
        $name = $request->search;

        $negocios = Negocio::with('images')
        ->where('name', 'LIKE' ,'%' . $name . '%')
        ->get();

        return Inertia::render('Search',compact('negocios'));

    }
}
