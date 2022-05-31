<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('doctor', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('article', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctor')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('article', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('category')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('article', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('category', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('post', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patient')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('post', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('category')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('post')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patient')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctor')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('session', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctor')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('session', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patient')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('feedback', function(Blueprint $table) {
			$table->foreign('patient_id')->references('id')->on('patient')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('feedback', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctor')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('doctor_info', function(Blueprint $table) {
			$table->foreign('doctor_id')->references('id')->on('doctor')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('doctor', function(Blueprint $table) {
			$table->dropForeign('doctor_user_id_foreign');
		});
		Schema::table('article', function(Blueprint $table) {
			$table->dropForeign('article_doctor_id_foreign');
		});
		Schema::table('article', function(Blueprint $table) {
			$table->dropForeign('article_category_id_foreign');
		});
		Schema::table('article', function(Blueprint $table) {
			$table->dropForeign('article_user_id_foreign');
		});
		Schema::table('category', function(Blueprint $table) {
			$table->dropForeign('category_user_id_foreign');
		});
		Schema::table('post', function(Blueprint $table) {
			$table->dropForeign('post_patient_id_foreign');
		});
		Schema::table('post', function(Blueprint $table) {
			$table->dropForeign('post_category_id_foreign');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->dropForeign('comment_post_id_foreign');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->dropForeign('comment_patient_id_foreign');
		});
		Schema::table('comment', function(Blueprint $table) {
			$table->dropForeign('comment_doctor_id_foreign');
		});
		Schema::table('session', function(Blueprint $table) {
			$table->dropForeign('session_doctor_id_foreign');
		});
		Schema::table('session', function(Blueprint $table) {
			$table->dropForeign('session_patient_id_foreign');
		});
		Schema::table('feedback', function(Blueprint $table) {
			$table->dropForeign('feedback_patient_id_foreign');
		});
		Schema::table('feedback', function(Blueprint $table) {
			$table->dropForeign('feedback_doctor_id_foreign');
		});
		Schema::table('doctor_info', function(Blueprint $table) {
			$table->dropForeign('doctor_info_doctor_id_foreign');
		});
	}
}
