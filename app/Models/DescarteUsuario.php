<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescarteUsuario extends Model
{
    use HasFactory;

    public function users(){

    	return $this->belongsTo(User::class);

    }

    public function produtoDescartes(){

    	return $this->belongsTo(ProdutoDescarte::class);

    }

    public function agendamentoDescartes(){

    	return $this->hasOne(AgendamentoDescarte::class);
    
    }
}
