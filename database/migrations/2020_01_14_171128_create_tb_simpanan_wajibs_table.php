<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSimpananWajibsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_simpanan_wajibs', function (Blueprint $table) {
            $table->string('kode_member')->primary();
            $table->string('nama');
            $table->string('jenis_simpanan');
            $table->integer('nominal');
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
        Schema::dropIfExists('tb_simpanan_wajibs');
    }
}
