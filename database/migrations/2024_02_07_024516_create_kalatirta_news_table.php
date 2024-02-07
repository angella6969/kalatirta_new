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
        Schema::create('kalatirta_news', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nohp')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('alamatkantor')->nullable();
            $table->longText('tujuan')->nullable();
            $table->longText('informasi')->nullable();
            $table->string('ktp')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->default('Menunggu Konfirmasi');
            $table->string('memperoleh')->nullable();
            $table->string('nomor_registrasi')->nullable();
            $table->string('mengirim')->nullable();
            $table->string('alamat_kirim')->nullable();
            $table->longText('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kalatirta_news');
    }
};
