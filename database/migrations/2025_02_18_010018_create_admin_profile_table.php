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
        Schema::create('admin_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Hubungan ke tabel users
            $table->string('employee_id', 50)->unique()->nullable(); // ID Pegawai Admin
            $table->string('permissions')->nullable(); // Hak akses admin (misalnya CRUD akses)
            $table->string('phone_number', 20)->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('postal_code', 20)->nullable();
            $table->string('gender', 10)->nullable(); // 'male', 'female', 'other'
            $table->date('birth_date')->nullable();
            $table->string('profile_picture')->nullable(); // Path gambar profil
            $table->string('department', 100)->nullable(); // Departemen admin
            $table->timestamp('last_login')->nullable(); // Waktu login terakhir
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active'); // Status admin
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_profile');
    }
};
