<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorTable extends Migration {

	public function up()
	{
		Schema::create('doctor', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50)->unique();
			$table->string('email', 50)->unique();
			$table->string('certificate',50);
			$table->string('password', 50);
			$table->string('license_no', 50)->unique();
			$table->string('job_title', 50);
			$table->string('description', 300);
			$table->smallInteger('session_price')->unsigned()->default(50);
			$table->boolean('active')->default(0);
			$table->tinyInteger('rate')->default('3');
			$table->integer('user_id')->unsigned()->nullable();
            $table->rememberToken('rememberToken');
		});
	}

	public function down()
	{
		Schema::drop('doctor');
	}
}
