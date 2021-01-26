<?php

namespace Database\Seeders;

use App\Models\Coletor;
use App\Models\DescarteUsuario;
use App\Models\AgendamentoDescarte;
use Illuminate\Database\Seeder;

class AgendamentoDescarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Coletor::all() as $coletor) {
        	foreach (DescarteUsuario::all() as $descarte_usu) {
   				AgendamentoDescarte::factory(1)->create([
   					'coletors_id' => $coletor->id,
   					'descarte_usuarios_id' => $descarte_usu->id,
   				]);     		
        	}
        }
    }
}
