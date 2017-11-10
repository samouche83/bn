<?php
// DECLARATION CLASSE PRODUITKILO
// FILLE DE PRODUIT
require_once('Produit.php');
class ProduitKilo extends Produit{

	
	// METHODES d
	// le constructeur __construct est une
	// methode de php
	// elle est automatiquement appelée par
	// 3le mot clé new
	public function __construct(){
		echo "Création du produit ";
		parent::__construct();
	}

 	// Creation de la methode __toString()
 	// pour pouvoir utiliser echo
 	public function __toString(){
 		$text = "<hr> ProduitKilo ".
 				"<br> poidsProduit :".$this->poidsProduit.
 				"<br> prixKilo :".$this->prixKilo."<hr>";
 		return $text;
 	}

 	public function calculPrix(){
 		return floor($this->prixKilo*$this->poidsProduit);
 	}

}



