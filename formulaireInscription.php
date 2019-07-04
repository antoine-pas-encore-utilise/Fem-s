<html>
    <meta charset="utf-8">
 		<link rel="stylesheet" type="text/css" href="CSS/Inscription.css">
 		<link rel="stylesheet" type="text/css" href="Global.css">
 		<link href="https://fonts.googleapis.com/css?family=Cinzel|Great+Vibes|Just+Another+Hand|Permanent+Marker|Shadows+Into+Light|Tangerine&display=swap" rel="stylesheet">
 		<title> Fem's | Validation de l'inscription </title>	
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
       <?php
        $nomEquipe = $_POST['NomEquipe'].PHP_EOL;
        $couleurEquipe = $_POST['CouleurEquipe'].PHP_EOL;
        $prenomJ1 = $_POST['prenomJ1'].PHP_EOL;
        $nomJ1 = $_POST['nomJ1'].PHP_EOL;
        $surnomJ1 = $_POST['surnomJ1'].PHP_EOL;
        $numJ1 = $_POST['numJ1'].PHP_EOL;
        $tailleJ1 = $_POST['tailleJ1'].PHP_EOL;
        $prenomJ2 = $_POST['prenomJ2'].PHP_EOL;
        $nomJ2 = $_POST['nomJ2'].PHP_EOL;
        $surnomJ2 = $_POST['surnomJ2'].PHP_EOL;
        $numJ2 = $_POST['numJ2'].PHP_EOL;
        $tailleJ2 = $_POST['tailleJ2'].PHP_EOL;
        $prenomJ3 = $_POST['prenomJ3'].PHP_EOL;
        $nomJ3 = $_POST['nomJ3'].PHP_EOL;
        $surnomJ3 = $_POST['surnomJ3'].PHP_EOL;
        $numJ3 = $_POST['numJ3'].PHP_EOL;
        $tailleJ3 = $_POST['tailleJ3'].PHP_EOL;
        $prenomJ4 = $_POST['prenomJ4'].PHP_EOL;
        $nomJ4 = $_POST['nomJ4'].PHP_EOL;
        $surnomJ4 = $_POST['surnomJ4'].PHP_EOL;
        $numJ4 = $_POST['numJ4'].PHP_EOL;
        $tailleJ4 = $_POST['tailleJ4'].PHP_EOL;
        $prenomJ5 = $_POST['prenomJ5'].PHP_EOL;
        $nomJ5 = $_POST['nomJ5'].PHP_EOL;
        $surnomJ5 = $_POST['surnomJ5'].PHP_EOL;
        $numJ5 = $_POST['numJ5'].PHP_EOL;
        $tailleJ5 = $_POST['tailleJ5'].PHP_EOL;
        $prenomJ6 = $_POST['prenomJ6'].PHP_EOL;
        $nomJ6 = $_POST['nomJ6'].PHP_EOL;
        $surnomJ6 = $_POST['surnomJ6'].PHP_EOL;
        $numJ6 = $_POST['numJ6'].PHP_EOL;
        $tailleJ6 = $_POST['tailleJ6'].PHP_EOL;
        $prenomJ7 = $_POST['prenomJ7'].PHP_EOL;
        $nomJ7 = $_POST['nomJ7'].PHP_EOL;
        $surnomJ7 = $_POST['surnomJ7'].PHP_EOL;
        $numJ7 = $_POST['numJ7'].PHP_EOL;
        $tailleJ7 = $_POST['tailleJ7'].PHP_EOL;
        $prenomJ8 = $_POST['prenomJ8'].PHP_EOL;
        $nomJ8 = $_POST['nomJ8'].PHP_EOL;
        $surnomJ8 = $_POST['surnomJ8'].PHP_EOL;
        $numJ8 = $_POST['numJ8'].PHP_EOL;
        $tailleJ8 = $_POST['tailleJ8'].PHP_EOL;
        $prenomJ9 = $_POST['prenomJ9'].PHP_EOL;
        $nomJ9 = $_POST['nomJ9'].PHP_EOL;
        $surnomJ9 = $_POST['surnomJ9'].PHP_EOL;
        $numJ9 = $_POST['numJ9'].PHP_EOL;
        $tailleJ9 = $_POST['tailleJ9'].PHP_EOL;
        $prenomJ10 = $_POST['prenomJ10'].PHP_EOL;
        $nomJ10 = $_POST['nomJ10'].PHP_EOL;
        $surnomJ10 = $_POST['surnomJ10'].PHP_EOL;
        $numJ10 = $_POST['numJ10'].PHP_EOL;
        $tailleJ10 = $_POST['tailleJ10'].PHP_EOL;
        
        $monfichier = fopen('inscriptions.txt', 'a+');
        fputs($monfichier, $nomEquipe.$couleurEquipe.$prenomJ1.$nomJ1.$surnomJ1.$numJ1.$tailleJ1.$prenomJ2.$nomJ2.$surnomJ2.$numJ2.$tailleJ2.$prenomJ3.$nomJ3.$surnomJ3.$numJ3.$tailleJ3.$prenomJ4.$nomJ4.$surnomJ4.$numJ4.$tailleJ4.$prenomJ5.$nomJ5.$surnomJ5.$numJ5.$tailleJ5.$prenomJ6.$nomJ6.$surnomJ6.$numJ6.$tailleJ6.$prenomJ7.$nomJ7.$surnomJ7.$numJ7.$tailleJ7.$prenomJ8.$nomJ8.$surnomJ8.$numJ8.$tailleJ8.$prenomJ9.$nomJ9.$surnomJ9.$numJ9.$tailleJ9.$prenomJ10.$nomJ10.$surnomJ10.$numJ1.$tailleJ10);
        fclose($monfichier);
        ?>
    
        <div id="fin">
            <img style="margin-left:400px;" src="momo.jpg"/>
            <h1 style="text-align:center">Merci Capitaine, ton inscription a été prise en compte.</h1>
        </div>
    </body> 
</html>