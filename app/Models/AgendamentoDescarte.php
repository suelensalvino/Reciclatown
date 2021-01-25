<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendamentoDescarte extends Model
{
    use HasFactory;

    public function descarteUsuarios(){

    	return $this->belongsTo(DescarteUsuario::class);
   
    }

    public function coletors(){

    	return $this->belongsTo(Coletor::class);
    	
    }
}
