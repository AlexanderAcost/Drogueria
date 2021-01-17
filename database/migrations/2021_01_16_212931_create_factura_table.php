<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {

           $table->bigIncrements('Idfactura'); 
            $table->unsignedBigInteger('Idprove'); 
            $table->date('Fechafac');                    
            $table->float('Totalfac'); 

            $table->foreign('Idprove')->references('Idproveedor')->on('proveedor');

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
        Schema::dropIfExists('factura');
    }
}
