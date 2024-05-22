<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('showroom_id')->constrained();
            $table->foreignId('brand_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->year('year');
            $table->string('transmission');
            $table->string('fuel_type');
            $table->decimal('price', 10, 2);
            $table->string('status');
            $table->string('color');
            $table->text('description')->nullable();
            $table->integer('capacity');
            $table->string('license_plate');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->json('accessories')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
