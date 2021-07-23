<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonstersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string("description");
            $table->string('type');
            $table->string('height');
            $table->tinyInteger('isDead');
            $table->string('diet');
            $table->float('health', 6,2);
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('speed');
            $table->string('faction');
            $table->timestamps();
            $table->bigInteger("user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monsters');
    }
}
