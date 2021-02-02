<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'quantidade',
        'categorias_id',
        'user_id',

    ];

    public function users(){

    	return $this->belongsTo(User::class);

    }

    public function categorias(){

    	return $this->belongsTo(Categoria::class);

    }

    public function agendamentos(){

    	return $this->hasOne(Agendamento::class);
    
    }
}
