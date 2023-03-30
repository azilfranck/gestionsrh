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
        Schema::disableForeignKeyConstraints();
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('lib_court_service');
            $table->string('libservice');
            $table->unsignedBigInteger('sous_directions_id');
            $table->foreign('sous_directions_id')->references('id')->on('sous_directions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
