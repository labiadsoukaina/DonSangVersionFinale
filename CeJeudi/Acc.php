<?php
include ('connexion.php');
?>
  <!DOCTYPE html>
    <html>
    <title>Se connecter</title>
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

<div class="seconnecter" style="margin-top:55px;">
      <form action="Acc.php" method="POST" >
      <div class="header2"></div>

        <h1 align="center"><b>Se connecter</b></h1>
        <table class="table" align="center">
            <tr>
              <td>
                <label for="Nom">Email :</label>
              </td>
              <td>
              <input placeholder="Entrez votre email" type="mail" name="mailconnect"/><br>
              </td>
            </tr>

            <tr>
              <td>
                <label for="Nom">Mot de passe :</label>
              </td>
              <td>
              <input  placeholder="Entrez votre mdp" type="password" name="mdpconnect"/><br>
              </td>
            </tr>

            <tr>
              <td>
              <input type="submit" class="Blogin" value="login" name="formconnexion"/>
              </td>
            </tr>
          </table>
          </form>

          <div id="intro2" class="bodyx">Vous n'avez pas de compte? <a href="inscription.php">
          Inscrivez-vous maintenant</a></div><br>    
</div>
</body> 

<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
<script src="css/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/ajax.js"></script>
<script src="js/chained.js"></script>
</html>