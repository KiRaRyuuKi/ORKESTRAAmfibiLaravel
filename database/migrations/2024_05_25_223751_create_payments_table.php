<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('showroom_id')->constrained();
            $table->foreignId('car_id')->constrained();
            $table->decimal('amount', 10, 2);
            $table->string('card_holder');
            $table->string('card_number', 16);
            $table->date('card_expiry');
            $table->string('card_cvv', 3);
            $table->string('date');
            $table->timestamp('payment_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('status', ['pending', 'accepted', 'cancel']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
