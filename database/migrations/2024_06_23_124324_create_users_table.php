<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar-path');
            $table->date('birth-date');
            $table->string('sex', 10)->default('unspec');
            $table->string('phone_number', 20)->default('unspec');
            $table->bigInteger('role_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('role_id')->references('role_id')->on('role');
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
