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
        Schema::create('parameter_pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidang_id')->constrained('bidang_pemeriksaans');
            $table->string('parameter');
            $table->string('nilai_rujukan');
            $table->foreignId('metode_id')->constrained('metode_pemeriksaans');
            $table->string('satuan');
            $table->double('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameter_pemeriksaans');
    }
};
