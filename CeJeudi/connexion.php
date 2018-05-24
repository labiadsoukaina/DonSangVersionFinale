<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=dondesang2', 'root', '');
if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = ($_POST['mdpconnect']);
   //echo $mailconnect;
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
     include ('ConnexionBD.php');
    
      $requser = $bdd->prepare("SELECT * FROM donneur WHERE Email='$mailconnect' AND Mdp='$mdpconnect'");
    
      //echo $mailconnect;
      //echo $mdpconnect;
   
      $requser->execute(array($mailconnect, $mdpconnect));
    
      $userexist = $requser->rowCount();
      if($userexist == 1) {
        echo "Coucou";
         $userinfo = $requser->fetch();
         $_SESSION['Id'] = $userinfo['Id'];
         $_SESSION['CIN'] = $userinfo['CIN'];
         $_SESSION['Email'] = $userinfo['Email'];
         $_SESSION['Mdp'] = $userinfo['Mdp'];
         header("Location: profil.php?Id=".$_SESSION['Id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<!--<html>
   <head>
      <title>Connexion</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="connexion.php">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         //if(isset($erreur)) {
            //echo '<font color="red">'.$erreur."</font>";
         //}
         ?>
      </div>
   </body>
</html>-->