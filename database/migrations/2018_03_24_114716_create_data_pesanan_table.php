<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pesanan_id');
            $table->foreign('pesanan_id')->references('id')->on('pesanans')->onDelete('CASCADE');
            $table->unsignedInteger('makanan_id');
            $table->foreign('makanan_id')->references('id')->on('makanans')->onDelete('CASCADE');
            $table->unsignedInteger('mnum_id');
            $table->foreign('mnum_id')->references('id')->on('mnums')->onDelete('CASCADE');
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
        Schema::dropIfExists('table');
    }
}
