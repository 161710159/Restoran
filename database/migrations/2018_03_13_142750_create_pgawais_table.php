<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePgawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pgawais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jk');
            $table->text('alamat');
            $table->unsignedInteger('pemilik_id');
            $table->foreign('pemilik_id')->references('id')->on('pemiliks')->ondelete('cascade');
            $table->integer('gaji');
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
        Schema::dropIfExists('pgawais');
    }
}
