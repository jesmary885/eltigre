<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Image;
use App\Models\Negocio;
use App\Models\Subcategoria;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    
    public function index()
    {
       $negocioss=Negocio::with('images')->get();
        $categorias= Categoria::with('negocios.images')->get();
        //dd($categorias);
        $subcategorias = Subcategoria::all();

        return Inertia::render('Welcome',compact('categorias','subcategorias','negocioss'));
    }
}
