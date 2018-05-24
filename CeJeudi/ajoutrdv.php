<?php
//echo 'Le don a été ajouté';
 $cin = '' ;
   $type = ''; 
   $date = '';   
   $heure =''; 
   
if(isset($_POST['Valider'])) {
   //$id = htmlspecialchars($_POST['Id_Rv']);
   
   $type = htmlspecialchars($_POST['Type']);
   $gs = htmlspecialchars($_POST['GS']);
   $date = htmlspecialchars($_POST['Date']);   
   $heure = htmlspecialchars($_POST['Heure']);
   $cin = htmlspecialchars($_POST['CIN']);
   
  
   if( !empty($_POST['Type']) AND !empty($_POST['Date']) AND !empty($_POST['Heure']) AND !empty($_POST['CIN'])) {
            
                    include ('connexionBD.php');
            try{
                    // echo "hello";
                     //$bdd = new PDO('mysql:host=localhost;dbname = espace membre', 'root', '');
                 
                     $query = "INSERT INTO rv (Type, GS, Date, Heure, CIN) VALUES ('$type', '$gs', '$date', '$heure', '$cin')";
                     //$query = "INSERT INTO donneur (Non, Prenon, CIN, Email, Mdp) VALUES ('zidani', 'hafid', 'HA5678', 'hafid@z.en', '123456')";
                     $bdd->exec($query);
                     //echo "Ajout avec succes";
                     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     header("Location:index2.php");
                     //echo "En attente";
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