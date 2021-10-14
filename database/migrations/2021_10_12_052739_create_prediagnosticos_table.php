<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrediagnosticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prediagnosticos', function (Blueprint $table) {
            $table->id();

            $table->string('nombreU');
            $table->string('correoU')->unique();
            $table->string('mensaje');
            $table->string('probabilidad');

            
            

        
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
        Schema::dropIfExists('prediagnosticos');
    }
}
