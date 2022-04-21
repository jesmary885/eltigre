<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['url', 'negocio_id'];

  /*  public function imageable(){
        return $this->morphTo();
    }*/
//uno a muchos inversa
    public function negocio(){
        return $this->belongsTo(Negocio::class);
    }
    
}
