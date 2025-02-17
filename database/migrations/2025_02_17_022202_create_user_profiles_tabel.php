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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Hubungan ke tabel users
            $table->string('phone_number', 20)->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->string('gender', 10)->nullable(); // 'male', 'female', 'other'
            $table->date('birth_date')->nullable();
            $table->string('profile_picture')->nullable(); // Path gambar profil
            $table->string('provider_name', 100)->nullable(); // Nama provider jika menggunakan OAuth
            $table->timestamps();
            $table->string('nama', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profiles_tabel');
    }
};
