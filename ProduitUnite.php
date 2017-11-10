<?php
//  DECLARATION DE LA CLASSE  PRODUITKILO   //
//  FILLE DE PRODUIT
require_once('Produit.php');
class ProduitUnite extends Produit{


	// METHODES 
	// le constructeur __construct est une
	// "methode magique" de php
	// elle est automatiquement appelée par
	// 3le mot clé new
	public function __construct(){
		echo "Création d'un produit ";
		parent::__construct();
	}

 	// Creation de la methode __toString()
 	// afin de pouvoir se servir d'un echo
 	public function __toString(){
 		$text = "<hr> ProduitUnite ".
 				"<br> nombreProduit :".$this->nombreProduit.
 				"<br> prixUnite :".$this->prixUnite."<hr>";
 		return $text;
 	}

 	public function calculPrix(){
 		return floor($this->nombreProduit*$this->prixUnite);
 	}	
}



