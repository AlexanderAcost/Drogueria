<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('producto', function (Blueprint $table) {
            $table->bigIncrements('Idproducto');
            $table->unsignedBigInteger('Idcat');              
            $table->string('Nombrepro',50);
            $table->string('Descripcionpro');
            $table->string('Marcapro',50); 
            $table->string('Presentacionpro',50);
            $table->integer('Cantidadpro');
            $table->float('Preciopro');  

            $table->foreign('Idcat')->references('Idcategoria')->on('categoria');

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
        Schema::dropIfExists('producto');
    }
}
