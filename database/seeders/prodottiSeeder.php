<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\prodotti;

class prodottiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        prodotti::insert ([
            'nome'=>'pippo',
            'descrizione'=>'telefono',
            'prezzo'=>1

        ]);
    }
}
