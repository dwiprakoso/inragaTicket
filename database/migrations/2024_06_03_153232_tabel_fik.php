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
        Schema::create('tablefik', function (Blueprint $table) {
            $table->id();
            $table->string('nama_fik');
            $table->string('file_fik');
            $table->string('fik_kapten');
            $table->string('nofik_kapten');
            $table->string('fik_official');
            $table->string('nofik_official');
            $table->string('bukti_tffik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tablefik');
    }
};
