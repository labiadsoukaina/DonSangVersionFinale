<!DOCTYPE html>
 <?php include('AdminAcc.php');?>
<html>
<head>
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

 <div class="don" style="margin-top:130px;">
      <h1 align="center"><b>Gestion des dons</b></h1>
 <table>
 <tr>
  <th>Id</th> 
  <th>Type</th>
  <th>Groupe sanguin</th>
  <th>Duree(min)</th>
  <th>Salle</th>
  <th>Heure</th>
  <th>Date</th>
  <th>Actions</th>
 </tr>
 <?php
include ('connexionBD.php');
  // Check connection
  
  $sql = "SELECT * FROM don";
  $result = $bdd->query($sql);
  
  $data = $result->fetchAll();
  for ($i=0;$i<count($data);$i++)
  {
    $id=$data[$i]["Id_Don"];
    $type=$data[$i]["Type"];
    $gs=$data[$i]["GS"];
    $duree=$data[$i]["Duree"];
    $salle=$data[$i]["Salle"];
    $heure=$data[$i]["Heure"];
    $date=$data[$i]["Date"];
    
    
    
    $modSupp="<a href='supprimerdon.php?Id_Don=$id' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    $modSupp=$modSupp."<a href='' class='btn btn=danger'>Modifier</a>";
    echo "<tr><td>$id</td><td>$type</td><td>$gs</td><td>$duree</td><td>$salle</td><td>$heure</td><td>$date</td><td>$modSupp</td></tr>";
   // echo "<td>";
    //echo "<a href='supprimerdon.php?Id_Don=$id' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    //echo "<a href='' class='btn btn=danger'>Modifier</a>";
   
  }
  //if ($result->num_rows > 0) {
   // output data of each row
   /*while($row = $result->fetch()) {
    echo "<tr><td>" . $row["Id_Don"] . "</td><td>" . $row["Type"] . "</td><td>" . $row["Duree"] . "</td><td>" . $row["Salle"] . "</td><td>" . $row["Heure"] . "</td><td>" . $row["Date"] . "</td><td>" . $row["Centre"] . "</td></tr>";
}*/
echo "</table>";
include('don.php');
 ///else { echo "0 results"; }
//$bdd->close();
?>
</table>
</div>
</body>
</html>