<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnglishExamTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('english_exam_type', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('exam_type', 50);
            $table->unsignedDecimal('ielts_reading')->nullable();
            $table->unsignedDecimal('ielts_listening')->nullable();
            $table->unsignedDecimal('ielts_writing')->nullable();
            $table->unsignedDecimal('ielts_speaking')->nullable();
            $table->unsignedDecimal('gmat_verbal_score')->nullable();
            $table->unsignedInteger('gmat_verbal_rank')->nullable();
            $table->unsignedDecimal('gmat_quo_score')->nullable();
            $table->unsignedInteger('gmat_quo_rank')->nullable();
            $table->unsignedDecimal('gmat_writing_score')->nullable();
            $table->unsignedInteger('gmat_writing_rank')->nullable();
            $table->unsignedDecimal('gmat_total_score')->nullable();
            $table->unsignedInteger('gmat_total_rank')->nullable();
            $table->unsignedDecimal('toefl_reading')->nullable();
            $table->unsignedDecimal('toefl_listening')->nullable();
            $table->unsignedDecimal('toefl_writing')->nullable();
            $table->unsignedDecimal('toefl_speaking')->nullable();
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
        Schema::dropIfExists('english_exam_type');
    }
}
