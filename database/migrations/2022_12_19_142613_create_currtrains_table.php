<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currtrains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->time('time_departure');
            $table->time('time_arrival');
            $table->date('date_departure');
            $table->string('train_code');
            $table->smallInteger('train_wagons');
            $table->tinyInteger('on_hour')->unsigned()->default(1);
            $table->tinyInteger('canceled')->unsigned()->default(0);
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
        Schema::dropIfExists('currtrains');
    }
};
