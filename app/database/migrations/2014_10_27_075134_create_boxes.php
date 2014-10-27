<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boxes', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('number');
            $table->integer('rotation');
            $table->integer('width');
            $table->integer('height');
            $table->string('fill',10);
            $table->string('stroke',50);
            $table->integer('stroke_width');
            $table->boolean('draggable');
            $table->integer('x');
            $table->integer('y');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
		Schema::drop('boxes');
	}

}
