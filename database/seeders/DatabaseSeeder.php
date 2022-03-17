<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this-> call([
            
            
            prodottiSeeder::class,
            clientiSeeder::class, 
            Many_t_manySeeder::class

    ]);  
        // \App\Models\User::factory(10)->create();
    }
}
