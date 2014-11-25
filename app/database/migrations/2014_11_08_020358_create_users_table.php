<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
		{
		Schema::create('users', function($table) {

			//primary key and AI. add time
			$table->increments('id');
			$table->timestamps();

			//fields
            $table->string('remember_token', 100);
			$table->string('first');
			$table->string('last');
			$table->string('email')->unique();
			$table->string('password');



		});

		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
