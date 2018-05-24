<!DOCTYPE html>
 <?php include('AdminAcc.php');?>
<html>
<head>
 <title>Table with database</title>
 <style>
  table {
   border-collapse: collapse;
   width:100%;
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
<div class="salle" style="margin-top:130px;">
      <h2 align="center"><b>Gestion des salles</b></h2>
 <table>
 <tr>
  <th>Numero</th> 
  <th>Capacite maximum</th> 
  <th>Type de don</th>
  <th>Actions</th>
 </tr>
 <?php
include ('connexionBD.php');
  // Check connection
  
  $sql = "SELECT * FROM salle";
  $result = $bdd->query($sql);
  $data = $result->fetchAll();
  for ($i=0;$i<count($data);$i++)
  {
    $numero=$data[$i]["Numero"];
    $capmax=$data[$i]["CapaciteMax"];
    $typedon=$data[$i]["TypeDon"];
    
    $modSupp="<a href='supprimersalle.php?Numero=$numero' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    $modSupp=$modSupp."<a href='' class='btn btn=danger'>Modifier</a>";
    echo "<tr><td>$numero</td><td>$capmax</td><td>$typedon</td><td>$modSupp</td></tr>";
    //echo "<td>";
    //echo "<a href='supprimersalle.php?Numero=$numero' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supp </a>";
    //echo "<a href='' class='btn btn=danger'>Mod</a>";
   
  }
  //if ($result->num_rows > 0) {
   // output data of each row
   /*while($row = $result->fetch()) {
    echo "<tr><td>" . $row["Numero"] . "</td><td>" . $row["CapaciteMax"] . "</td><td>"
. $row["TypeDon"]. "</td></td>";
echo "<td>";
    echo "<a href='supprimersalle.php?Numero=$numero' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supprimer </a>";
    echo "<a href='' class='btn btn=danger'>Modifier</a>";
}*/
echo "</table>";
include('salle.php');
 ///else { echo "0 results"; }
//$bdd->close();
?>
</table>
</div>
</body>
</html>