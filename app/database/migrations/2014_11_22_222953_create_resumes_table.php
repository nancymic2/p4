<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('resumes', function($table) {

			//primary key and AI. add time
			$table->increments('id');
			$table->timestamps();

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			//fields

			$table->string('url')->nullable();
				$table->string('name');
			$table->text('resumetext')->nullable();
	
});
}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('resumes');
	}

}
