<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowDoesItWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_does_it_works', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('1.jpg');
            $table->string('header')->default('How Does It Work');
            $table->longText('description_one')->default('Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus. Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.');
            $table->string('bullet_one')->default('Together We Can Make A Difference');
            $table->string('bullet_two')->default('Together We Can Make A Difference');
            $table->string('bullet_three')->default('Together We Can Make A Difference');
            $table->string('bullet_four')->default('Together We Can Make A Difference');
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
        Schema::dropIfExists('how_does_it_works');
    }
}
