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
        Schema::create('deleted_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
            $table->string('phone')->nullable();
            $table->enum('phone_verified',['Y','N'])->nullable();
            $table->string('temp_address')->nullable();;
            $table->string('per_address')->nullable();;
            $table->string('pin_code')->nullable();;
            $table->enum('gender', ['M', 'F', 'O'])->nullable();;
            $table->date('date_birth');
            $table->string('token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deleted_users');
    }
};
