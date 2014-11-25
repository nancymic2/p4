<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostedJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postedJobs', function($table) {

			//primary key and AI. add time
			$table->increments('id');
			$table->timestamps();

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			//fields

			$table->string('company')->nullable();
			$table->string('role');

			$table->decimal('salary')->nullable();
			$table->date('applyby')->nullable();

			$table->string('url');
});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('postedJobs');
	}

}
