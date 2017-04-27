<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPhPeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ph_people', function(Blueprint $table)
		{
			$table->foreign('city_id', 'fk_ph_people_ph_cities')->references('id')->on('ph_cities')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ph_people', function(Blueprint $table)
		{
			$table->dropForeign('fk_ph_people_ph_cities');
		});
	}

}
