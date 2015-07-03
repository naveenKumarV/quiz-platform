<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->text('question')->nullable(false);
            $table->text('option_A')->nullable(false);
            $table->text('option_B')->nullable(false);
            $table->text('option_C')->nullable(false);
            $table->text('option_D')->nullable(false);
            $table->string('answer')->nullable(false);
            $table->string('category')->nullable(false);
            $table->integer('user_id')->unsigned();
            $table->integer('difficulty_rating')->nullable(false);
            $table->timestamps();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
