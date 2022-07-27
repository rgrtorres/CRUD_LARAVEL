<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Movimentacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimentacao', function(Blueprint $table) {
            $table->id();
            $table->string('container');
            $table->enum('movimentacao', ['embarque', 'descarga', 'gate in', 'gate
            out', 'reposicionamento', 'pesagem', 'scanner']);
            $table->timestamp('inicio');
            $table->timestamp('fim');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
