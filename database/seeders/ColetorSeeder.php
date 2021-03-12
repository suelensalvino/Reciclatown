<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Coletor;
use Illuminate\Database\Seeder;

class ColetorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		foreach (User::where('tipo',  'coletor')->get() as $user){
 			Coletor::factory(1)->create([
 				'user_id' => $user->id
 			]);
 		}       
    }
}
