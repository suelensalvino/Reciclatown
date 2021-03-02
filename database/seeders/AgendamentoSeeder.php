<?php

namespace Database\Seeders;

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
        foreach (Produto::all() as $produto) {
   			Agendamento::factory(1)->create([
   				'produtos_id' => $produto->id,
   		]);     		
    }
  }
}
