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
        Schema::create('desti', function (Blueprint $table) {
            $table->string('Nama');
            $table->string('Email');
            $table->string('Nomortelepon');
            $table->char('Seat');
            $table->char('Jumlahtiket');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desti');
    }
};
