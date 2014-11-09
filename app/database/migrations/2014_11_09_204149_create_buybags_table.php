<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuybagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('buybags', function($table) {

			//primary key and AI. add time
			$table->increments('id');
			$table->timestamps();

			//fields

			$table->string('brand');
			$table->string('model');
			$table->string('color');
			
			$table->decimal('buyprice');
			$table->string('pic');


		});

		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('buybags');
	}

}
