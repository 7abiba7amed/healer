<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountryIdColumnToDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctor', function (Blueprint $table) {
            //

            $table->unsignedInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('doctor', function (Blueprint $table) {
            //
            $table->dropColumn(['country_id']);
            $table->dropForeign(['country_id']);
        });
    }
}
