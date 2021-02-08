<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user){
        	$categorias = collect(['Computador','Celular','Memória Ram','Placa Mãe','Notebook', 'Monitor', 'Periféricos'])->random(5);
        
        foreach ($categorias as $categoria){
            Categoria::factory(1)->create([
                'tipo' => $categoria,
                'user_id' => $user->id,
                ]);
            } 
        }
    }
}
