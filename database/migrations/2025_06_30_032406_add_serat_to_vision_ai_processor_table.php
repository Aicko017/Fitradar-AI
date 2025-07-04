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
        Schema::table('vision_ai_processor', function (Blueprint $table) {
            $table->float('serat')->nullable()->after('karbohidrat'); // Menambahkan kolom 'serat' setelah 'karbohidrat'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vision_ai_processor', function (Blueprint $table) {
            $table->dropColumn('serat'); // Menghapus kolom 'serat'
        });
    }
};
