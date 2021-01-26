<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ProdutoDescarte;
use App\Models\DescarteUsuario;
use Illuminate\Database\Seeder;

class DescarteUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user) {
        	foreach (ProdutoDescarte::all() as $produto_des) {
        		DescarteUsuario::factory(2)->create([
        			'user_id' => $user->id,
        			'produto_descartes_id' => $produto_des->id,
        		]);
        	}
        }
    }
}
