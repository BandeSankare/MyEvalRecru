<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReponsesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reponses', function(Blueprint $table)
		{
			$table->foreign('id_candidats', 'reponses_ibfk_1')->references('id_candidats')->on('candidats')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_questions', 'reponses_ibfk_2')->references('id_questions')->on('questions')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reponses', function(Blueprint $table)
		{
			$table->dropForeign('reponses_ibfk_1');
			$table->dropForeign('reponses_ibfk_2');
		});
	}

}
