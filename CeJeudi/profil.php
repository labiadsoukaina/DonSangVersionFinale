<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=dondesang2', 'root', '');
if(isset($_GET['Id']) AND $_GET['Id'] > 0) {
   $getid = intval($_GET['Id']);
   $requser = $bdd->prepare('SELECT * FROM donneur WHERE Id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
    <title>Profil</title>
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
   
   <body>
      <div align="center" class="profil" style="margin-top:60px;">
      <form action="profil.php" method="POST" >
      <div class="header2"></div>

            <h2 align="center"><b>Profil de <?php echo $userinfo['Nom'].' '.$userinfo['Prenom']; ?></b></h2>
            <table class="table" align="center">
                
               <!-- Prenom = <?php echo $userinfo['Prenom']; ?>-->
                <br />
                <b>Email = <?php echo $userinfo['Email']; ?></b>
                <br />
               <b> CIN = <?php echo $userinfo['CIN']; ?></b>
                <br />         

                <?php
                if(isset($_SESSION['Email']) AND $userinfo['Email'] == $_SESSION['Email']) {
                ?>
                <br />
                <a href="#.php">Editer mon profil <br><br></a>
                <a href="deconnexion.php">Se déconnecter <br> <br></a>
                <a href="rdv.php">Prendre un rendez-vous <br> <br></a>
                <?php
                include('afficherrdv.php');
                }
                ?>
      </div>
   </body>
</html>
<?php   
}