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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('heading');
            $table->longText('description');
            $table->string('title01');
            $table->string('description01', 1000);
            $table->string('title02');
            $table->string('description02', 1000);
            $table->string('title03');
            $table->string('description03', 1000);
            $table->string('title04');
            $table->string('description04', 1000);
            $table->string('title05');
            $table->string('description05', 1000);
            $table->string('title06');
            $table->string('description06', 1000);
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
        Schema::dropIfExists('services');
    }
};
