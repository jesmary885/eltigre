<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NegocioServicio extends Model
{
    use HasFactory;

    protected $table = "negocio_servicios";

    protected $guarded = ['id','created_at','updated_at'];

    public function servicio(){
        return $this->belongsTo(Servicio::class);
    }

    public function negocio(){
        return $this->belongsTo(Negocio::class);
    }

}
