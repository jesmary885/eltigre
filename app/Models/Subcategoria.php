<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    //Relacion muchos a muchos
    public function negocios(){
        return $this->belongsToMany(Negocio::class);
    }

    //Relaion uno a muhos inversa
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

}
