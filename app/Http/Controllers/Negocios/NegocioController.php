<?php

namespace App\Http\Controllers\Negocios;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Negocio;
use App\Models\NegocioProducto;
use App\Models\NegocioServicio;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NegocioController extends Controller
{
    public function index(Request $request, Negocio $negocio)
    {

        $negocio_select = Negocio::with('images')
                         ->where('id',$negocio->id)
                         ->first();

                        // dd($negocio_select);
        $name = $request->search;

        if($name){
        $negocios = Negocio::with('images','categoria')
                    ->where('name', 'LIKE' ,"%$name%")
                    ->get();
        }else $negocios = [];
                  
        $categorias= Categoria::all();
        $subcategorias = Subcategoria::all();

        return Inertia::render('Negocios/InformacionNegocio',compact('negocio_select','categorias','subcategorias','negocios'));
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

    public function products(Negocio $negocio, Request $request)
    {
        
        $negocio_select = Negocio::with('images')
                         ->where('id',$negocio->id)
                         ->first();

        $categorias= Categoria::all();
        $subcategorias = Subcategoria::all();

        $productos = NegocioProducto::with('producto')
                        ->where('negocio_id',$negocio->id)
                        ->where('description','LIKE', '%' . $request->q .'%')
                        ->paginate(5);

                     //   dd($request->q);
        
                  

        return Inertia::render('Negocios/ProductsNegocio',compact('negocio_select','categorias','subcategorias','productos'));
    }

    public function services(Negocio $negocio)
    {
        $negocio_select = Negocio::with('images')
                         ->where('id',$negocio->id)
                         ->first();
        $categorias= Categoria::all();
        $subcategorias = Subcategoria::all();

        $servicios = NegocioServicio::with('servicio')
                        ->where('negocio_id',$negocio->id)->get();

        return Inertia::render('Negocios/ServicesNegocio',compact('negocio_select','categorias','subcategorias','servicios'));
    }

    public function resena(Negocio $negocio)
    {
        $negocio_select = Negocio::with('images')
                         ->where('id',$negocio->id)
                         ->first();
        $categorias= Categoria::all();
        $subcategorias = Subcategoria::all();

        

        return Inertia::render('Negocios/ResenasNegocio',compact('negocio_select','categorias','subcategorias'));
    }
   
}
