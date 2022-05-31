<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePatientTable extends Migration {

	public function up()
	{
		Schema::create('patient', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 50);
			$table->string('phone', 11);
			$table->string('email', 50)->unique();
			$table->date('date_of_birth')->nullable();
			$table->string('password', 50);
            $table->rememberToken('rememberToken');
		});
	}

	public function down()
	{
		Schema::drop('patient');
	}
}
