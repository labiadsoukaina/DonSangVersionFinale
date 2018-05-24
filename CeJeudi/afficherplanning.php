
<!DOCTYPE html>
<?php include('AdminAcc.php');?>
<html>
<head>
 <title>Table with database</title>
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
<div class="planning" style="margin-top:130px;">
<h1 align="center"><b>Gestion des plannings</b></h1>
 <table>
 <tr>
  <th>Id</th> 
  <th>Personnel</th> 
  <th>Salle</th>
  <th>Type</th>
  <th>Date</th>
  <th>Heure de</th>
  <th>Heure à</th>
  <th>Actions</th>
 </tr>
 <?php
include ('connexionBD.php');
  // Check connection
  
  $sql = "SELECT * FROM planning";
  $result = $bdd->query($sql);
  
  $data = $result->fetchAll();
  for ($i=0;$i<count($data);$i++)
  {
    $id=$data[$i]["Id_Planning"];
    $personnel=$data[$i]["Personnel"];
    $salle=$data[$i]["Salle"];
    $type=$data[$i]["Type"];
    $date=$data[$i]["Date"];
    $heurede=$data[$i]["Heure_de"];
    $heurea=$data[$i]["Heure_a"];
    $modSupp="<a href='supprimerplanning.php?Id_Planning=$id' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    $modSupp=$modSupp."<a href='' class='btn btn=danger'>Modifier</a>";
    
    echo "<tr><td>$id</td><td>$personnel</td><td>$salle</td><td>$type</td><td>$date</td><td>$heurede</td><td>$heurea</td><td>$modSupp</td></tr>";
    /*echo "<td>";
    echo "<a href='supprimerplanning.php?Id_Planning=$id' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    echo "<a href='' class='btn btn=danger'>Modifier</a>";*/
   
  }
  //if ($result->num_rows > 0) {
   // output data of each row
   /*while($row = $result->fetch()) {
    echo "<tr><td>" . $row["Id_Don"] . "</td><td>" . $row["Type"] . "</td><td>" . $row["Duree"] . "</td><td>" . $row["Salle"] . "</td><td>" . $row["Heure"] . "</td><td>" . $row["Date"] . "</td><td>" . $row["Centre"] . "</td></tr>";
}*/
echo "</table>";

include('planning.php');

 ///else { echo "0 results"; }
//$bdd->close();
?>
</table>
</div>
</body>
</html>

