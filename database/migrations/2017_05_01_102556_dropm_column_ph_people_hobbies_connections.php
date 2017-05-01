<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropmColumnPhPeopleHobbiesConnections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::table('ph_people_hobbies_connections', function (Blueprint $table) {

                $table->dropColumn('id');

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ph_people_hobbies_connections', function (Blueprint $table) {

            $table->string('id', 36);

        });
    }
}
