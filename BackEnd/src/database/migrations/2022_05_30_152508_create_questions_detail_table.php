<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id')->unique();
            $table->unsignedBigInteger('sub_id');
            $table->unsignedBigInteger('component_id');
            $table->unsignedBigInteger('topic_id');
            $table->string('content')->unique();
            $table->integer('number_answer')->default(0);
            $table->timestamps();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('sub_id')->references('id')->on('subject');
            $table->foreign('component_id')->references('id')->on('component_sub');
            $table->foreign('topic_id')->references('id')->on('topic');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions_detail');
    }
}
