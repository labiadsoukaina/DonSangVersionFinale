<?php
//echo 'Le don a été ajouté';
   $date = '';
   $salle= '';
   $type = '';
   $heurede = '';
   $heurea = '';
   $personnel = '';
   
if(isset($_POST['Ajouter'])) {
   //$id = htmlspecialchars($_POST['Id_Planning']);
   $personnel = htmlspecialchars($_POST['Personnel']);
   $salle = htmlspecialchars($_POST['Salle']);  
   $type = htmlspecialchars($_POST['Type']); 
   $date = htmlspecialchars($_POST['Date']);   
   $heurede = htmlspecialchars($_POST['Heure_de']);
   $heurea = htmlspecialchars($_POST['Heure_a']);
  
   if(!empty($_POST['Personnel']) AND !empty($_POST['Salle']) AND !empty($_POST['Type']) AND !empty($_POST['Date']) AND !empty($_POST['Heure_de']) AND !empty($_POST['Heure_a'])) {
            
                    include ('connexionBD.php');
            try{
                    // echo "hello";
                     //$bdd = new PDO('mysql:host=localhost;dbname = espace membre', 'root', '');
                 
                     $query = "INSERT INTO planning (Personnel, Salle, Type, Date, Heure_de, Heure_a) VALUES ('$personnel', '$salle', '$type', '$date', '$heurede', '$heurea')";
                     //$query = "INSERT INTO donneur (Non, Prenon, CIN, Email, Mdp) VALUES ('zidani', 'hafid', 'HA5678', 'hafid@z.en', '123456')";
                     $bdd->exec($query);
                     echo "Ajout avec succes";
                     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     header("Location:afficherplanning.php");
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