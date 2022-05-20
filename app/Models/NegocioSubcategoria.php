<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NegocioSubcategoria extends Model
{
    use HasFactory;
    protected $table = "negocio_subcategorias";

    protected $guarded = ['id','created_at','updated_at'];

    //relcion uno a muchos inversa
    public function subcategoria(){
        return $this->belongsTo(Subcategoria::class);
    }

    public function negocio(){
        return $this->belongsTo(Negocio::class);
    }
}
