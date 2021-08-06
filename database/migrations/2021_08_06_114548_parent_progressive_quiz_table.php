<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParentProgressiveQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_progress_quiz', function (Blueprint $table) {
            $table->id()->comment("AKA quiz_id");
            $table->bigInteger('user_id');
            $table->bigInteger('quiz_questions_id');
            $table->timestamp('last_completed');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent_progress_quiz');
        
    }
}
