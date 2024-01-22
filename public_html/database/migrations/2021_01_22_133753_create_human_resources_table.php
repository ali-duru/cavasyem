<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumanResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('human_resources', function (Blueprint $table) {     
            $table->id();
            $table->string('name');
            $table->string('tc');
            $table->string('birth_place');
            $table->string('birth_date');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('sex');
            $table->boolean('status');
            $table->boolean('driver');
            $table->string('health_problem')->nullable();
            $table->string('travel_problem')->nullable();
            $table->string('languages');
            $table->string('worked');
            $table->text('references');
            $table->text('message');
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
        Schema::dropIfExists('human_resources');
    }
}
