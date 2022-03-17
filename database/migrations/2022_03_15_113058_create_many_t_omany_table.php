<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManyTOmanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('many_t_omany', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clienti_id')->constrained('clienti');

            $table->foreignId('prodotti_id')->constrained('prodotti');
            $table->timestamps();
            
           
            
        });
        
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('many_t_omany');
    }
}
