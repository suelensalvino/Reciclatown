<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'quantidade',
        'descricao',
        'categorias_id',
        'user_id',

    ];

    public function user(){

        return $this->belongsTo(User::class, 'user_id');

    }

    public function categoria(){

        return $this->belongsTo(Categoria::class, 'categorias_id');

    }

    public function agendamento(){

        return $this->hasOne(Agendamento::class);
    
    }
}
