<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran_bansos', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('no_kk')->unique();
            $table->string('nama');
            $table->string('alamat');
            $table->integer('pendapatan');
            $table->integer('jumlah_tanggungan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_bansos');
    }
};
