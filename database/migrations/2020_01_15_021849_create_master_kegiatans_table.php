<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_kegiatans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
           $table->unsignedBigInteger('instansi_id');
            // $table->foreign('instansi_id')->references('id')->on('instansis');
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
        Schema::dropIfExists('master_kegiatans');
    }
}