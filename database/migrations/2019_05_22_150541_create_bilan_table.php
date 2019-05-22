<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBilanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total');
            $table->integer('voyage_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('bilan', function ($table){
            
            $table->foreign('voyage_id')->references('id')->on('voyages');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bilan');
    }
}
