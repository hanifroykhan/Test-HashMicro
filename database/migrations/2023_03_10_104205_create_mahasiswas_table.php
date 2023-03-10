<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('email')->nullable();
            $table->string('fakultas')->nullable();
            $table->unsignedBigInteger('jurusan_id')->nullable(false);
            $table->foreign('jurusan_id')->references('id')->on('jurusans')->onDelete('cascade');
            $table->string('telpon')->nullable();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('mahasiswas');
    }
}
