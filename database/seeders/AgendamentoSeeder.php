<?php

namespace Database\Seeders;

use App\Models\Coletor;
use App\Models\Produto;
use App\Models\Agendamento;
use Illuminate\Database\Seeder;

class AgendamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Coletor::all() as $coletor) {
        	foreach (Produto::all()->random(2) as $produto) {
   				Agendamento::factory(1)->create([
   					'coletors_id' => $coletor->id,
   					'produtos_id' => $produto->id,
   			]);     		
      }
    }
  }
}
