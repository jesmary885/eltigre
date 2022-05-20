<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Negocio;
use App\Models\NegocioSubcategoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index(Request $request, Categoria $category, Subcategoria $subcategory){
        $categorias= Categoria::with('negocios.images')->get();
        $subcategorias = Subcategoria::all();
        $subcategories_categories = Subcategoria::where('categoria_id',$category->id)
                                        ->get();
        
         if($subcategory->id){
          $negocios_select_s = NegocioSubcategoria::with('negocio','negocio.images')
          ->where('subcategoria_id',$subcategory->id)
                          ->get();
                          $negocios_select=[];
                        // dd($negocios_select);
         }else{
            $negocios_select = Negocio::with('images')
            ->where('categoria_id',$category->id)
            ->get();

            $negocios_select_s = [];
        }

        $name = $request->search;

        if($name){
        $negocios = Negocio::with('images','categoria')
                    ->where('name', 'LIKE' ,"%$name%")
                    ->get();
        }else $negocios = [];

        return Inertia::render('CategoryFilter',compact('categorias','subcategorias','negocios_select','category','subcategories_categories','negocios_select_s','negocios'));
    }

   

}
