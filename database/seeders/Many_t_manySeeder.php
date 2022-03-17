<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\relazione;


class Many_t_manySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     relazione::insert([
         'clienti_id' => 1,
         'prodotti_id' => 1
     ]);
    }
}
