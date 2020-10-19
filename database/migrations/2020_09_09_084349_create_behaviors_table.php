<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBehaviorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behaviors', function (Blueprint $table) {
            $table->id();
            $table->integer('goal_id');
            $table->string('task')->default("");
            $table->integer('experience_point')->default(0);
            $table->string('reward')->default("");
            $table->dateTime('time_limit');
            $table->string('choice')->default("");
            $table->integer('display_order')->nullable();
            
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
        Schema::dropIfExists('behaviors');
    }
}
