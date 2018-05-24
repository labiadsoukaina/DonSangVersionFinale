<!DOCTYPE html>
 <?php //include('AdminAcc.php');?>
<html>
<head>
 <title>RDV</title>
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
<div class="rdv" style="margin-top:130px;">
<h1 align="center"><b>Gestion des rendez-vous</b></h1>
 
 <table>
 <tr>
  <th>Id_Rdv</th>
  <th>Type de don</th>
  <th>Groupe sanguin</th>
  <th>Date</th> 
  <th>Heure</th>
  <th>CIN</th>
  <th>Reponse</th>
  

 </tr>
 <?php
 include('AdminAcc.php');
include ('connexionBD.php');
  // Check connection
  $sql = "SELECT * FROM rv";
  //echo $sql;
  $result = $bdd->query($sql);
  
  $data = $result->fetchAll();
  for ($i=0;$i<count($data);$i++)
  {
    
        
    $id=$data[$i]["Id_Rv"];
    $type=$data[$i]["Type"];
    $gs=$data[$i]["GS"];
    $date=$data[$i]["date"];
    $heure=$data[$i]["heure"]; 
    $cin=$data[$i]["CIN"];
    $val="<a href='' class='btn btn=danger'>Valider </a>";
    $rej=$val."<a href='' class='btn btn=danger'>Rejeté</a>";
    
    
    
    echo "<tr><td>$id</td><td>$type</td><td>$gs</td><td>$date</td><td>$heure</td><td>$cin</td><td>$rej</td></tr>";
    /*echo "<td>";
    echo "<a href='supprimerdon.php?Id_Don=$id' onclick='return confirm(\"Etes vous sur de vouloir supprimer ? \");' class='btn btn=danger'>Supp </a>";
    echo "<a href='' class='btn btn=danger'>Mod</a>";*/
      
   
  }
  //if ($result->num_rows > 0) {
   // output data of each row
   /*while($row = $result->fetch()) {
    echo "<tr><td>" . $row["Id_Don"] . "</td><td>" . $row["Type"] . "</td><td>" . $row["Duree"] . "</td><td>" . $row["Salle"] . "</td><td>" . $row["Heure"] . "</td><td>" . $row["Date"] . "</td><td>" . $row["Centre"] . "</td></tr>";
}*/
echo "</table>";
//include('Rdv.php');
 ///else { echo "0 results"; }
//$bdd->close();
?>
</table>
</div>
</body>
</html>