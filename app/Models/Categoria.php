<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    //Relacion uno a muchos

    public function subcategorias(){
        return $this->hasMany(Subcategoria::class);
    }
 
     //Relacion uno a muchos
     public function negocios(){
        return $this->hasMany(Negocio::class);
    }

   

}
