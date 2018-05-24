<?php
//echo "La salle a été bien ajouté";
if(isset($_POST['Ajouter'])) {
    $num = htmlspecialchars($_POST['Numero']);
   $cap = htmlspecialchars($_POST['CapaciteMax']);
   $type= htmlspecialchars($_POST['TypeDon']);
   
   if(!empty($_POST['Numero']) AND !empty($_POST['CapaciteMax']) AND !empty($_POST['TypeDon'])) {
            
                    include ('connexionBD.php');
            try{
                    // echo "hello";
                     //$bdd = new PDO('mysql:host=localhost;dbname = espace membre', 'root', '');
                 
                     $query = "INSERT INTO salle (Numero, CapaciteMax, TypeDon) VALUES ('$num', '$cap', '$type')";
                     //$query = "INSERT INTO donneur (Non, Prenon, CIN, Email, Mdp) VALUES ('zidani', 'hafid', 'HA5678', 'hafid@z.en', '123456')";
                     $bdd->exec($query);
                     //echo "Ajout avec succes";
                     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     header("Location: affichersalle.php");
            }
            catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
   }
   else {
     $erreur="veuillez remplir tous les champs svp !";
     echo $erreur;
    
   }
}
   
   ?>



