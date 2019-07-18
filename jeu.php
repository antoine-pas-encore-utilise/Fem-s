 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<link rel="stylesheet" type="text/css" href="CSS/Jeu.css">
 		<link rel="stylesheet" type="text/css" href="Global.css">
 		<link href="https://fonts.googleapis.com/css?family=Cinzel|Great+Vibes|Just+Another+Hand|Permanent+Marker|Shadows+Into+Light|Tangerine&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Javascript -->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 		<title> Fems's | Jeu concours </title>	
 	</head>
 	<body>	
 		<header>
 			<div id="bandeau">
	 			<img src="Images/champions.jpg" width="100" height="70">
	 			<div id="title"> 
		 			<h1 style="color:#000000!important"> Fem's 2019 </h1> 
		 			<div style="color:#000000!important; font-size:16px!important"> Vendredi 18 et samedi 19 octobre </div>
	 			</div>
	 			<img src="Images/champions.jpg" width="100" height="70">
 			</div>
 			<nav class="band">
	 			<a href="fems.html" class="menu" id="menu1"> Accueil</a>
	 			<a href="inscription.php" class="menu" id="menu2"> Inscription</a>
	 			<a href="description.html" class="menu" id="menu3"> Le Fem's pour les nuls </a>
	 			<a href="jeu.php" class="menu" id="menu4"> Jeu concours </a>
	 			<a href="orga.html" class="menu" id="menu5"> Déroulement du tournoi </a>
	 			<a href="diver.html" class="menu" id="menu6"> En savoir plus</a>
 			</nav> 
 		</header>

 		<section >
 			<h2 style="color:#000000!important; font-weight:bold;"> Qui veut gagner du planqueton ? </h2>
            <form method="post" action="liste.php" name="paris">
                <div id="premierePhase">
                    <h3>
                        Qui sera l'équipe gagnante du Fem's édition 2020 ?
                    </h3>
                    <h3>Organise les poules en fonction du classement que tu veux parier, puis appuie sur VALIDER.</h3>
                    <div id ="poules" class="row" >
                        <div class="pouleA">
                             <h3 class="titrepoule">
                                    Poule A
                            </h3>
                            <div class="row pouleA">
                                 <ul>
                                    <li class="organisation">1er</li>
                                    <li class="organisation">2ème</li>
                                    <li class="organisation">3ème</li>
                                    <li class="organisation">4ème</li>
                                </ul>
                                <ul id="sortable1" style="margin-left:-39px!important">
                                    <li id="1A" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 1A</div>
                                    </li>
                                    <li id="2A" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 2A</div>
                                    </li>
                                    <li id="3A" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 3A</div>
                                    </li>
                                    <li id="4A" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 4A</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pouleB">
                            <h3 class="titrepoule">
                                    Poule B
                            </h3>
                            <div class="row pouleB">
                                 <ul>
                                    <li class="organisation">1er</li>
                                    <li class="organisation">2ème</li>
                                    <li class="organisation">3ème</li>
                                    <li class="organisation">4ème</li>
                                </ul>
                                <ul id="sortable2" style="margin-left:-39px!important">
                                   <li id="1B" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 1B</div>
                                    </li>
                                    <li id="2B" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 2B</div>
                                    </li>
                                    <li id="3B" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 3B</div>
                                    </li>
                                    <li id="4B" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 4B</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pouleC">
                             <h3 class="titrepoule">
                                    Poule C
                            </h3>
                            <div class="row pouleA">
                                <ul>
                                    <li class="organisation">1er</li>
                                    <li class="organisation">2ème</li>
                                    <li class="organisation">3ème</li>
                                    <li class="organisation">4ème</li>
                                </ul>
                                <ul id="sortable3" style="margin-left:-39px!important" >
                                    <li id="1C" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 1C</div>
                                    </li>
                                    <li id="2C" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 2C</div>
                                    </li>
                                    <li id="3C" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 3C</div>
                                    </li>
                                    <li id="4C" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 4C</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pouleD">
                            <h3 class="titrepoule">
                                    Poule D
                            </h3>
                            <div class="row pouleD">
                                 <ul>
                                    <li class="organisation">1er</li>
                                    <li class="organisation">2ème</li>
                                    <li class="organisation">3ème</li>
                                    <li class="organisation">4ème</li>
                                </ul>
                                <ul id="sortable4" style="margin-left:-39px!important">
                                   <li id="1D" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 1D</div>
                                    </li>
                                    <li id="2D" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 2D</div>
                                    </li>
                                    <li id="3D" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 3D</div>
                                    </li>
                                    <li id="4D" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 4D</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pouleC">
                             <h3 class="titrepoule">
                                    Poule E
                            </h3>
                            <div class="row pouleC">
                                 <ul>
                                    <li class="organisation">1er</li>
                                    <li class="organisation">2ème</li>
                                    <li class="organisation">3ème</li>
                                    <li class="organisation">4ème</li>
                                </ul>
                                <ul id="sortable5" style="margin-left:-39px!important">
                                    <li id="1E" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 1E</div>
                                    </li>
                                    <li id="2E" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 2E</div>
                                    </li>
                                    <li id="3E" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 3E</div>
                                    </li>
                                    <li id="4E" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 4E</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="pouleD">
                            <h3 class="titrepoule">
                                    Poule F
                            </h3>
                            <div class="row pouleD">
                                 <ul>
                                    <li class="organisation">1er</li>
                                    <li class="organisation">2ème</li>
                                    <li class="organisation">3ème</li>
                                    <li class="organisation">4ème</li>
                                </ul>
                                <ul id="sortable6" style="margin-left:-39px!important">
                                   <li id="1F" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 1F</div>
                                    </li>
                                    <li id="2F" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 2F</div>
                                    </li>
                                    <li id="3F" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 3F</div>
                                    </li>
                                    <li id="4F" class="equipe ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
                                        <div class="titreEquipe">Equipe 4F</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row col justify-content-around">
                        <div class="col"></div>
                        <label class="col" for="nom" id="label">tom nom ici:</label>
                        <div class="col"  style="margin-top:50px">
                            <input type="text" name="nom" id="nom"  style="height:20px;">
                            <span style="display:none; color:red" id="requiredNom">Champ obligatoire</span>
                        </div>
                        <label class="col" for="prenom" id="label">ton prénom ici:</label>
                        <div class="col" style="margin-top:50px">
                            <input type="text" name="prenom" id="prenom" style="height:20px;">
                            <span style="display:none; color:red" id="requiredPrenom">Champ obligatoire</span>
                        </div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="bouton btn-success btn-lg col" onclick="valider1()">
                            Valider
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
                <div id="deuxiemePhase" style="display:none">
                    <h3> C'est noté. J'ai aussi besoin des 4 meilleures équipes parmi celles que tu as classé 3èmes de leurs poules précédemment. <br/> Clique sur Valider quand c'est bon.
                    </h3>
                    <div class="row">
                        <div class="col-sm"></div>
                         <ul style="margin:auto">
                                    <li class="organisation">1er</li>
                                    <li class="organisation">2ème</li>
                                    <li class="organisation">3ème</li>
                                    <li class="organisation">4ème</li>
                                    <li class="organisation">5ème</li>
                                    <li class="organisation">6ème</li>
                        </ul>
                        <ul id="sortable7" class="col-2" style="margin-left:-12px!important">
                                   <li id="trezPouleA" class="equipe3 ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                    </li>
                                    <li id="trezPouleB" class="equipe3 ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                    </li>
                                    <li id="trezPouleC" class="equipe3 ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                    </li>
                                    <li id="trezPouleD" class="equipe3 ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                    </li>
                                    <li id="trezPouleE" class="equipe3 ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                    </li>
                                    <li id="trezPouleF" class="equipe3 ui-state-default ">
                                        <span class="ui-icon ui-icon-arrowthick-2-n-s"></span>

                                    </li>
                        </ul>
                        <div class="col-sm"></div>
                    </div>
                    <div class="bouton btn-success btn-lg col-2" onclick="valider2()">
                        Valider
                    </div>
                </div>
                <div class="phasesFinales" id="finales" style="display:none">
                    <h3>C'est bien. Maintenant, pour chaque match, clique sur l'équipe que tu imagines vainqueur. Quand tu es arrivé jusqu'à la finale et que tu es sûr de tes choix, tu peux VALIDER COMME B2O.
                    </h3>
                    <h3 style="margin-top:45px!important;">Huitièmes de finales</h3>
                    <div class="huitiemes" style="display:flex; justify-content:space-evenly">
                        <div id="Match81" class="match8">
                            <button id="preumsPouleA" type="button" class="eq" onclick="goToNextStage41(this)"></button>
                            <button type="button" id="deuzPouleB" class="eq" onclick="goToNextStage41(this)"></button>
                        </div>
                       <div id="Match82" class="match8">
                            <button type="button" id="preumsPouleC" class="eq" onclick="goToNextStage41(this)"></button>
                            <button type="button" id="deuzPouleD" class="eq" onclick="goToNextStage41(this)"></button>
                        </div>
                        <div id="Match83" class="match8" >
                            <button type="button" id="deuzPouleA" class="eq" onclick="goToNextStage42(this)"></button>
                            <button type="button" id="preumsPouleB" class="eq" onclick="goToNextStage42(this)"></button>
                        </div>
                       <div id="Match84" class="match8">
                            <button type="button" id="preumsPouleE" class="eq" onclick="goToNextStage42(this)"></button>
                            <button type="button" id="deuzPouleF" class="eq" onclick="goToNextStage42(this)"></button>
                        </div>
                        <div id="Match85" class="match8">
                            <button type="button" id="deuzPouleC" class="eq" onclick="goToNextStage43(this)"></button>
                            <button type="button" id="preumsPouleD" class="eq" onclick="goToNextStage43(this)" ></button>
                        </div>
                       <div id="Match86" class="match8">
                            <button type="button" id="deuzPouleE" class="eq" onclick="goToNextStage43(this)"></button>
                            <button type="button" id="preumsPouleF" class="eq" onclick="goToNextStage43(this)"></button>
                        </div>
                        <div id="Match87" class="match8">
                            <button type="button" id="troisieme1" class="eq" onclick="goToNextStage44(this)"></button>
                            <button type="button" id="troisieme2" class="eq" onclick="goToNextStage44(this)"></button>
                        </div>
                        <div id="Match88" class="match8">
                            <button type="button" id="troisieme3" class="eq" onclick="goToNextStage44(this)"></button>
                            <button type="button" id="troisieme4" class="eq" onclick="goToNextStage44(this)"></button>
                        </div>
                    </div> 
                    <h3>Quarts de finales</h3>
                    <div class="quarts" style="display:flex; justify-content:space-evenly">
                        <div id="Match41" class="match4">
                            <button type="button" id="Equipe1Match41" class="eqQuart" onclick="goToNextStage21(this)"></button>
                            <button type="button" id="Equipe2Match41" class="eqQuart" onclick="goToNextStage21(this)"></button>
                        </div>

                        <div id="Match42" class="match4" >
                            <button type="button" id="Equipe1Match42" class="eqQuart"  onclick="goToNextStage21(this)"></button>
                            <button type="button" id="Equipe2Match42" class="eqQuart"  onclick="goToNextStage21(this)"></button>
                        </div>

                        <div id="Match43" class="match4">
                            <button type="button" id="Equipe1Match43" class="eqQuart"  onclick="goToNextStage22(this)"></button>
                            <button type="button" id="Equipe2Match43" class="eqQuart"  onclick="goToNextStage22(this)"></button>
                        </div>

                        <div id="Match44" class="match4">
                            <button type="button" id="Equipe1Match44" class="eqQuart"  onclick="goToNextStage22(this)"></button>
                            <button type="button" id="Equipe2Match44" class="eqQuart"  onclick="goToNextStage22(this)"></button>
                        </div>
                    </div>
                    <h3>Demi-finales</h3>
                    <div class="demi" style="display:flex; justify-content:space-evenly">
                        <div id="Match21" class="match2">
                            <button type="button" id="Equipe1Match21" class="eq2" onclick="goToNextStagefinales(this)" ></button>
                            <button type="button" id="Equipe2Match21" class="eq2" onclick="goToNextStagefinales(this)"></button>
                        </div>
                        <div id="Match22" class="match2">
                            <button type="button" id="Equipe1Match22" class="eq2" onclick="goToNextStagefinales(this)"></button>
                            <button type="button" id="Equipe2Match22" class=" eq2" onclick="goToNextStagefinales(this)"></button>
                        </div>
                    </div>
                    <h3 style="text-align:center">Petite finale</h3>
                    <div class="finales" style="display:flex;justify-content:space-evenly">
                         <div id="petiteFinale" class="matchFin">
                            <button type="button" id="Equipe1PetiteFinale" class="eq1" onclick="classementfinal(this)"></button>
                            <button type="button" id="Equipe2PetiteFinale" class="eq1" onclick="classementfinal(this)"></button>
                        </div>
                    </div>
                    <h3 style="text-align:center">Finale</h3>
                    <div class="finales" style="display:flex;justify-content:space-evenly">
                        <div id="finale" class="matchFin">                            
                            <button type="button" id="Equipe1Finale" class="eq1" onclick="classementfinal(this)" ></button>
                            <button type="button" id="Equipe2Finale" class="eq1" onclick="classementfinal(this)"></button>
                        </div>
                    </div>
                    <div class="classement">
                        <h4>Le classement que tu paries est donc le suivant : </h4>
                        <h4 id="Premier">
                            Premier : <input class="clast" name="1" id="1" readonly></input> 
                        </h4>
                        <h4 id="Deuxième" >
                            Deuxième : <input class="clast" name="2" id="2" readonly></input>
                        </h4>
                        <h4 id="Deuxième">
                            Troisième : <input class="clast" name="3" id="3" readonly></input>
                        </h4>
                        <h4 id="Quatrième">
                            Quatrième : <input class="clast" name="4" id="4" readonly></input>
                        </h4>
                    </div>
                    <h4> Si tu es sûr, oublie pas de valider !</h4>
                    <button class="bouton btn-success btn-lg" style="display:flex;align-items:center; text-align:center;" type="submit">
                        Valider
                    </button>
                </div>
            </form>
 		</section>
 	</body>

