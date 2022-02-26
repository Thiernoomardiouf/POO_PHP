<?php

    class Membre

    {   
        private $pseudo;
        private $email;
        private $signature;
        private $actif;

    public function getPseudo()
        {  
        echo $this->pseudo;
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
        echo $this->email;
     }
    }
    
    $membre = new Membre(4);
    $membre->setPseudo('Mame Thierno'); // OK car setPseudo est public
    $membre->getPseudo();


?>

<?php
trait Rechargeable{

    public $energy = 100;

    public function recharger(){
        $this->energy = 100;
    }

}
?>

<?php
 class Battery{
    private $marque;

    public function afficher(){
        $this->marque;
    }

}
?>

<?php
 class Pile extends Battery{

    use Rechargeable;

}
 $diouf = new Pile();
 $diouf->energy = 200;
 $diouf->recharger();

?>

<?php

try
{
       // On se connecte à MySQL

       $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
}
catch(Exception $e)
{
       // En cas d'erreur, on affiche un message et on arrête tout

       die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer
// On récupère tout le contenu de la table jeux_video

$reponse = $bdd->query('SELECT * FROM jeux_video');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
   <p>
   <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />

   Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />

   Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />

   <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
  </p>

<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête
?>





<?php
    $stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (:name, :value)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':value', $value);

    // insertion d'une ligne
    $name = 'one';
    $value = 1;
    $stmt->execute();

    // insertion d'une autre ligne avec des valeurs différentes
    $name = 'two';
    $value = 2;
    $stmt->execute();
?>



<?php
    $stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $value);

    // insertion d'une ligne
    $name = 'one';
    $value = 1;
    $stmt->execute();

    // insertion d'une autre ligne avec différentes valeurs
    $name = 'two';
    $value = 2;
    $stmt->execute();
?>

