<!DOCTYPE html>
<html>
<head>
    <title></title>
 <link rel="stylesheet" type="text/css" href="{{asset('css/material_icon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>



</head>
<body>
    <div class="container">
      <p class="titre">Information identitaire</p>
        <div class="formul" >
            <form action="store" method="post" class="col s12">    
            @csrf 
            <div class="row">
               <div class="input-field col s12 tab">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" class="validate" name="nom_candidats">
                  <label for="nom">nom</label>
               </div>

               <div class="input-field col s12 tab">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" class="validate" name="prenom_candidats">
                  <label for="nom">Prenom</label>
               </div>
               
                <div class="input-field col s12 tab">
                  <i class="material-icons prefix">date_range</i>
                  <input id="icon_prefix" type="date" class="validate" name="date_naiss_candidats">
                  <label for="nom">Age</label>
               </div>

                <div class="col s12">
                 <label for="statut_candidats" name="statut_candidats">Statut </label>
                  <p>
                    <label>
                      <input class="with-gap"  name="statut_candidats" type="radio" value="Cadre" checked />
                      <span>Cadre</span>
                    </label>
                   </p>
                  <p>
                    <label>
                      <input class="with-gap"  name="statut_candidats" type="radio" value="Non_cadre" />
                      <span>Non-cadre</span>
                    </label>
                  </p>
                 
               </div>

               
               <div class="col s12">
                 <label for="statut_contrat" name="statut_contrats">Statut contrat</label>
                  <p>
                    <label>
                      <input class="with-gap"  name="statut_contrat" type="radio" value="CDD" checked />
                      <span>CDD</span>
                    </label>
                   </p>
                  <p>
                    <label>
                      <input class="with-gap" name="statut_contrats" type="radio" value="CDI" />
                      <span>CDI</span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input class="with-gap" name="statut_contrats" type="radio"  value="Interim" />
                      <span>Interim</span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input class="with-gap" name="statut_contrats" type="radio" value="Stage" />
                      <span>Stage</span>
                    </label>
                  </p>
                  <p>
                    <label>
                      <input class="with-gap" name="statut_contrats" type="radio" value="Autre" />
                      <span>Autre</span>
                    </label>
                  </p>
               </div>
             
               
                <!--   <div class="form-group">
                    <label for="experience" class="bmd-label-floating">Années d'experience</label>
                    <select class="form-control" id="experience" name="experience">
                      <option value="1ans">1 ans</option>
                      <option value="2ans">2 ans</option>
                      <option value="3ans">3 ans</option>
                      <option value="4ans">4 ans</option>
                      <option value="5ans">5 ans </option>
                      <option value="6ans">5 ans </option>
                    </select>
                  </div> -->
             <!--  <div class="input-field col s12">
                  <select >
                    <option value="" >Choose your option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                  </select>
                  <label>Materialize Multiple Select</label>
                </div>
 -->

<!--  
                   <div class="form-group">
                    <label for="secteuractivite" class="bmd-label-floating">Votre secteur d'activite</label>
                    <select class="form-control" id="secteuractivite" name="secteuractivite">
                      <option value="secteur1">secteur 1</option>
                      <option value="secteur2">secteur 2</option>
                      <option value="secteur3">secteur 3</option>
                      <option value="secteur4">secteur 4</option>
                      <option value="secteur5">secteur 5 </option>
                      <option value="secteur6">secteur 6 </option>
                    </select>
                  </div><br>
                  -->
                
              <!--     <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="cadre" checked>
                    Status Cadre
                    </label>
                 </div>

                <div class="radio">
                    <label>
                      <input type="radio" name="status" id="status" value="non-cadre">
                     Status  No-cadre
                    </label>
                </div> <br> -->
            
          
                  <div class="col s12">    
                    <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Suivant
                      <i class="material-icons right">navigate_next</i>
                    </button>
                  </div>
                 </div>
            </form>
        </div>
    </div>
<script src="{{asset('js/materialize.min.js')}}"> </script>
<script src="{{asset('js/jquery.js')}}"> </script>

	
</body>
</html>