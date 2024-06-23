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
        Schema::create('purchase', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subscription_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->datetime('date_start');
            $table->datetime('date_end');
            $table->timestamps();
            $table->foreign('subscription_id')->references('subscription_id')->on('subscription');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase');
    }
};
