<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('title');
            $table->string('description');
            $table->string('subject');
            $table->integer('time_limit'); // Add this line
            $table->dateTime('due_datetime')->nullable(); // Add due_datetime field
            // Add other quiz fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}
