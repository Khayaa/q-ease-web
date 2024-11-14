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
        Schema::create('queue_positions', function (Blueprint $table) {
            $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('queue_id')->constrained()->onDelete('cascade');
    $table->integer('position')->nullable(); // User's position in the queue
    $table->integer('estimated_time')->default(0); // Estimated wait time for the user
    $table->boolean('check_in_status')->default(false); // Check-in status
    $table->boolean('notification_sent')->default(false); // Notification status
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queue_positions');
    }
};
