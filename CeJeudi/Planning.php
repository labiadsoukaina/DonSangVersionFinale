<!DOCTYPE html>
    
    <?php include ('connexionBD.php');
    $query = $bdd->prepare("SELECT * FROM personnel WHILE Prenom = ?");
    //$personnel= htmlspecialchars($_POST['Personnel']);
 //$rslt= mysqli_query($bdd, $query);
    ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gestion planning</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Planning.css" />
    <script src="main.js"></script>
</head>
<body>
<div>
    <form id="Planning" method = "post" action="ajoutplanning.php" >
    <label for="ajouterPerso">Afficher un planning :<br></label><br>
        <table class="table" align="center">
            <tr>
                <td>
                    <select method= "post" name="Personnel"> 
                    <option>--Personnel--</option>
                        <option>Labiad</option>
                        <option>Zidani</option>
                        <option>Alaoui</option>
                    </select>
                </td>
                <td>
                    <a href="afficherplanning.php">Afficher</a>
                </td>
            </tr>          
        </table>
        <label for="ajouterHorai">Ajouter un horaire :<br></label><br>
        <table class="table" align="center">
        <tr>
                <td>
                    <label>Personnel :</label>
                </td>
                <td>
                    <select name="Personnel">
                    <option>--Personnel--</option>
                        <option>Labiad</option>
                        <option>Zidani</option>
                        <option>Alaoui</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Date :</label>
                </td>
                <td>
                    <input type="date" name="Date">
                </td>
            </tr> 
            <tr>
                <td>
                    <label>Salle :</label>
                </td>
                <td>
                    <input type="text" name="Salle">
                </td>
            </tr> 
            <tr>
                <td>
                    <label>Type :</label>
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
                    <label>Heure de :</label>
                </td>
                <td>
                    <input type="time" name="Heure_de">
                </td>
            </tr> 
            <tr>
                <td>
                    <label>à :</label>
                </td>
                <td>
                    <input type="time" name="Heure_a">
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