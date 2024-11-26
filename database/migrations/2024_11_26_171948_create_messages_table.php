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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Sender_id')->references('id')->on('Users');
            $table->bigInteger('Receiver_id');
            $table->foreignId('Receiver_id_id')->references('id')->on('Users');
            $table->foreignId('Conversation_id')->constrained();
            $table->boolean('Read')->default(0)->nullable(false);
            $table->text('Body')->nullable();
            $table->string('Type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
