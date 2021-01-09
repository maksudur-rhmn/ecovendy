<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video')->default('https://player.vimeo.com/video/9519939');
            $table->string('header')->default('Video Presentation');
            $table->string('title')->default('Proper demonstration of how our vending machine works!');
            $table->longText('description_one')->default('Load the vending machine. Prior to operation, a vending machine must be stocked with the products it will dispense to consumers...');
            $table->longText('description_two')->default('Expound the actual teachings of the great explorer of the truth, the master-builder of human happiness, but because those who that are extremely painful.');
            $table->string('bullet_one')->default('Sponsor meals for 50 children for 1 full year.');
            $table->string('bullet_two')->default('Sponsor mid-day meals for one month.');
            $table->string('bullet_three')->default('You can donate clothes, blankets and ect...');
            $table->string('bullet_four')->default('You can donate food material like rice, veggies.');
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
        Schema::dropIfExists('videos');
    }
}
