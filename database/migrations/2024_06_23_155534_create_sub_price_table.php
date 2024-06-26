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
        Schema::create('sub_price', function (Blueprint $table) {
            $table->id('subscription_id');
            $table->float('price', 8, 2);
            $table->timestamps();
            $table->foreign('subscription_id')->references('id')->on('subscription');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_price');
    }
};
