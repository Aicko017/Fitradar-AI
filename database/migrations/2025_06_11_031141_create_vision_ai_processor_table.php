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
        Schema::create('vision_ai_processor', function (Blueprint $table) {
            $table->id(); // id_vision
            $table->foreignId('id_pengguna')->constrained('users')->onDelete('cascade');
            $table->string('input_gambar'); // path gambar atau nama file
            $table->string('deteksi_makanan');
            $table->float('kalori')->nullable();
            $table->float('protein')->nullable();
            $table->float('lemak')->nullable();
            $table->float('karbohidrat')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vision_ai_processor');
    }
};
