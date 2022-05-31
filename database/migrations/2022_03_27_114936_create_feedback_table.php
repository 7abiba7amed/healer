<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFeedbackTable extends Migration {

	public function up()
	{
		Schema::create('feedback', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('patient_id')->unsigned();
			$table->integer('doctor_id')->unsigned();
			$table->tinyInteger('rate')->unsigned()->default('3');
			$table->string('content', 300);
		});
	}

	public function down()
	{
		Schema::drop('feedback');
	}
}