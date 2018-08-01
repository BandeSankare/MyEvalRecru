<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidats', function(Blueprint $table)
		{
			$table->integer('id_candidats', true);
			$table->string('nom_candidats', 100)->nullable();
			$table->string('prenom_candidats', 100)->nullable();
			$table->date('date_naiss_candidats')->nullable();
			$table->string('metier_candidats', 100)->nullable();
			$table->string('secteur_act_candidats', 100)->nullable();
			$table->string('statut_candidats', 100)->nullable();
			$table->string('statut_contrat', 100)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('candidats');
	}

}
