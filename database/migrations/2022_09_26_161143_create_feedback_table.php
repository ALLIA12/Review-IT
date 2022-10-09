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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fName');
            $table->string('lName');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('subject');
            $table->longText('comment');
            $table->tinyInteger('satisfaction');
            $table->tinyInteger('gender');
            $table->tinyInteger('allow');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedback');
    }
};
