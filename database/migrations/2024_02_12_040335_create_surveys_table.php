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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kelamin')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('mewakili')->nullable();
            $table->string('jenis_pelayanan')->nullable();
            $table->string('mudah_dipahami')->nullable(); 
            $table->string('waktu')->nullable();
            $table->string('biaya')->nullable();
            $table->string('standar_pelayanan')->nullable();
            $table->string('kopetensi')->nullable();
            $table->string('sikap_petugas')->nullable();
            $table->string('fasilitas')->nullable();
            $table->string('pengguna_layanan')->nullable();
            $table->string('kritik_saran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surveys');
    }
};
