<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordRemindersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('password_reminders', function(Blueprint $table)
		{
			$table->increments('id');//
			$table->timestamps();//
			$table->string('email')->index();
			$table->string('token')->index();
			
			$table->integer('user_id')->unsigned();//
			$table->foreign('user_id')->references('id')->on('users');//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('password_reminders');
	}

}
