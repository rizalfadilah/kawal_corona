<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasus2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasus2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_rw')->unsigned();
            $table->string('jumlah_positif');
            $table->string('jumlah_sembuh');
            $table->string('jumlah_meninggal');
            $table->date('tanggal');
            $table->timestamps();
            $table->foreign('id_rw')->references('id')
            ->on('rws')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasus2s');
    }
}
