<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoDescarte extends Model
{
    use HasFactory;

    public function users(){

    	return $this->belongsTo(User::class);
    	
    }

    public function descarteUsuarios(){

    	return $this->hasMany(DescarteUsuario::class);
 
    }
}
