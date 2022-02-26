<?php
 
class PresidentDeLaRepublique {
 
   private static $_instance = null;

   private $_nom='';
 
   private $_prenom='';

   public function __toString() {
 
     return $this->getPrenom() .' '. strtoupper($this->getNom());
   }
 
   private function __construct($nom, $prenom) {
 
     $this->_nom = $nom;
     $this->_prenom = $prenom;
   }
 
   public static function getInstance($nom, $prenom) {
 
     if(is_null(self::$_instance)) {
       self::$_instance = new PresidentDeLaRepublique($nom, $prenom);  
     }
 
     return self::$_instance;
   }
 
  public function getNom() {
    return $this->_nom;  
  }
 
  public function getPrenom() {
    return $this->_prenom;  
  }
}
 
?>

<?php
 
  // Import de la classe
  // require(dirname(__FILE__).'/PresidentDeLaRepublique.class.php');
 
  // Instanciation de l'objet
  $oPresident = PresidentDeLaRepublique::getInstance('Sall','Macky');
 // $oPresident1 = PresidentDeLaRepublique::getInstance('diouf','Omar');
 
  // Appel implicite à la méthode __toString()
  echo $oPresident. "\n";
  // echo $oPresident1. "\n";
?>