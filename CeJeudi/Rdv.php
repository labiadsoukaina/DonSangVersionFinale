<?php
 //echo "Votre demande est en cours de traitement";
?>

<!DOCTYPE html>
<html>
<title>Page Title</title>

<!--head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <script src="main.js"></script>
</head-->
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/bootstrap-3.3.6-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style_inscription.css">
    <!--link type="text/css" rel="stylesheet" href="Acc.css"/-->
</head>
<body style="background-color: rgba(3, 211, 244,0.5)">
    <header class="header">
      <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <a href="index2.php" class="navbar-brand scroll-top logo  animated bounceInDown"><b><i></i><em style="color:#d61e1e;">GIVE</em></b><em style="color:#000000;">life</em></a> </div>
        </nav>
        <!--/.navbar--> 
      </div>
      <!--/.container--> 
    </header>
    <!--/.header-->

    <div class="header2" style="margin-top:55px;"> 
    <h1><center>Prendre un rendez-vous</center></h1></div>
    <!--label for="Titre">Espace donneur</label-->
     <form method="post" action="ajoutrdv.php" >
        <table class="table" align="center">
            <tr>
              <td>
                <label for="CIN">CIN :</label>
              </td>
              <td>
                <input type="text" name="CIN">
              </td>
            </tr>

            <tr>
              <td>
                <label for="Type">Type de don :</label>
              </td>
              <td>
                    <select name="Type">
                        <option>Sang</option>
                        <option>Plasma</option>
                        <option>Plaquettes</option>
                    </select>
              </td>
            </tr>

            <tr>
              <td>
                <label for="GS">Groupe sanguin :</label>
              </td>
              <td>
                    <select name="GS">
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Date">Date :</label>
              </td>
              <td>
                <input type="date" name="Date">
              </td>
            </tr>

            <tr>
              <td>
                <label for="Heure">Heure :</label>
              </td>
              <td>
                <input type="time" name="Heure">
              </td>
            </tr>
        <tr>
            <td>
                <input type="submit" name="Valider" value="valider mon rendez-vous" class="valider">
                
            </td>
        </tr>
        <table>
     </form>
</body>
</html>