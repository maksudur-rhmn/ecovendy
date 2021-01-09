<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhoWeAresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('who_we_ares', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('1.jpg');
            $table->string('header')->default('Who we Are');
            $table->string('sub_header')->default('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque suscipit repellendus explicabo.');
            $table->string('title')->default('Together We Can Make A Difference');
            $table->longText('description_one')->default('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis ab animi. Fuga dolorem quaerat omnis sunt quae optio quam ad, ipsa, dolores debitis, maxime aliquid consequatur facere quibusdam ullam repellendus dolor atque alias.');
            $table->longText('description_two')->default('Eos provident dolorum ducimus, quam ab, ipsa nobis officia facere quia atque quibusdam, nihil vel, reprehenderit non perferendis quasi fugit magni dolorem fugiat officiis id doloribus sit.');
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
        Schema::dropIfExists('who_we_ares');
    }
}
