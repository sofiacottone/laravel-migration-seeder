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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_time', $precision = 0);
            $table->time('arrival_time', $precision = 0);
            $table->string('train_code', 50);
            $table->tinyInteger('carriages_number')->unsigned()->nullable();
            $table->tinyInteger('is_ontime')->unsigned()->default(1);
            $table->tinyInteger('is_canceled')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
