<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReponsesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reponses', function(Blueprint $table)
		{
			$table->integer('id_reponses', true);
			$table->string('libelle_reponses')->nullable();
			$table->integer('id_candidats');
			$table->integer('id_questions')->index('id_questions');
			$table->index(['id_candidats','id_questions'], 'id_candidats');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reponses');
	}

}
