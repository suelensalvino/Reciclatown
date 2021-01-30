<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

    public function produtos(){

    	return $this->belongsTo(Produto::class);
   
    }

    public function coletors(){

    	return $this->belongsTo(Coletor::class);
    	
    }
}
