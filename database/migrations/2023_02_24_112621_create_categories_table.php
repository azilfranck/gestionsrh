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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('lib_court_categories');
            $table->string('lib_categories');
            $table->unsignedBigInteger('historiques_id');
            $table->foreign('historiques_id')->references('id')->on('historiques');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
