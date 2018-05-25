<?php

if (isset($_GET["Id_personnel"])) {
    echo "cc";
  $id = $_GET["Id_personnel"];
  //if (!empty($id)) {
        //echo "cc" <br>;
    
    
    include("connexionBD.php");
    $query = " DELETE FROM personnel WHERE Id_personnel=$id";
    $bdd->exec($query);

    
   header("Location:afficherpersonnel.php");
        //echo "cc";
    
    
  //}
}



?>