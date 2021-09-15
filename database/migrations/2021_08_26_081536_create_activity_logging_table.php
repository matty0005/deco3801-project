<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLoggingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_logging', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("url", 255);
            $table->string("user_agent", 255);
            $table->string("ip", 16);
            $table->string("iso_code", 6);
            $table->string("country", 64);
            $table->string("city", 64);
            $table->string("state", 64);
            $table->string("state_name", 64);
            $table->string("postal_code", 64);
            $table->string("timezone", 64);
            $table->string("continent", 24);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_logging');
    }
}
