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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('matricule')->unique();
            $table->string('profile_image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('sexe')->nullable();
            $table->string('date_de_naissance')->nullable();
            $table->string('situation_matrimoniale')->nullable();
            $table->string('commune_habitation,')->nullable();
            $table->date('date_prise_service,')->nullable();
            $table->date('date_départ_retraite')->nullable();
            $table->string('Nombre_enfant')->nullable();
            $table->string('documents_agent')->default('default.pdf')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->unsignedBigInteger('type_agents_id');
            $table->foreign('type_agents_id')->references('id')->on('type_agents');
            $table->unsignedBigInteger('fonctions_id');
            $table->foreign('fonctions_id')->references('id')->on('fonctions');
            $table->unsignedBigInteger('communes_id');
            $table->foreign('communes_id')->references('id')->on('communes');
            $table->unsignedBigInteger('religions_id');
            $table->foreign('religions_id')->references('id')->on('religions');
            $table->unsignedBigInteger('services_id');
            $table->foreign('services_id')->references('id')->on('services');
            $table->unsignedBigInteger('emplois_id');
            $table->foreign('emplois_id')->references('id')->on('emplois');
            $table->unsignedBigInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');
            
            
            
        });
    }
    
    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
