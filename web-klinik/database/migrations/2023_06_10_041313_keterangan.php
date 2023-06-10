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
        Schema::create('keterangan_pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pemeriksaan_id')
                ->constrained('pemeriksaans');
            $table->foreignId('bidang_id')
                ->nullable()
                ->constrained('bidang_pemeriksaans');
            $table->foreignId('parameter_id')
                ->nullable()
                ->constrained('parameter_pemeriksaans');
            $table->foreignId('metode_id')
                ->nullable()
                ->constrained('metode_pemeriksaans');
            $table->text('hasil')->nullable();
            $table->text('kesan')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangans');
    }
};