<script>
         $( function() {
            $( "#sortable1" ).sortable();
            $( "#sortable1" ).disableSelection();
          } );
         $( function() {
            $( "#sortable2" ).sortable();
            $( "#sortable2" ).disableSelection();
          } );
        $( function() {
            $( "#sortable3" ).sortable();
            $( "#sortable3" ).disableSelection();
          } );
         $( function() {
            $( "#sortable4" ).sortable();
            $( "#sortable4" ).disableSelection();
          } );
        $( function() {
            $( "#sortable5" ).sortable();
            $( "#sortable5" ).disableSelection();
          } );
         $( function() {
            $( "#sortable6" ).sortable();
            $( "#sortable6" ).disableSelection();
          } );
        $( function() {
            $( "#sortable7" ).sortable();
            $( "#sortable7" ).disableSelection();
          } );
        
        var nom;
        var preumsPouleA;
        var preumsPouleB;
        var preumsPouleC;
        var preumsPouleD;
        var preumsPouleE;
        var preumsPouleF;
        var deuzPouleA;
        var deuzPouleB;
        var deuzPouleC;
        var deuzPouleD;
        var deuzPouleE;
        var deuzPouleF;
        var trezPouleA;
        var trezPouleB;
        var trezPouleC;
        var trezPouleD;
        var trezPouleE;
        var trezPouleF;
        var troisieme1;
        var troisieme2; 
        var troisieme3; 
        var troisieme4;
        
        function valider1(){
            if(document.getElementById("nom").value == ""  && document.getElementById("prenom").value != ""){
                document.getElementById("requiredNom").style.display = "block";
            }
            else if(document.getElementById("prenom").value == "" && document.getElementById("nom").value != ""){
                document.getElementById("requiredPrenom").style.display = "block";
            }
            else if(document.getElementById("nom").value == "" && document.getElementById("prenom").value == ""){
                document.getElementById("requiredNom").style.display = "block";
                document.getElementById("requiredPrenom").style.display = "block";
            }
            else if(document.getElementById("nom").value != "" && document.getElementById("prenom").value != ""){
                preumsPouleA = document.getElementById("sortable1").getElementsByTagName('li')[0];
                deuzPouleA = document.getElementById("sortable1").getElementsByTagName('li')[1];
                trezPouleA = document.getElementById("sortable1").getElementsByTagName('li')[2];
                preumsPouleB = document.getElementById("sortable2").getElementsByTagName('li')[0];
                deuzPouleB = document.getElementById("sortable2").getElementsByTagName('li')[1];
                trezPouleB = document.getElementById("sortable2").getElementsByTagName('li')[2];
                preumsPouleC = document.getElementById("sortable3").getElementsByTagName('li')[0];
                deuzPouleC =  document.getElementById("sortable3").getElementsByTagName('li')[1];
                trezPouleC = document.getElementById("sortable3").getElementsByTagName('li')[2];
                preumsPouleD =  document.getElementById("sortable4").getElementsByTagName('li')[0];
                deuzPouleD =  document.getElementById("sortable4").getElementsByTagName('li')[1];
                trezPouleD = document.getElementById("sortable4").getElementsByTagName('li')[2];
                preumsPouleE = document.getElementById("sortable5").getElementsByTagName('li')[0];
                deuzPouleE = document.getElementById("sortable5").getElementsByTagName('li')[1];
                trezPouleE = document.getElementById("sortable5").getElementsByTagName('li')[2];
                preumsPouleF = document.getElementById("sortable6").getElementsByTagName('li')[0];
                deuzPouleF = document.getElementById("sortable6").getElementsByTagName('li')[1];
                trezPouleF = document.getElementById("sortable6").getElementsByTagName('li')[2];
                document.getElementById("trezPouleA").textContent = trezPouleA.textContent;
                document.getElementById("trezPouleB").textContent = trezPouleB.textContent;
                document.getElementById("trezPouleC").textContent = trezPouleC.textContent
                document.getElementById("trezPouleD").textContent = trezPouleD.textContent
                document.getElementById("trezPouleE").textContent = trezPouleE.textContent;
                document.getElementById("trezPouleF").textContent = trezPouleF.textContent;

                document.getElementById("premierePhase").style.display = "none";
                document.getElementById("deuxiemePhase").style.display = "block";
            }
   
        }
        function valider2(){
            troisieme1 = document.getElementById("sortable7").getElementsByTagName('li')[0];
            troisieme2 = document.getElementById("sortable7").getElementsByTagName('li')[1];
            troisieme3 = document.getElementById("sortable7").getElementsByTagName('li')[2];
            troisieme4 = document.getElementById("sortable7").getElementsByTagName('li')[3];
            
            //On attribue le text content à chaque huitième 
            document.getElementById("preumsPouleA").textContent = preumsPouleA.textContent;
            document.getElementById("deuzPouleA").textContent = deuzPouleA.textContent;
            document.getElementById("preumsPouleB").textContent = preumsPouleB.textContent;
            document.getElementById("deuzPouleB").textContent = deuzPouleB.textContent;
            document.getElementById("preumsPouleC").textContent = preumsPouleC.textContent;
            document.getElementById("deuzPouleC").textContent = deuzPouleC.textContent;
            document.getElementById("preumsPouleD").textContent = preumsPouleD.textContent;
            document.getElementById("deuzPouleD").textContent = deuzPouleD.textContent;
            document.getElementById("preumsPouleE").textContent = preumsPouleE.textContent;
            document.getElementById("deuzPouleE").textContent = deuzPouleE.textContent;
            document.getElementById("preumsPouleF").textContent = preumsPouleF.textContent;
            document.getElementById("deuzPouleF").textContent = deuzPouleF.textContent;
            document.getElementById("troisieme1").textContent = troisieme1.textContent;
            document.getElementById("troisieme2").textContent = troisieme2.textContent;
            document.getElementById("troisieme3").textContent = troisieme3.textContent;
            document.getElementById("troisieme4").textContent = troisieme4.textContent;
            
            //On efface les phases de poules et on affiche les huitièmes de finales
            document.getElementById("deuxiemePhase").style.display = "none";
            document.getElementById("finales").style.display = "block";
        }
        
        function goToNextStage41(obj){
            if(obj.id == "preumsPouleA" || obj.id == "deuzPouleB"){
                document.getElementById("Equipe1Match41").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "preumsPouleC" || obj.id == "deuzPouleD"){
                document.getElementById("Equipe2Match41").textContent = document.getElementById(obj.id).textContent;
            }
        }
        
        function goToNextStage42(obj){
            if(obj.id == "preumsPouleB" || obj.id == "deuzPouleA"){
                document.getElementById("Equipe1Match42").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "preumsPouleE" || obj.id == "deuzPouleF"){
                document.getElementById("Equipe2Match42").textContent = document.getElementById(obj.id).textContent;
            }
        }
        function goToNextStage43(obj){
            if(obj.id == "preumsPouleD" || obj.id == "deuzPouleC"){
                document.getElementById("Equipe1Match43").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "preumsPouleF" || obj.id == "deuzPouleE"){
                document.getElementById("Equipe2Match43").textContent = document.getElementById(obj.id).textContent;
            }
        }
        
        function goToNextStage44(obj){
            if(obj.id == "troisieme1" || obj.id == "troisieme2"){
                document.getElementById("Equipe1Match44").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "troisieme3" || obj.id == "troisieme4"){
                document.getElementById("Equipe2Match44").textContent = document.getElementById(obj.id).textContent;
            }
        }
        function goToNextStage21(obj){
            if(obj.id == "Equipe1Match41" || obj.id == "Equipe2Match41"){
                document.getElementById("Equipe1Match21").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "Equipe1Match42" || obj.id == "Equipe2Match42"){
                document.getElementById("Equipe2Match21").textContent = document.getElementById(obj.id).textContent;
            }
        }
        function goToNextStage22(obj){
            if(obj.id == "Equipe1Match43" || obj.id == "Equipe2Match43"){
                document.getElementById("Equipe1Match22").textContent = document.getElementById(obj.id).textContent;
            }
            if(obj.id == "Equipe1Match44" || obj.id == "Equipe2Match44"){
                document.getElementById("Equipe2Match22").textContent = document.getElementById(obj.id).textContent;
            }
        }
        function goToNextStagefinales(obj){
            if(obj.id == "Equipe1Match21"){
                document.getElementById("Equipe1Finale").textContent = document.getElementById("Equipe1Match21").textContent;
                document.getElementById("Equipe1PetiteFinale").textContent = document.getElementById("Equipe2Match21").textContent;
            }
            if(obj.id == "Equipe2Match21"){
                document.getElementById("Equipe1Finale").textContent = document.getElementById("Equipe2Match21").textContent;
                document.getElementById("Equipe1PetiteFinale").textContent = document.getElementById("Equipe1Match21").textContent;
            }
            if(obj.id == "Equipe1Match22"){
                document.getElementById("Equipe2Finale").textContent = document.getElementById("Equipe1Match22").textContent;
                document.getElementById("Equipe2PetiteFinale").textContent = document.getElementById("Equipe2Match22").textContent;
            }
            if(obj.id == "Equipe2Match22"){
                document.getElementById("Equipe2Finale").textContent = document.getElementById("Equipe2Match22").textContent;
                document.getElementById("Equipe2PetiteFinale").textContent = document.getElementById("Equipe1Match22").textContent;
            }
        }
        function classementfinal(obj){
            if(obj.id == "Equipe1Finale"){
                document.getElementById("1").value = document.getElementById("Equipe1Finale").textContent.trim();
                document.getElementById("2").value = document.getElementById("Equipe2Finale").textContent.trim();
            }
            if(obj.id == "Equipe2Finale"){
                document.getElementById("1").value = document.getElementById("Equipe2Finale").textContent.trim();
                document.getElementById("2").value = document.getElementById("Equipe1Finale").textContent.trim();
            }
            if(obj.id == "Equipe1PetiteFinale"){
                document.getElementById("3").value = document.getElementById("Equipe1PetiteFinale").textContent.trim();
                document.getElementById("4").value = document.getElementById("Equipe2PetiteFinale").textContent.trim();
            }
            if(obj.id == "Equipe2PetiteFinale"){
                document.getElementById("3").value = document.getElementById("Equipe2PetiteFinale").textContent.trim();
                document.getElementById("4").value = document.getElementById("Equipe1PetiteFinale").textContent.trim();
            }
        }
        
        function valider3(){    
            
            document.getElementById("finales").style.display="none";
            document.getElementById("utilisateur").textContent = nom;
            document.getElementById("fin").style.display="block";
        }
        
    </script>
 </html>