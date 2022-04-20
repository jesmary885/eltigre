<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
    use HasFactory;
    
    protected $guarded = ['id','created_at','updated_at'];

    //Relaion uno a muhos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
  
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

     //Relacion muchos a muchos
     public function servicios(){
        return $this->belongsToMany(Servicio::class)->withPivot('description', 'id', 'price','megocio_id');
    }

    public function productos(){
        return $this->belongsToMany(Producto::class)->withPivot('description', 'id', 'price','negocio_id');
    }

    public function subcategorias(){
        return $this->belongsToMany(Subcategoria::class)->withPivot('negocio_id', 'id');
    }

     //relacion uno a muchos polimoefica
     public function images(){
        return $this->morphMany(Image::class, "imageable");
    }

    
}
