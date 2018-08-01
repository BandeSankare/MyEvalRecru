<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>questionnaire</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favicon.ico" /> </head>
        <link rel="stylesheet" href="https://unpkg.com/vue-form-wizard/dist/vue-form-wizard.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
         <!-- END HEAD -->

        <!-- Styles formulaire design -->
        <style>
                        
             body {
                margin-top:10%;
            }
            .stepwizard-step p {
                margin-top: 0px;
                color:#666;
            }
            .stepwizard-row {
                display: table-row;
            }
            .stepwizard {
                display: table;
                width: 100%;
                position: relative;
            }
            .stepwizard-step button[disabled] {
                /*opacity: 1 !important;
                filter: alpha(opacity=100) !important;*/
            }
            .stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
                opacity:1 !important;
                color:#bbb;
            }
            .stepwizard-row:before {
                top: 14px;
                bottom: 0;
                position: absolute;
                content:" ";
                width: 100%;
                height: 1px;
                background-color: #ccc;
                z-index: 0;
            }
            .stepwizard-step {
                display: table-cell;
                text-align: center;
                position: relative;
            }
            .btn-circle {
                width: 20px;
                height: 20px;
                text-align: center;
                padding: 6px 0;
                font-size: 5px;
                line-height: 1.428571429;
                border-radius: 15px;
            }

            .title{
                margin-bottom: 50px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="container">

                <h1 class="text-center title">questionnaire</h1>

                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-1" type="button" class="btn btn-success btn-circle"></a>
                            <p></p>
                        </div>
                        <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                            <p></p>
                        </div>
                        <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                            <p></p>
                        </div>
                        <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                            <p></p>
                        </div>
                         <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                            <p></p>
                        </div>
                         <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                            <p></p>
                        </div>
                         <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                            <p></p>
                        </div>
                         <div class="stepwizard-step col-xs-1"> 
                            <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled"></a>
                            <p></p>
                        </div>
                        
                    </div>
                </div>
                
                <form role="form" action="store" method="post">
                    @csrf
                   
                    <div class="panel panel-primary setup-content" id="step-1">
                        <div class="panel-heading">
                             <h3 class="panel-title"> Quelle est votre appréciation concernant ?</h3>
                        </div>
                        <div class="panel-body">

                        <div class="form-group"> 
                            <label class="control-label"> 1. les informations reçues en amont du processus de recrutement sur les différentes étapes de celui-ci</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="information_recues" value="Tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="information_recues" value="Satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="information_recues" value="Passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label"> 2. la qualité du discours tenu par le chargé de recrutement</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="qualite_discours" value="Tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="qualite_discours" value="Satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="qualite_discours" value="Passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">    3. la qualité des informations relatives au poste, transmises par le chargé de recrutement lors de vos entretiens </label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="qualite_information_poste" value="Tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="qualite_information_poste" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="qualite_information_poste" value="Passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">       4. la qualité des courriels de convocation reçus en préparation d’entretiens </label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="qualite_courriels_convocation" value="Tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="qualite_courriels_convocation" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="qualite_courriels_convocation" value="Passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                            
                            <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
                        </div>
                    </div>
                    
                    <div class="panel panel-primary setup-content" id="step-2">
                        <div class="panel-heading">
                             <h3 class="panel-title"> Que pourrions-nous améliorer sur la qualité de nos échanges en amont du processus de recrutement?</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="amelioration" ></label>
                                <textarea class="form-control" id="amelioration" rows="" placeholder="Les points  à améliorer"  name="amelioration_qualite_echange"></textarea>
                            </div>           
                                <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
                        </div>
                    </div>
                    
                    <div class="panel panel-primary setup-content" id="step-3">
                        <div class="panel-heading">
                             <h3 class="panel-title"> Quelle a été votre expérience avec nos interlocuteurs RH sur l’aspect ?</h3>
                        </div>
                        <div class="panel-body">

                        <div class="form-group"> 
                            <label class="control-label"> 1.Accueil</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="exp_accueil" value="Tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="exp_accueil" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="exp_accueil" value="Tres satisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label"> 2. Temps d’attente</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="temps_attente" value="Satisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="temps_attente" value="Satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="temps_attente" value="pasSatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">    3. Présentation des objectifs et du déroulement de l’entretien</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="objectif_deroulement_entretien" value="Tres satisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="objectif_deroulement_entretien" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="objectif_deroulement_entretien" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">  4.disponibilité et l'écoute de vos interlocuteurs RH pendant le (s) entretien (s) de recrutement</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="disponibite_ecoute" value="tresSatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="disponibite_ecoute" value="Satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="disponibite_ecoute" value="pasSatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="control-label"> 5.présentation des prochaines étapes du processus de recrutement</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="presentation_etape_processus" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="presentation_etape_processus" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="presentation_etape_processus" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="control-label">   6. connaissance de l’interlocuteur RH du métier ciblé </label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="connaissance_interloc_metier" value="tresSatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="connaissance_interloc_metier" value="Satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="connaissance_interloc_metier" value="pasSatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                            
                             <div class="form-group">
                            <label class="control-label"> 7.présentation de l’offre ou de l’opportunité  par vos interlocuteurs RH</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="presentation_offre_interloc_rh" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="presentation_offre_interloc_rh" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="presentation_offre_interloc_rh" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                          <div class="form-group">
                            <label class="control-label"> 8.professionnalisme de vos interlocuteurs RH</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="professionnalisme_interloc_rh" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="professionnalisme_interloc_rh" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="professionnalisme_interloc_rh" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label"> 9.amabilité de vos interlocuteurs RH</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="amabilite_interloc_rh" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="amabilite_interloc_rh" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="amabilite_interloc_rh" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label"> 9.respect des règles de diversité et de non-discrimination tout au long du processus de recrutement</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="discrimination_interloc_rh" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="discrimination_interloc_rh" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="discrimination_interloc_rh" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                            
                            
                            <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
                        </div>
                    </div>

                    <div class="panel panel-primary setup-content" id="step-4">
                        <div class="panel-heading">
                             <h3 class="panel-title"> Interlocuteur </h3>
                        </div>
                        <div class="panel-body">

                        <div class="form-group"> 
                            <label class="control-label">  Vos interlocuteurs vous ont-ils permis de vous sentir  à l’aise durant les entretiens de recrutement ?</label>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="sentir_a_aise" value="oui">Oui</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="sentir_a_aise" value="non">Non</label>
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <label class="control-label">Avez vous avez passé des tests cognitifs ou comportementaux</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="test_cognotif_comportementaux" value="oui">Oui</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="test_cognotif_comportementaux" value="non">Non</label>
                            </div>
                          
                        </div>

                        <div class="form-group">
                            <label class="control-label"> Si oui, Comment évalueriez-vous la pertinence de ces tests ?</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="pertinance_test_congnitif" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="pertinance_test_congnitif" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="pertinance_test_congnitif" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Avez vous avez passé des tests métier</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="test_metier" value="oui">Oui</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="test_metier" value="non">Non</label>
                            </div>
                           
                        </div>

                          <div class="form-group">
                            <label class="control-label">Si oui, comment évalueriez-vous la pertinence de ces tests au regard de l’opportunité ?</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="pertinence_test_metier" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="pertinence_test_metier" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="pertinence_test_metier" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
                        </div>
                    </div>

                   <div class="panel panel-primary setup-content" id="step-5">
                        <div class="panel-heading">
                             <h3 class="panel-title">Que pourrions-nous améliorer pour rendre votre expérience recrutement avec les interlocuteurs RH plus agréable ?</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="amelioration" ></label>
                                <textarea class="form-control" id="amelioration" rows="" placeholder="Les points  à améliorer" name="amelioration_experience_interloc"></textarea>
                            </div>           
                                <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
                        </div>
                    </div>
                    
                    <div class="panel panel-primary setup-content" id="step-6">
                        <div class="panel-heading">
                             <h3 class="panel-title">Quelle est votre appréciation concernant ?</h3>
                        </div>
                        <div class="panel-body">

                        <div class="form-group"> 
                            <label class="control-label">  1. les informations reçues sur le poste pendant le (s) entretien (s) de recrutement </label>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="aprec_info_poste" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="aprec_info_poste" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="aprec_info_poste" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">    2. les informations reçues sur l'environnement du poste (clients, équipe en place, moyens alloués,…) pendant le (s) entretien (s) de recrutement </label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="aprec_env_poste" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="aprec_env_poste" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="aprec_env_poste" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">    3. des informations reçues par la ligne métier (recruteur) pendant le (s) entretien (s) de recrutement  </label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="info_ligne_metier" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="info_ligne_metier" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="info_ligne_metier" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">     4. concernant la disponibilité et l'écoute de vos interlocuteurs métier pendant le (s) entretien (s) de recrutement </label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="ecoute_dispo_interloc_metier" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="ecoute_dispo_interloc_metier" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="ecoute_dispo_interloc_metier" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label"> 5.l’amabilité de vos interlocuteurs métier</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="amabilite_interloc_metier" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="amabilite_interloc_metier" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="amabilite_interloc_metier" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>
                            
                            <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-7">
                        <div class="panel-heading">
                             <h3 class="panel-title"> Interlocuteur </h3>
                        </div>
                        <div class="panel-body">

                            <div class="form-group"> 
                                <label class="control-label">   Vos interlocuteurs métier vous ont-ils permis de vous sentir à l’aise durant le(s) entretien(s) de recrutement ?</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="sentir_aise_interloc_metier" value="oui">Oui</label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                     <input type="checkbox" class="form-check-input" name="sentir_aise_interloc_metier" value="oui">Non</label>
                                </div>
                               
                            </div>
                            <div class="form-group">
                                <label for="amelioration" >Que pourrions-nous améliorer pour rendre l’expérience recrutement avec les lignes métier plus   agréable ?</label>
                                <textarea class="form-control" id="amelioration" rows="" placeholder="Les points  à améliorer" name="amelioration_exp_metier"></textarea>
                            </div> 

                              <div class="form-group"> 
                                <label class="control-label">Quelle est votre appréciation  de la durée du processus de recrutement (entre l'envoi du dossier de candidature et l’offre financière ?</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="aprec_duree_recru" value="courte">Courte</label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                     <input type="checkbox" class="form-check-input" name="aprec_duree_recru" value="longue">Longue</label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                     <input type="checkbox" class="form-check-input" name="aprec_duree_recru" value="treslongue">Tres longue</label>
                                </div>

                            </div>
                              <div class="form-group"> 
                                <label class="control-label"> Quelles étapes du processus de recrutement pourrions-nous améliorer ?</label>

                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="amelioration_etape_recru" value="Prise de contact">Prise de contact</label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                     <input type="checkbox" class="form-check-input" name="amelioration_etape_recru" value="Entretien métier">Entretien métier</label>
                                </div>
                               <div class="form-check">
                                    <label class="form-check-label">
                                     <input type="checkbox" class="form-check-input" name="amelioration_etape_recru" value="Entretien RH">Entretien RH</label>
                                </div>

                            </div>
                              <div class="form-group"> 
                                <label class="control-label"> Conseillerez-vous la SGBS à un proche en recherche d’opportunités ?</label>
                              
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="conseil_proche" value="oui">Oui</label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                     <input type="checkbox" class="form-check-input" name="conseil_proche" value="non">Non</label>
                                </div>
                             </div>

                             <div class="form-group">
                                <label for="amelioration" >Si non, pourquoi ?</label>
                                <textarea class="form-control" id="amelioration" rows="" placeholder="Les points  à améliorer" name="no_conseil"></textarea>
                            </div>
                          <button class="btn btn-primary nextBtn pull-right" type="button">Suivant</button>
                        </div>
                    </div>
                    <div class="panel panel-primary setup-content" id="step-8">
                        <div class="panel-heading">
                             <h3 class="panel-title">Comment avez-vous eu connaissance de cette opportunité ?</h3>
                        </div>
                        <div class="panel-body">

                        <div class="form-group"> 
                            <label class="control-label"></label>
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="connaissance_opportunite" value="Siteinternet">Site internet</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="connaissance_opportunite" value="Reseausociaux">Reseau sociaux</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="connaissance_opportunite" value="Presseécrite">Presse écrite</label>
                            </div>
                             <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="connaissance_opportunite" value="amis">Amis</label>
                            </div>
                             <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="connaissance_opportunite" value="AgentSGBS">Agent SGBS</label>
                            </div>
                             <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="connaissance_opportunite" value="autre">Autre</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Quelle appréciation donneriez-vous à notre rubrique recrutement en ligne ?</label>
                        
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="aprec_recru_en_ligne" value="tressatisfaisant">Tres satisfaisant</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                 <input type="checkbox" class="form-check-input" name="aprec_recru_en_ligne" value="satisfaisant">Satisfaisant</label>
                            </div>
                            <div class="form-check">
                                 <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="aprec_recru_en_ligne" value="passatisfaisant">Pas satisfaisant</label>
                            </div>
                        </div>                         
                        <button class="btn btn-success pull-right" type="submit">Finish!</button>
                        </div>
                    </div>
                </form>

            </div>      
       </div>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
                $(document).ready(function () {

                var navListItems = $('div.setup-panel div a'),
                    allWells = $('.setup-content'),
                    allNextBtn = $('.nextBtn');

                allWells.hide();

                navListItems.click(function (e) {
                    e.preventDefault();
                    var $target = $($(this).attr('href')),
                        $item = $(this);

                    if (!$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-success').addClass('btn-default');
                        $item.addClass('btn-success');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                });

                allNextBtn.click(function () {
                    var curStep = $(this).closest(".setup-content"),
                        curStepBtn = curStep.attr("id"),
                        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                        curInputs = curStep.find("input[type='text'],input[type='url']"),
                        isValid = true;

                    $(".form-group").removeClass("has-error");
                    for (var i = 0; i < curInputs.length; i++) {
                        if (!curInputs[i].validity.valid) {
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                        }
                    }

                    if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
                });

                $('div.setup-panel div a.btn-success').trigger('click');
            });
                
            </script>

    </body>
</html>
