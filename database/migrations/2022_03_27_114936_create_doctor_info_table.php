<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDoctorInfoTable extends Migration {

	public function up()
	{
		Schema::create('doctor_info', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('doctor_id')->unsigned();
			$table->string('info1', 300);
            $table->string('info2',300)->nullable();
            $table->string('info3',300)->nullable();
            $table->string('info4',300)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('doctor_info');
	}
}
