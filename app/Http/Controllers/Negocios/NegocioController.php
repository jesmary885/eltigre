<?php

namespace App\Http\Controllers\Negocios;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Negocio;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NegocioController extends Controller
{
    public function index(Negocio $negocio)
    {
        //$negocio_select = $negocio;
        $negocio_select = Negocio::with('images')
                         ->where('id',$negocio->id)
                         ->first();
        $categorias= Categoria::all();
        $subcategorias = Subcategoria::all();
        return Inertia::render('Negocios/InformacionNegocio',compact('negocio_select','categorias','subcategorias'));
    }

    public function localization(Negocio $negocio)
    {
        $negocio_select = Negocio::with('images')
                         ->where('id',$negocio->id)
                         ->first();
        $categorias= Categoria::all();
        $subcategorias = Subcategoria::all();

        return Inertia::render('Negocios/LocalizationNegocio',compact('negocio_select','categorias','subcategorias'));
    }

    public function products(Negocio $negocio)
    {
        $negocio_select = Negocio::with('images')
                         ->where('id',$negocio->id)
                         ->first();
        $categorias= Categoria::all();
        $subcategorias = Subcategoria::all();

        return Inertia::render('Negocios/ProductsNegocio',compact('negocio_select','categorias','subcategorias'));
    }
   
}