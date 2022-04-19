<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Negocio;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoriaNegocioController extends Controller
{
    public function index($categoria)
    {
        dd('categoria');
       
        $negocios_categorias = Negocio::where('categoria_id',$categoria)->get();
       // dd($negocios_categorias);
        return Inertia::render('CategoriaNegocio', compact('negocios_categorias'));
       // return view('hola');
    }
}


