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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appuser_id');
            $table->date('transaction_date');
            $table->unsignedBigInteger('coffee_id');
            $table->timestamps();

            $table->foreign('appuser_id')->references('id')->on('app_users')->onDelete('cascade');
            $table->foreign('coffee_id')->references('id')->on('coffees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
