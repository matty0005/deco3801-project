<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread_topics', function (Blueprint $table) {
            $table->string('title')->unique();
            $table->string('short_desc')->default('Lorem ipsum dolor sit amet.');
            $table->mediumText('desc')->default('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacus erat, efficitur et arcu sed, vestibulum eleifend dui. Morbi congue lectus et nunc accumsan, nec bibendum dui blandit. Suspendisse potenti. Vestibulum arcu nisi, semper eget tortor et, semper fermentum mi. Nunc in nulla suscipit, rutrum massa a, facilisis mi. Aenean quis ultricies purus, eu rutrum arcu. Vestibulum porttitor interdum lorem, nec convallis dui volutpat quis.');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thread_topics');
    }
}
