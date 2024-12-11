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
        Schema::create('kabupaten_kotas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30)->uniqie()->nullabel(false);
            $table->string('alt_name', 30);
            $table->double('latitude');
            $table->double('longitude');
            $table->foreignId('provinsi_id')->constrained('provinsis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabupaten_kotas');
    }
};
