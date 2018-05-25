<?php

if (isset($_GET["Numero"])) {
    echo "cc";
  $numero = $_GET["Numero"];
  //if (!empty($id)) {
        //echo "cc" <br>;
    
    
    include("connexionBD.php");
    $query = "DELETE FROM salle WHERE Numero=$numero";
    $bdd->exec($query);

    
    header("Location:affichersalle.php");
        //echo "cc";
    
    
  //}
}



?>