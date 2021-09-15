<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_settings_id');
            $table->integer('theme')->default(2);
            $table->date('dob')->nullable();
            $table->integer('activity_level')->default(1);

            $table->timestamps();

            $table->foreign('user_settings_id')->references('id')->on('user_settings')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kids');
    }
}
