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
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id')->nullable();
            $table->string('product_name')->nullable();
            $table->string('fullname');
            $table->string('email');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('amount')->nullable();
            $table->string('currency')->nullable();
            $table->string('payer_name')->nullable();
            $table->string('payer_email')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_method')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donates');
    }
};