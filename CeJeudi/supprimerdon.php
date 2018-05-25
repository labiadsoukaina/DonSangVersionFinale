<?php

if (isset($_GET["Id_Don"])) {
    echo "cc";
  $id = $_GET["Id_Don"];
  //if (!empty($id)) {
        //echo "cc" <br>;
    
    
    include("connexionBD.php");
    $query = "DELETE FROM don WHERE Id_Don=$id";
    $bdd->exec($query);

    
    header("Location:afficherdon.php");
        //echo "cc";
    
    
  //}
}



?>