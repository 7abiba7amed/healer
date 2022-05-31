<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionTable extends Migration {

	public function up()
	{
		Schema::create('session', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('doctor_id')->unsigned();
			$table->integer('patient_id')->unsigned();
			$table->datetime('date_time');
		});
	}

	public function down()
	{
		Schema::drop('session');
	}
}