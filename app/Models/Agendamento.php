<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

      protected $fillable = [
        'horario',
        'local',
        'status',
        'coletors_id',
        'produtos_id'
    ];

    public function produtos(){

        return $this->belongsTo(Produto::class, 'produtos_id');
   
    }

    public function coletors(){

        return $this->belongsTo(Coletor::class, 'coletors_id');
        
    }
    
}
