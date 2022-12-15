<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcq_questions', function (Blueprint $table) {
            $table->id('mcqQuestionId');
            $table->string('Question', 150);
            $table->string('firstOption', 70);            
            $table->string('secondOption', 70);
            $table->string('thirdOption', 70);
            $table->string('fouthOption', 70);
            $table->integer('Answer');
            $table->integer('assignmentId');
            $table->integer('partId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mcq_questions');
    }
};
