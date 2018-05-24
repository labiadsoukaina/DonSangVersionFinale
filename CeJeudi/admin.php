<?php

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = ($_POST['mdpconnect']);
   //echo $mailconnect;
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
     if ($_POST['mailconnect'] == "admin@gmail.com" AND $_POST['mdpconnect'] == "admin"){
        
       // echo "Coucou";

         header("Location: AdminAcc.php");
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}



?>
<!DOCTYPE html>
    <html>
    <title>Connexion administrateur</title>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="author" content="WebThemez">
  <link rel="stylesheet" href="css/bootstrap-3.3.6-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style_inscription.css">
  <link rel="stylesheet" href="css/styles1.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <style>.carousel-indicators .active{background-color:#00a1cb;width: 37px;height: 37px;border-radius: 20px;}
      .carousel-indicators li {background: rgba(67, 67, 68, 0.7);
      width: 37px;height: 37px;border-radius: 20px; }
      </style>
</head>
<body>
<header class="header">
  
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="AdminAcc.php" class="navbar-brand scroll-top logo  animated bounceInDown"><b><i></i><em style="color:#d61e1e;">GIVE</em></b><em style="color:#000000;">life</em></a> </div>
     
      <!--div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          

          <li><a href="Planning.php" class="">Gestion des plannings</a></li>
          <li ><a href="Personnel.php" class="">Gestion du personnel</a></li>        
          <li><a href="Don.php" class="">Gestion des dons</a></li>
          <li><a href="Salle" class="">Gestion des salles</a></li>
          <li><a href="#" class="">Gestion des RDV</a></li>
        </ul>
      </div-->
     
    </nav>
  </div>
</header>

<div class="admin" style="margin-top:100px;">
      <form action="admin.php" method="POST" >
      <h1 align="center"><b>Espace administrateur</b></h1>
        <table class="table" align="center">
            <tr>
              <td>
                <label for="Nom">Email :</label>
              </td>
              <td>
              <input type="email" name="mailconnect" placeholder="Mail" />
              </td>
            </tr>

            <tr>
              <td>
                <label for="Nom">Mot de passe :</label>
              </td>
              <td>
              <input type="password" name="mdpconnect" placeholder="Mot de passe" />
              </td>
            </tr>

            <tr>
              <td>
              <input type="submit" name="formconnexion" value="Se connecter" />
              </td>
            </tr>
           
        </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>






<a href="#top" class="topHome"><i class="fa fa-chevron-up fa-2x"></i></a> 
<script src="js/jquery-2.2.0.min.js" type="text/javascript"></script> 
<script src="css/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript"></script> 

 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script> 

   <script> 
        $(function () {
$('.carousel').carousel({ interval: 6000 });
});
</script>
   </body>
</html