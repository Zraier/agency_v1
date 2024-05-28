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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id('id_ent');
            $table->string('name');
            $table->string('username')->unique();
            $table->foreign('username')->references('username')->on('users')->cascadeOnDelete();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('photo')->nullable(); 
            $table->unsignedBigInteger('id_dom');
            $table->foreign('id_dom')->references('id')->on('domaines')->onDelete('cascade');
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
