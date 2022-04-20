<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Image;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    
    public function index()
    {
        $images=Image::all();
        $categorias= Categoria::with('negocios')->get();
        $results=$images->intersect($categorias);
        //dd($results);
        $subcategorias = Subcategoria::all();

        return Inertia::render('Welcome',compact('categorias','subcategorias','results'));
    }
}
