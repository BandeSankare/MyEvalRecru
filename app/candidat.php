<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidat extends Model
{
        protected $fillable = [
       
      'nom_candidats',
      'prenom_candidats',
      'date_naiss_candidats',
      'metier_candidats',
      'secteur_act_candidats',
      'statut_candidats',
      'statut_contrat',             
    ];
 
}
