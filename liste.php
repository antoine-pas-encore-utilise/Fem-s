<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Fem's paris</title>
        <link rel="stylesheet" type="text/css" href="Global.css">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Great+Vibes|Just+Another+Hand|Permanent+Marker|Shadows+Into+Light|Tangerine&display=swap" rel="stylesheet">
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
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'].PHP_EOL;
        $premier = $_POST['1'].PHP_EOL;
        $deuxieme = $_POST['2'].PHP_EOL;
        $troisieme = $_POST['3'].PHP_EOL;
        $quatrieme = $_POST['4'].PHP_EOL;
        $monfichier = fopen('resultatParis.txt', 'a+');
        fputs($monfichier, $nom.' '.$prenom.$premier.$deuxieme.$troisieme.$quatrieme);
        fclose($monfichier);
        ?>
    
        <div id="fin">
            <img style="margin-left:400px;" src="momo.jpg"/>
            <h1 style="text-align:center">Merci <?php echo $prenom; ?>, tes paris ont été enregistrés.</h1>
        </div>
    </body> 
</html>

