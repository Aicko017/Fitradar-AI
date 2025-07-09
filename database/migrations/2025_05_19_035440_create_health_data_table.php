<?php

// database/migrations/2025_05_19_035440_create_health_data_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('health_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // relasi ke users
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->date('birthdate')->nullable();
            $table->float('height')->nullable(); // in cm
            $table->float('weight')->nullable(); // in kg
            $table->float('bmi')->nullable(); // auto-calculated
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('health_data');
    }
};

