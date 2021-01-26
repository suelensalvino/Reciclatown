<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ProdutoDescarte;
use Illuminate\Database\Seeder;

class ProdutoDescarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (User::all() as $user){
        	ProdutoDescarte::factory(3)->create([
        		'user_id' => $user->id
        	]);
        }
    }
}
