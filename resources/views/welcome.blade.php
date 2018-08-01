<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      



        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

           
            #text_machine{
                 margin: 0 auto;
                 width: 100%;
                 padding: 2%;
                 color:#000;
                 font-size: 25px;
                 font-family: 'Raleway', sans-serif;
            }
            .paragraphe{
                color: #000000;
                font-size: 16px;       
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <h1>Bienvenue sur l’application</h1>
                <div class="title m-b-md">
                 MyEvalRecru
                </div>
                <div class="container">
                    <div class="row">                        
                        <div id="text_machine"></div>
                    </div>
                </div>
                
                <div class="container">
                     <p class="text-justify paragraphe">

                        Vous avez rencontré au cours des 6 dernières semaines (à confirmer avec le SLA) plusieurs interlocuteurs de la Direction des Ressources Humaines, des lignes métiers et/ou de la Direction Générale. <br>
                        Désireux d’améliorer continuellement la qualité de nos services et d’en optimiser la valeur ajoutée, nous sommes convaincus que votre évaluation constitue le meilleur moyen pour nous d’y parvenir. <br>
                        A cet effet, nous sollicitons 05 minutes de votre temps pour partager avec nous votre ressenti, vos points de satisfaction ou encore les désagréments que vous avez pu rencontrer durant tout le processus de recrutement. <br>
                        N’hésitez pas à nous faire part de vos suggestions à la fin du questionnaire. <br>

                        Clause sur le caractère confidentiel des données <br>
                        Clause sur les conditions et l’utilisation potentielle de données à caractère personnel
                    </p>

                 </div>

                 <a href="question" class="button">Continuer</a>


            </div>

                 <script type="text/javascript">
                    
                    var monText = "Recueil de feedback expérience candidat";      
                    var TabText = monText.split("");      
                    var temps; 
                    function loop(){   
                            if(TabText.length > 0){
                                document.getElementById("text_machine").innerHTML += TabText.shift();
                            }else{
                                  clearTimeout(temps);
                                  }
                    
                            temps = setTimeout('loop()',100);    
                        }
                        loop();
                  </script>

    </body>
</html>
