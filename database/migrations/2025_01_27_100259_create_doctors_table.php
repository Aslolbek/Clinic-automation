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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('profession_id'); // profession_id ustuni unsigned bo'lishi kerak
        $table->string('first_name'); // Ism
        $table->string('last_name'); // Ism
        $table->string('password'); // Ism
        $table->string('email');  // Familiya
        $table->text('about')->nullable(); // Hozirgi holati haqida ma'lumot (ixtiyoriy)
        $table->string('photo');
        $table->string('role')->default('doctor');
        $table->timestamps(); // Yaratilgan va yangilangan vaqtlar uchun
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
