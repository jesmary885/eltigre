<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Negocio;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoriaNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       // $pp = json_decode($categoria);
        dd($id);
      //  $negocios_categorias = Negocio::where('categoria_id',$categoria)->get();
        // dd($negocios_categorias);
       //  return Inertia::render('CategoriaNegocio', compact('negocios_categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $negocios_categorias = Negocio::where('categoria_id',$id)->get();
         dd($negocios_categorias);
        // return Inertia::render('CategoriaNegocio', compact('negocios_categorias'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
