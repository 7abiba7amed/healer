<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentTable extends Migration {

	public function up()
	{
		Schema::create('comment', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('post_id')->unsigned();
			$table->integer('patient_id')->unsigned()->nullable();
			$table->integer('doctor_id')->unsigned()->nullable();
			$table->string('content');
			$table->datetime('publish_date');
		});
	}

	public function down()
	{
		Schema::drop('comment');
	}
}