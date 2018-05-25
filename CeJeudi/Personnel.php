<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Personnel.css" />
    <script src="main.js"></script>
</head>
<body>
    <div>
        <form method="post" action="ajoutpersonnel.php">
            <label for="ajouterPerso">Ajouter un personnel :<br></label><br>
                <table class="table" align="center">

            <tr>
              <td>
                <label for="Nom">Nom :</label>
              </td>
              <td>
                <input type="text" name="Nom">
              </td>
            </tr>
            
            <tr>
              <td>
                <label for="Prenom">Prénom :</label>
              </td>
              <td>
                <input type="text" name="Prenom">
              </td>
            </tr>
            <tr>
              <td>
                <label for="Email">Mail :</label>
              </td>
              <td>
                <input type="email" name="Email">
              </td>
            </tr>
            <tr>
              <td>
                <label for="Mdp">Mdp :</label>
              </td>
              <td>
                <input type="password" name="Mdp">
              </td>
            </tr>
            <tr>
            <td>
                <label for="Sexe">Sexe :</label>
              </td>
              <td>
                    <select name="Sexe">
                        <option>Homme</option>
                        <option>Femme</option>
                    </select>
              </td>
            </tr>
            <tr>
            <td>
                <label for="Pose">Poste :</label>
              </td>
              <td>
              <select name="Poste">
                        <option>Médecin</option>
                        <option>Infermier</option>
                        <option>Stagiaire</option>          
              </select>
              </td>
            </tr>
            <tr>
            <td>
                <label for="Droit">Droit :</label>
              </td>
              <td>
                        <select name="Droit">
                            <option>Personnel</option>
                            <option>Lecture</option>
                        </select>
                </td>
            </tr>
            <tr>
              <td>                
                <input type="submit" name="Ajouter" value="Ajouter">
              </td>
            </tr>         
    </table>
        </form>
        


    </div>
</body>
</html>