<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('makanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('kalori');
            $table->integer('protein')->nullable();
            $table->integer('karbohidrat')->nullable();
            $table->string('kategori')->nullable();
            $table->timestamps();
        });

        Schema::create('olahragas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('durasi'); // menit
            $table->integer('kalori_terbakar');
            $table->string('kategori')->nullable();
            $table->timestamps();
        });

        Schema::create('preferensis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('tujuan'); // misalnya: "menurunkan berat badan"
            $table->string('aktivitas');
            $table->string('pola_makan');
            $table->timestamps();
        });

        Schema::create('rekomendasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('jenis'); // makanan/olahraga
            $table->string('rekomendasi');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rekomendasis');
        Schema::dropIfExists('preferensis');
        Schema::dropIfExists('olahragas');
        Schema::dropIfExists('makanans');
        Schema::dropIfExists('users');
    }
};
