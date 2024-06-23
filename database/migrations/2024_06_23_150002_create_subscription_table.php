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
        Schema::create('subscription', function (Blueprint $table) {
            $table->id('subscription_id');
            $table->bigInteger('service_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->unsignedSmallInteger('period');
            $table->string('visit_time');
            $table->foreign('service_id')->references('id')->on('service');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};
