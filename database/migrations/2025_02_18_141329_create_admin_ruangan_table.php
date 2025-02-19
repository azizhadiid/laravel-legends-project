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
        Schema::create('admin_ruangan', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id', 50); // Foreign key dari admin_profiles
            $table->foreign('employee_id')->references('employee_id')->on('admin_profiles')->cascadeOnDelete();
            $table->foreignId('ruangan_id')->constrained('ruangan')->cascadeOnDelete();
            $table->enum('role', ['Uploader', 'Editor']); // Role admin dalam ruangan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_ruangan');
    }
};
