<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NegocioProducto extends Model
{
    use HasFactory;

    protected $table = "negocio_productos";

    //Relacion uno a mucos inversa

    public function producto(){
        return $this->belongsTo(Producto::class);
    }

    public function negocio(){
        return $this->belongsTo(Negocio::class);
    }


    protected $guarded = ['id','created_at','updated_at'];
}
