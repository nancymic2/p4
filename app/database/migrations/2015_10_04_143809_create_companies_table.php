<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function($table) {

			//primary key and AI. add time
			$table->increments('id');
			$table->timestamps();

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			//fields

			$table->string('company');
			$table->string('website');

			
			$table->date('applied')->nullable();

			$table->string('careersite');
});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('companies');
	}

}
