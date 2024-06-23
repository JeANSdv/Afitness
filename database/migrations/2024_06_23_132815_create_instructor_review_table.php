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
        Schema::create('instructor_review', function (Blueprint $table) {
            $table->id('review_id');
            $table->bigInteger('instructor_id')->unsigned();
            $table->text('review');
            $table->enum('rate', [1, 2, 3, 4, 5])->default(5);
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('instructor_id')->references('instructor_id')->on('instructor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor_review');
    }
};
