<!DOCTYPE html>
<?php include('AdminAcc.php');?>
<html>
<head>
 <title>Gestion personnel</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #B40404;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>

<body>
<div class="personnel" style="margin-top:130px;">
      <h1 align="center"><b>Gestion de personnel</b></h1>
        
 <table>
 <tr>
  <th>Id</th> 
  <th>Nom</th> 
  <th>Prenom</th>
  <th>Email</th>
  <th>Mot de passe</th>
  <th>Sexe</th>
  <th>Poste</th>
  <th>Droit</th>
  <th>Action</th>
 </tr>
 <?php
include ('connexionBD.php');
  // Check connection
  
  $sql = "SELECT * FROM personnel";
  $result = $bdd->query($sql);
  $data=$result->fetchAll();
  for ($i=0;$i<count($data);$i++)
  {
    $id=$data[$i]["Id_personnel"];
    $nom=$data[$i]["Nom"];
    $prenom=$data[$i]["Prenom"];
    $email=$data[$i]["Email"];
    $mdp=$data[$i]["Mdp"];
    $sexe=$data[$i]["Sexe"];
    $poste=$data[$i]["Poste"];
    $droit=$data[$i]["Droit"];
    
    $modSupp="<a href='supprimerpersonnel.php?Id_personnel=$id' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    $modSupp=$modSupp."<a href='' class='btn btn=danger'>Modifier</a>";
    echo "<tr><td>$id</td><td>$nom</td><td>$prenom</td><td>$email</td><td>$mdp</td><td>$sexe</td><td>$poste</td><td>$droit</td><td>$modSupp</td></tr>";

    //echo "<tr><td>$id</td><td>$nom</td><td>$prenom</td><td>$email</td><td>$mdp</td><td>$sexe</td><td>$poste</td><td>$droit</td></tr>";
    //echo "<td>";
    //echo "<a href='supprimerpersonnel.php?Id_personnel=$id' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    //echo "<a href='' class='btn btn=danger'>Modifier</a>";
  }
  
  
  //if ($result->num_rows > 0) {
   // output data of each row
  /* while($row = $result->fetch()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Nom"] . "</td><td>" . $row["Prenom"] . "</td><td>" . $row["Email"] . "</td><td>" . $row["Mdp"] . "</td><td>" . $row["Sexe"] . "</td><td>" . $row["Poste"] . "</td><td>" . $row["Droit"] . "</td></tr>";
    echo "<td>";
    echo "<a href='supprimerpersonnel.php?id' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    echo "<a href='' class='btn btn=danger'>Modifier</a>";
} */
echo "</table>";

include('personnel.php');

 ///else { echo "0 results"; }
//$bdd->close();
?>
</table>

</div>
</body>
</html>
