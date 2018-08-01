<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info_candidat extends Model
{
     public $fillable = [
        'nom_candidat',
        'prenom_candidat',
        'age_candidat',
        'metier_candidat'
    ];
}
