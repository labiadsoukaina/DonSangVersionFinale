<!DOCTYPE html>
<html>
<title>Gestion don</title>
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

<div>
      <form action="ajoutdon.php" method="POST" >
      <label for="ajouterPerso">Ajouter un don :<br></label><br>
        <table class="table" align="center">

            <tr>
              <td>
                <label for="Nom">Type :</label>
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
                    <label for="GS">Groupe sanguin:</label>
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
            </tr> <br>

            <tr>
              <td>
                <label for="Nom">Durée ( en min ) :</label>
              </td>
              <td>
                <input type="text" name="Duree">
              </td>
            </tr>

            <tr>
              <td>
                <label for="Nom">Salle :</label>
              </td>
              <td>
                <input type="text" name="Salle" >
              </td>
            </tr>

        <tr>
              <td>
                <label for="Nom">Date :</label>
              </td>
              <td>
                <input type="date" name= "Date">
              </td>
            </tr>

            <tr>
              <td>
                <label for="Nom">Heure :</label>
              </td>
              <td>
                <input type="time" name="Heure">
              </td>
            </tr>

            <tr>
              <td>
                <input type="submit" name="Ajouter" value="Ajouter">    
              </td>
            </tr>
        
       
    </form>
        
</body>
</html>