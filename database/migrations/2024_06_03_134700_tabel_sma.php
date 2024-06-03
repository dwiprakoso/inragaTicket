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
        Schema::create('tablesma', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->string('logo_sekolah');
            $table->string('file_tim');
            $table->string('nama_kapten');
            $table->string('no_kapten');
            $table->string('nama_official');
            $table->string('no_official');
            $table->string('nama_capo');
            $table->string('no_capo');
            $table->string('bukti_tf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tablesma');
    }
};
