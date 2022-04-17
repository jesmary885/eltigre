<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    //Relacion muchos a muchos
    public function negocios(){
        return $this->belongsToMany(Negocio::class);
    }

     //Relaion uno a muhos inversa

    public function modelo(){
        return $this->belongsTo(Modelo::class);
    }

}
