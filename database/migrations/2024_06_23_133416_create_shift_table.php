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
        Schema::create('shift', function (Blueprint $table) {
            $table->id('shift_id');
            $table->bigInteger('instructor_id')->unsigned();
            $table->dateTime('time_start');
            $table->dateTime('time_end');
            $table->timestamps();
            $table->foreign('instructor_id')->references('instructor_id')->on('instructor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shift');
    }
};
