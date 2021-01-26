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
         for ($i=0; $i < 5 ; $i++) { 
     		User::factory(1)->create([
             'email' => 'user'. $i . '@gmail.com',
            ]);
        }
    }
}
