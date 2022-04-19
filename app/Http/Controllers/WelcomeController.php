<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    
    public function index()
    {
        $categorias= Categoria::with('negocios')->get();
       // dd($categorias);
        $subcategorias = Subcategoria::all();

        return Inertia::render('Welcome',compact('categorias','subcategorias'));
    }
}
