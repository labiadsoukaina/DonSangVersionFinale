<!DOCTYPE html>
    
    <?php
    
    /*include ('connexion.DB');
    $x= "SELECT * FROM personnel";
    echo $x;   */ 
    ?>
       
<html>
<title>Admine</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="WebThemez">
<link rel="stylesheet" href="css/bootstrap-3.3.6-dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles1.css" />
<link rel="stylesheet" href="css/animate.css" />
<style>.carousel-indicators .active{background-color:#00a1cb;width: 37px;height: 37px;border-radius: 20px;}
    .carousel-indicators li {background: rgba(67, 67, 68, 0.7);
    width: 37px;height: 37px;border-radius: 20px; }
    </style>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="AdminAcc.php" class="navbar-brand scroll-top logo  animated bounceInDown"><b><i></i><em style="color:#d61e1e;">GIVE</em></b><em style="color:#000000;">life</em></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <!--li class="active" id="firstLink"><a href="#home" class=""><b>Espace administrateur</b></a></li-->

          <li><a href="afficherplanning.php" class="">Gestion plannings</a></li>
          <li ><a href="afficherpersonnel.php" class="">Gestion personnel</a></li>        
          <li><a href="afficherdon.php" class="">Gestion dons</a></li>
          <li><a href="affichersalle.php" class="">Gestion salles</a></li>
          <li><a href="afficherrdva.php" class="">Gestion RDV</a></li>
          <li><a href="decoadmin.php" class="">Se déconnecter</a></li>

        </ul>
      </div>
    </nav>
  </div> 
</header>
    
<?php
   //if (isset""]))
?>
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
</html>