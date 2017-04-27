<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPhPeopleHobbiesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ph_people_hobbies_connections', function(Blueprint $table)
		{
			$table->foreign('hobbies_id', 'fk_ph_people_hobbies_connections_ph_hobbies1')->references('id')->on('ph_hobbies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('people_id', 'fk_ph_people_hobbies_connections_ph_people1')->references('id')->on('ph_people')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ph_people_hobbies_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_ph_people_hobbies_connections_ph_hobbies1');
			$table->dropForeign('fk_ph_people_hobbies_connections_ph_people1');
		});
	}

}
