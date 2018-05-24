<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dondesang2";

  try {
  $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  
   }
catch(PDOException $e)
    {
    echo "Erreur" . "<br>" . $e->getMessage();
    }

 ?>