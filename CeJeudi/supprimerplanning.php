<?php

if (isset($_GET["Id_Planning"])) {
    //echo "cc";
  $id = $_GET["Id_Planning"];
  //if (!empty($id)) {
        //echo "cc" <br>;
    
    
    include("connexionBD.php");
    $query = "DELETE FROM planning WHERE Id_Planning=$id";
    $bdd->exec($query);

    
    header("Location:afficherplanning.php");
        //echo "cc";
    
    
  //}
}



?>