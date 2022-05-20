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
    
    public function index(Request $request)
    {
       // $negocioss=Negocio::with('images')->get();
        $categorias= Categoria::with('negocios.images')->get();
        $subcategorias = Subcategoria::all();

        $name = $request->search;

        if($name){
            $negocios = Negocio::with('images','categoria')
            ->where('name', 'LIKE' ,"%$name%")
            ->get();
            
        }else $negocios = [];

        return Inertia::render('Welcome',compact('categorias','subcategorias','negocios'));
    }
    
}
