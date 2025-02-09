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
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('first_name'); // Ism
        $table->string('last_name'); // Familiya
        $table->string('password'); // Parol
        $table->string('email');  // Email
        $table->string('phone');  // Email
        $table->string('role')->default('user');
        $table->timestamps(); // Yaratilgan va yangilangan vaqtlar uchun
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
