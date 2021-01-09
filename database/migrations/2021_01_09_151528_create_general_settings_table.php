<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('1.png');
            $table->string('email')->default('admin@ecovendy.com');
            $table->string('phone')->default('123-456-789');
            $table->string('address')->default('65, Singapore');
            $table->string('facebook')->default('https://facebook.com');
            $table->string('twitter')->default('https://twitter.com');
            $table->string('instagram')->default('https://instagram.com');
            $table->string('youtube')->default('https://youtube.com');
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
        Schema::dropIfExists('general_settings');
    }
}
