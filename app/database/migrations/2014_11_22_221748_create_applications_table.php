<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
				Schema::create('applications', function($table) {

			//primary key and AI. add time
			$table->increments('id');
			$table->timestamps();

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			//fields

			$table->string('company')->nullable();
			$table->string('role');
			$table->string('city')->nullable();
			$table->string('hiringMgr')->nullable();
			$table->decimal('salary')->nullable();
			$table->date('applyDate');
			$table->date('followupBy')->nullable();
			$table->string('decision')->nullable();
			$table->string('rating')->nullable();
			$table->string('resumeUsed');
			$table->string('howapplied')->nullable();
			$table->string('website')->nullable();
			$table->string('username')->nullable();
			$table->string('password')->nullable();
			$table->string('recnumber')->nullable();


			});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('applications');
	}

}
