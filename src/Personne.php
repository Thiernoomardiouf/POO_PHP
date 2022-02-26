<?php 
namespace Acme;
  class personne{
      private $nom;
      private $prenom;

      public function getNom(){
          echo $this->nom. "\n";
      }
      public function setNom($nouveauPseudo)
      {  
      $this->nom = $nouveauPseudo;
      }
  }
?>