<?php

    class Membre

    {  
       // attributs
        private $pseudo;
        private $email;
        private $signature;
        private $actif;


    // methodes 
   public function __construct($pseudo,$email,$signature,$actif){
            $this->pseudo = $pseudo;
            $this->email = $email;
            $this->signature = $signature;
            $this->actif = $actif;

    }

    public function getPseudo()
        {  
        echo $this->pseudo. "\n";
        }

    public function setPseudo($nouveauPseudo)
        {  
        $this->pseudo = $nouveauPseudo;
        }

    public function setEmail($nouveauEmail)
        {  
        $this->email = $nouveauEmail;
        }

    public function getEmail(){
        echo $this->email. "\n";
     }
    }
    
    $membre = new Membre('omar','diouf@gmail.com','dioufy','actif');
    $menbre1 = new Membre("eve","email","signature","actif");
    $membre->setPseudo('Eva'); // OK car setPseudo est public
    $membre->getPseudo();
    $membre->setEmail('eva@gmaail.com');
    $membre->getEmail();

    $menbre1->getPseudo();

?>

<?php

try
{
       $bdd = new PDO('mysql:host=localhost;dbname=veille', 'root', '123diouf');
}
catch(Exception $e)

{
      // En cas d'erreur, on affiche un message et on arrête tout

       die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM apprenant');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())

{
?>

   <p>

   <strong>Nom de l'apprenant</strong> : <?php echo $donnees['nom']; ?><br />
   <strong>Prenom de l'apprenant</strong> : <?php echo $donnees['prenom']; ?><br />
  </p>

<?php

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>


