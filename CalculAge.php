<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="TP_PageWeb.css"/>
		<title></title>
	</head>
	<body>
		<header>
			<center>
				<div>
					<img src="200.png" alt="Mon logo" id="logo" height="200px"/>
				</div>
				<div>
					<h1>BIENVENUE SUR MON SITE <br/>DE CALCUL D'AGE</h1>
				</div>
				<div>
					<img src="200.png" alt="Mon logo" id="logo" height="200px"/>
				</div>
			<center>
		</header>
		<center>
			<nav>
				<section>
					<aside>
						<ul>
							<li><a href="TP_PageWeb.html">ACCUEIL</a></li>
							<li><a href="#">CV</a></li>
							<li><a href="#">CONTACT</a></li>
							<li><a href="#">BLOG</a></li>
						</ul>
					</aside>
				</section>	
			</nav>
		</center>

		<section>
			<center>
				<aside id="aside">
					<h2>MA BIOGRAPHIE</h2>
					<img src="01.jpg" alt="Ma photo" id="Ma_photo"/>
					<p>Je m'appel HAMMADOU BELLO YOUSSOUFA(HBY) et je suis né le 07 janvier 1994 à Mémé qui est un canton dans l'extreme nord Cameroun
					plus presisement dans le departement de Mayo-Sava.
					</p>
				</aside>
				<div id="section_div">
					<h2>RESULTAT CALCUL AGE</h2>
					
					<?php
					 
					 $jour= date('d');
					 $mois = date('m');
					 $annee = date( ' Y' ) ;
					 //$Jour_age = $jour-$_POST['Jour'];
					 // $Moi_age = $mois-$_POST['Mois'];
					 $Age= $annee-$_POST['Annee'];

					 if($mois < $_POST['Mois']){
					 	$Age = $Age - 1;
					 	$mois= $mois + 12;
					 	$Moi_age = $mois-$_POST['Mois'];
					 	
					 }else{
					 	$Moi_age = $mois-$_POST['Mois'];
					 }

					 if($jour < $_POST['Jour'] and $Moi_age = 0){
					 	$Age = $Age - 1;
					 	$Moi_age = $Moi_age + 12 - 1;
					 	$jour = $jour + 30;
					 	$Jour_age = $jour-$_POST['Jour'];

					 }elseif($jour < $_POST['Jour'] and $Moi_age >= 1){

					 	$jour = $jour + 30;
					 	$Moi_age = $Moi_age - 1;
					 	$Jour_age = $jour-$_POST['Jour'];
					 }else{
					 	$Jour_age = $jour-$_POST['Jour'];
					 }

					 

					 	echo' Bonjour ' . $_POST['Nom'].' né le '. $_POST['Jour'].'/'. $_POST['Mois'].'/'. $_POST['Annee'] .'<br/>'.' Vous avez exactement '. $Age .' ans '.$Moi_age.' mois '.$Jour_age.' jours aujourdhui ';
					 		

					?>


				</div>
					
			</center>
		</section>

		<footer>
			<center>
				<div>
					<h3>MES PHOTOS</h3>
					<a href="01.jpg"><img src="01.jpg" alt="Mon_image"/></a><a href="03.jpg"><img src="03.jpg" alt="Mon_image"/></a>
					<a href="04.jpg"><img src="04.jpg" alt="Mon_image"/></a><a href="07.jpg"><img src="07.jpg" alt="Mon_image"/></a>
					<a href="05.jpg"><img src="05.jpg" alt="Mon_image"/></a><a href="06.jpg"><img src="06.jpg" alt="Mon_image"/></a>
				</div>
				<div>
					<h3>MA VILLE</h3>
				</div>
				<div>
					<h3>MON PAYS</h3>
					<a href="CMR\Carte_Cameroun.png"><img src="CMR\Carte_Cameroun.png" alt="Carte_Cameroun" id="Carte_Cameroun"/></a>
					<p>La dévise du Cameroun est:<br/> PAIX-TRAVAIL-PATRIE<br/></p>
					<p>	Hymne national du Cameroun<br/>
						Ô Cameroun, berceau de nos ancêtres,
						Va debout et jaloux de ta liberté.
						Comme un soleil ton drapeau fier doit être
						Un symbole ardent de foi et d'unité.
						Que tous tes enfants du nord au sud,
						de l'est à l'ouest soient tout amour,
						Te servir que ce soit leur seul but,
						Pour remplir leur devoir toujours.<br/>
						( Refrain : )<br/>
						Chère patrie, terre chérie,
						Tu es notre seul et vrai bonheur,
						notre joie et notre vie,
						A toi l'amour et le grand honneur
					</p> 
					<p>
						Plus de details<a href="Cameroun.pdf">ICI!</a>
					</p>
				</div>
			</center>
			<p>Copyright HBY - Tous droits réservés                                         
			<a href="mailto:hamadouhbyz@gmail.com">Me contacter ! </a></p>
		</footer>
	</body>
</html>