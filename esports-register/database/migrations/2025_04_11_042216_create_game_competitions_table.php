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
        Schema::create('game_competitions', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('type'); // Individu atau Tim
        $table->date('date');
        $table->integer('quota');
        $table->text('description')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_competitions');
    }
};
