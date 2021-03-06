<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhatCanYouDosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('what_can_you_dos', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('1.jpg');
            $table->string('header')->default('what can you do to help');
            $table->string('title')->default('Donec ornare, est sed tincidunt placerat.');
            $table->longText('description_one')->default('Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus. Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.');
            $table->longText('description_two')->default('Mauris id enim id purus ornare tincidunt. Aenean vel consequat risus. Proin viverra nisi at nisl imperdiet auctor. Donec ornare, est sed tincidunt placerat, sem mi suscipit mi.');
            $table->string('bullet_one')->default('Help protect the environment and sustain its natural resources');
            $table->string('bullet_two')->default('Ecologically responsible decisions and lifestyles');
            $table->string('bullet_three')->default('Help protect the environment and sustain its natural resources');
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
        Schema::dropIfExists('what_can_you_dos');
    }
}
