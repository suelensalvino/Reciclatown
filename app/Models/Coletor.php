<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coletor extends Model
{
    use HasFactory;

    public function users(){

    	return $this->belongsTo(User::class);

    }

    public function agendamentos(){

    	return $this->hasMany(Agendamento::class);

    }
}
