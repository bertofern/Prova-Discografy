<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lps extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lps', function(Blueprint $table)
		{
            $table->increments('id');
            $table->integer('artist_id');
			$table->string('name'); 
            $table->string('description');
        });
        /* Schema::table('users', function (Blueprint $table) {
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('set null')->onUpdate('cascade');
        });*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lps');
	}

}
