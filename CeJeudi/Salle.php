<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Salle.css" />
    <script src="main.js"></script>
</head>

<body>
<div>
      <form method="post" action="ajoutsalle.php">
        <table class="table" align="center">
            <label for="ajouterSalle"><br>Ajouter une salle :<br></label><br> 
            <tr>
              <td>
                <label for="">Numero :</label>
              </td>
              <td>
            <input type="text" name="Numero">
              </td>
            </tr>
            <tr>
              <td>
                <label for="">Capacité max :</label>
              </td>
              <td>
            <input type="text" name="CapaciteMax">
              </td>
            </tr>
            <tr>
                <td>
                     <label for="DonPoss">Type de don :</label>
                </td>
                <td>
                    <select name="TypeDon">
                        <option>Sang</option>
                        <option>Plasma</option>
                        <option>Plaquettes</option>
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
</body>
</html>