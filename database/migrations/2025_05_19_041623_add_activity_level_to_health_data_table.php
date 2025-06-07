<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('health_data', function (Blueprint $table) {
        $table->string('activity_level')->after('bmi')->nullable();
    });
}

public function down()
{
    Schema::table('health_data', function (Blueprint $table) {
        $table->dropColumn('activity_level');
    });
}
};
