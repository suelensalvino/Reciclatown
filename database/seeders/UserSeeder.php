<?php

namespace Database\Seeders;

use  App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($i=0; $i < 3 ; $i++) { 
            User::factory(1)->create([
             'email' => 'user'. $i . '@gmail.com',
             'tipo' => 'usuario',
            ]);
        }
        for ($i=0; $i < 2; $i++) { 
            User::factory(1)->create([
             'email' => 'coletor'. $i . '@gmail.com',
             'tipo' => 'coletor',
            ]);
        }
    }
}
