<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_jurnal_umum', function (Blueprint $table) {
            $table->id();
            $table->string('nama_akun');
            $table->string('noref');
            $table->integer('debit');
            $table->integer('kredit');
            $table->foreignId('jurnal_umum_id')->constrained('jurnal_umum');
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
        Schema::dropIfExists('data_jurnal_umum');
    }
};