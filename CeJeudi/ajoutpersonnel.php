<?php
//echo 'Le personnel a été bien ajouté à la base de données';
$id = '';
   $nom = '';
   $prenom='' ;
   $email ='' ;
   $mdp = '' ;
   $sexe = '';
   $poste = '';
   $droit ='';
if(isset($_POST['Ajouter'])) {
  // $id = htmlspecialchars($_POST['Id_personnel']);
   $nom = htmlspecialchars($_POST['Nom']);
   $prenom= htmlspecialchars($_POST['Prenom']);
   $email = htmlspecialchars($_POST['Email']);
   $mdp = htmlspecialchars($_POST['Mdp']);
   $sexe = htmlspecialchars($_POST['Sexe']);
   $poste = htmlspecialchars($_POST['Poste']);
   $droit = htmlspecialchars($_POST['Droit']);
   if(!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['Email']) AND !empty($_POST['Mdp']) AND !empty($_POST['Sexe']) AND !empty($_POST['Poste']) AND !empty($_POST['Droit'])) {
            
                    include ('connexionBD.php');
            try{
                    // echo "hello";
                     //$bdd = new PDO('mysql:host=localhost;dbname = espace membre', 'root', '');
                 
                     $query = "INSERT INTO personnel (Id_personnel, Nom, Prenom, Email, Mdp, Sexe, Poste, Droit) VALUES ('$id', '$nom', '$prenom', '$email', '$mdp', '$sexe', '$poste', '$droit')";
                     //$query = "INSERT INTO donneur (Non, Prenon, CIN, Email, Mdp) VALUES ('zidani', 'hafid', 'HA5678', 'hafid@z.en', '123456')";
                     $bdd->exec($query);
                     echo "Ajout avec succes";
                     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     header("Location:afficherpersonnel.php");
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



?>