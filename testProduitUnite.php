<?php

	// C'est un fichier de tests "unitaires"
	// qui permet de tester toutes les méthodes 
    // de la classe une par une

	// afin d'afficher les erreurs de ce script 
	ini_set('display_errors','1');

	// il faut inclure le fichier contenant la 
	// définition de la classe
	require_once("../cd_tp3_ex2/ProduitUnite.php");


	// instanciation de la classe
	$d = new ProduitUnite();
	echo $d;

 	// on affiche les attributs de la classe
	echo $d;

	// on calcule le prix
	$prix = $d->calculPrix();	
	echo "<br>le prix est ".$prix;

	echo "<br> Le nombre de produit créés est :".Produit::$compteur;

?>