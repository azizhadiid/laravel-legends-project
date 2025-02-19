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
        Schema::table('sewa_ruangan', function (Blueprint $table) {
            $table->string('bank')->default('Bank BRI')->after('status');
            $table->string('no_tagihan')->unique()->after('bank');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sewa_ruangan', function (Blueprint $table) {
            //
        });
    }
};
