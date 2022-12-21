<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentSubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_sub', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_id');
            $table->string('content');
            $table->timestamps();
            $table->foreign('sub_id')->references('id')->on('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('component_sub');
    }
}
