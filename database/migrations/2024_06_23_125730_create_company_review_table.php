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
        Schema::create('company_review', function (Blueprint $table) {
            $table->id();
            $table->text('review');
            $table->bigInteger('user_id')->unsigned();
            $table->enum('status', ['OnCheck', 'Checked', 'Deleted'])->default('OnCheck');
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_review');
    }
};
