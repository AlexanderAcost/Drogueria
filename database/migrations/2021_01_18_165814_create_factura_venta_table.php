<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_venta', function (Blueprint $table) {

            $table->bigIncrements('Idfacven'); 
            $table->unsignedBigInteger('Idpersona'); 
            $table->date('Fechafacven');                    
            $table->float('Totalfacven'); 

            $table->foreign('Idpersona')->references('id')->on('users');
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
        Schema::dropIfExists('factura_venta');
    }
}
