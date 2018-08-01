<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
         protected $fillable = [
			  'id_test',
			  'information_recues' ,
			  'qualite_discours' ,
			  'qualite_information_poste' ,
			  'qualite_courriels_convocation' ,
			  'amelioration_qualite_echange' ,
			  'exp_accueil' ,
			  'temps_attente' ,
			  'objectif_deroulement_entretien' ,
			  'disponibite_ecoute' ,
			  'presentation_etape_processus' ,
			  'connaissance_interloc_metier' ,
			  'presentation_offre_interloc_rh' ,
			  'professionnalisme_interloc_rh' ,
			  'amabilite_interloc_rh' ,
			  'discrimination_interloc_rh' ,
			  'sentir_a_aise' ,
			  'test_cognotif_comportementaux' ,
			  'pertinance_test_congnitif' ,
			  'test_metier' ,
			  'pertinence_test_metier' ,
			  'amelioration_experience_interloc' ,
			  'aprec_info_poste' ,
			  'aprec_env_poste' ,
			  'info_ligne_metier' ,
			  'ecoute_dispo_interloc_metier' ,
			  'amabilite_interloc_metier' ,
			  'sentir_aise_interloc_metier' ,
			  'amelioration_exp_metie' ,
			  'aprec_duree_recru' ,
			  'amelioration_etape_recru' ,
			  'conseil_proche' ,
			  'no_conseil' ,
			  'connaissance_opportunite' ,
			  'aprec_recru_en_ligne'
         ];
}
