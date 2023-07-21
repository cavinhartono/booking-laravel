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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('daily_slot_id')->references('id')->on('daily_slots')->onDelete('cascade');
            $table->enum('status', ['pending', 'active', 'complate', 'cancel'])->default('pending');
            $table->integer('age');
            $table->string('name', 50);
            $table->text('note')->nullable();
            $table->string('phone_number', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
