<?php 


abstract class Produit 
{
   protected $nomProduit = 0;

   protected $poidsProduit = 15;

   protected $prixKilo = 15;

   protected $nombreProduit = 100;

   protected $prixUnite = 2;

   public static $compteur = 0 ;

	public function __construct() {
      echo "Construction du produit";

      self::$compteur++;
	}

   public abstract function calculPrix();   
}

?>

