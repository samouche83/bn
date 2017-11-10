<?php

	// C'est un fichier de tests unitaires
	// il sert a tester toutes les méthodes 
    // de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("../cd_tp3_ex2/ProduitKilo.php");


	// instanciation de la classe
	$c = new ProduitKilo();
	echo $c;


	// on calcule du prix
	$prix = $c->calculPrix();	
	echo "<br>le prix est ".$prix;

	echo "<br> Le nombre de produit créés est :".Produit::$compteur;

?>