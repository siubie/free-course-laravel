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
        Schema::create('biodata_mahasiswas', function (Blueprint $table) {
            $table->id();
            //add column for nim 10 character
            $table->string('nim', 10);
            $table->string('nama', 150);
            $table->string('alamat', 255);
            $table->string('jurusan', 100);
            $table->string('nomor_telepon', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodata_mahasiswas');
    }
};
