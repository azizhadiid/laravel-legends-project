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
        Schema::create('sewa_ruangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('ruangan_id')->constrained('ruangan')->cascadeOnDelete(); // Menghubungkan dengan ruangan
            $table->dateTime('jam_mulai'); // Jam mulai sewa
            $table->dateTime('jam_selesai'); // Jam selesai sewa
            $table->text('keperluan')->nullable(); // Keperluan sewa
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Status penyewaan
            $table->string('bank')->default('Bank BRI');
            $table->string('no_tagihan')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa_ruangan');
    }
};
