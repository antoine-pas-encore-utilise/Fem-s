 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<link rel="stylesheet" type="text/css" href="CSS/Inscription.css">
 		<link rel="stylesheet" type="text/css" href="Global.css">
 		<link href="https://fonts.googleapis.com/css?family=Cinzel|Great+Vibes|Just+Another+Hand|Permanent+Marker|Shadows+Into+Light|Tangerine&display=swap" rel="stylesheet">
 		<title> Fem's | Inscription </title>	
 	</head>
 	<body>	
 		<header>
 			<div id="bandeau">
	 			<img src="Images/champions.jpg" width="100" height="70">
	 			<div id="title"> 
		 			<h1> Fem's 2019 </h1> 
		 			<div> Vendredi 18 et samedi 19 octobre </div>
	 			</div>
	 			<img src="Images/champions.jpg" width="100" height="70">
 			</div>
 			<nav class="band">
	 			<a href="fems.html" class="menu" id="menu1"> Accueil</a>
	 			<a href="inscription.html" class="menu" id="menu2"> Inscription</a>
	 			<a href="description.html" class="menu" id="menu3"> Le Fem's pour les nuls </a>
	 			<a href="jeu.php" class="menu" id="menu4"> Jeu concours </a>
	 			<a href="orga.html" class="menu" id="menu5"> Déroulement du tournoi </a>
	 			<a href="diver.html" class="menu" id="menu6"> En savoir plus</a>
 			</nav> 
 		</header>
 		<section id="all">
		 		<section id="introd">
		 			Ci-dessous le formulaire à remplir pour vous incrire. <span id="soul"> Une seule</span> personne par équipe se charge de remplir le formulaire d'inscription pour son équipe. 
		 			L'inscription sera validée si et seulement si l'ensemble des informations demandées sont (correctement) complétées. Je rappelle les règles : 
			 		<ul>
			 			<li> Dix personnes par équipe </li>
			 			<li> 1 fille/garçon minimum par équipe </li>
			 			<li> Les tailles de maillot disponibles sont les suivantes : S, M, L, XL</li>
			 			<li> Vous pouvez choisir votre numéro de maillot. Ce dernier doit être compris dans l'intervalle [0,10]. </li>
			 		</ul>
		 			PS1: Chaque joueur de la même équipe peut avoir le même numéro de maillot, ou pas. <br>
		 			PS2: Chaque joueur de la même équipe peut avoir le même surnom, ou pas. <br>
		 			PS3: Chaque joueur de la même équipe peut choisir la même taille de maillot, ou pas. <br>
		 		</section>
	 		<section id="reste">
	 			<form method="post" action="formulaireInscription.php">
	 				<fieldset id="global">
	 					<section id="top">
	 						<div id="hup">
			 					<caption> <h3 class="tit"> <span id="form"> Formulaire d'inscription </span> </h3> </caption>
				 				<fieldset id="equipe">
				 					<legend> <h3> Equipe </h3> </legend>
				 					<div id="team">
					 					<p id="equ">
					 						<label for="team_name"> Nom d'équipe </label>		 					
							 				<input type="text" name="NomEquipe" id="team_name" required="">
							 			</p> 
							 			<p>
					 						<label for="couleur"> Couleur de maillot</label>		 					
							 				<input type="text" name="CouleurEquipe" id="couleur" required="">
							 			</p>
						 			</div>
				 				</fieldset>
			 				</div>
			 				<section id="rappel">
			 					<h3 class="tit"> Rappel</h3>
			 					Le montant est de 20€ par personne, ce tarif incluant : 
			 					<ul>
			 						<li> Le maillot floqué </li>
			 						<li> D'autres goodies </li>
			 						<li> Le petit-déjeuner, le repas du midi et le buffet du soir (du samedi) </li>
			 						<li> Et bien sur la participation au tournoi</li>
			 					</ul>
			 				</section>
		 				</section>
		 				<fieldset id="joueurs">
		 					<legend> <h3> Participants </h3> </legend>
			 				<fieldset class="block">
			 					<legend> Joueur 1 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ1" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ1" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ1" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ1" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ1" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
			 				<fieldset class="block">
			 					<legend> Joueur 2 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ2" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ2" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ2" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ2" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ2" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
			 				<fieldset class="block">
			 					<legend> Joueur 3 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ3" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ3" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ3" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ3" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ3" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
			 				<fieldset class="block">
			 					<legend> Joueur 4 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ4" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ4" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ4" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ4" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ4" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
			 				<fieldset class="block">
			 					<legend> Joueur 5 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ5" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ5" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ5" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ5" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ5" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
			 				<fieldset class="block">
			 					<legend> Joueur 6 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ6" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ6" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ6" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ6" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ6" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
			 				<fieldset class="block">
			 					<legend> Joueur 7 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ7" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ7" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ7" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ7" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ7" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
			 				<fieldset class="block">
			 					<legend> Joueur 8 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ8" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ8" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ8" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ8" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ8" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
			 				<fieldset class="block">
			 					<legend> Joueur 9 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ9" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ9" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ9" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ9" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ9" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
			 				<fieldset class="block">
			 					<legend> Joueur 10 </legend>
				 				<div class="joueur">
					 				<p>
					 					<label for="pr"> Prénom </label>		 					
					 					<input type="text" name="prenomJ10" id="pr" required="">
					 				</p>
					 				<p>
					 					<label for="nm"> Nom </label>		 					
					 					<input type="text" name="nomJ10" id="nm" required="">
					 				</p>
					 				<p>
					 					<label for="srn"> Surnom maillot </label>
					 					<input type="text" name="surnomJ10" id="srn" required="">
					 				</p>
					 				<p>
					 					<label for="num"> Numéro de maillot </label>
					 					<select name="numJ10" id="num" required="">
					 						<option value="0"> 0 </option>
					 						<option value="1"> 1 </option>
					 						<option value="2"> 2 </option>
					 						<option value="3"> 3 </option>
					 						<option value="4"> 4 </option>
					 						<option value="5"> 5 </option>
					 						<option value="6"> 6 </option>
					 						<option value="7"> 7 </option>
					 						<option value="8"> 8 </option>
					 						<option value="9"> 9 </option>
					 						<option value="10"> 10 </option>
					 					</select>
					 				</p>
					 				<p>
					 					<label for="taille"> Taille de maillot </label>
					 					<select name="tailleJ10" id="taille">
					 						<option value="s"> S </option>
					 						<option value="m"> M </option>
					 						<option value="l"> L </option>
					 						<option value="xl"> XL </option>				
					 					</select>
					 				</p>
				 				</div>
			 				</fieldset>
		 				</fieldset>
		 				<fieldset id="bout">
		 					<legend> <h3> Validation </h3> </legend>
		 					<div id="last">
		 						<p>
			 					En cliquant sur le bouton ci-dessous, j'atteste avoir dûment rempli le dit formulaire.
			 					</p>
			 					<div id="bt">
				 					<input type="submit" name="bouton" value="Envoi du formulaire" >
			 					</div> 
		 					</div>
		 				</fieldset>
		 			</fieldset>
	 			</form>
	 		</section>
	 	</section>
 	</body>
 </html>