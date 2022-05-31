<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticleTable extends Migration {

	public function up()
	{
		Schema::create('article', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title', 50);
			$table->string('author', 50)->nullable();
			$table->integer('doctor_id')->unsigned()->nullable();
			$table->text('content');
			$table->date('publish_date');
			$table->integer('category_id')->unsigned();
			$table->integer('user_id')->unsigned()->nullable();

		});

	}

	public function down()
	{
		Schema::drop('article');
	}
}
