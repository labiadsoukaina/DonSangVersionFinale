<?php
   //session_start();
    
   // $db = mysqli_connect("localhost", "root", "dondesang");
    
    if (isset($_POST['Valider'])) {
         
		 $nom=$_POST['Nom'];
		 $prenom=$_POST['Prenom'];
		 $cin=$_POST['CIN'];
		 $email=$_POST['Email'];
		 $mdp=$_POST['Mdp'];
		 $verifmdp=$_POST['verifmdp'];
		 
		 
		 if($nom&&$prenom&&$cin&&$email&&$mdp&&$verifmdp) {
			 $connect = mysqli_connect('localhost','root','', 'dondesang') or die('mysqli_error'());
			  //mysqli_select_db('dondesang');	 
			 $query = "INSERT INTO donneur VALUES('$nom', '$prenom', '$cin', '$email', '$mdp'))";
             $res=mysqli_query($connect,$query);			
			 die("Inscription términée <a href='Acc.html'>Connectez vous</a>");
			 if($mdp == $verifmdp)
               {
						
		         }
					else echo "Les mdps doivent etre identiques";
		 }
		 
		 
		 else echo "veuillez saisir tous les champs";
		  
          }

?>


<!DOCTYPE html>
	<html>
		<head>
			<title> Inscription </title>
			
		</head>

<body>
    <div class="inscription">
         <form method="POST" action="InsertD.php">
		<h1 align="center">S'inscrire</h1>
		

		<table class="table" align="center">
		

		<tr>
			<td>
				<label for="Nom">Nom :</label>
			</td>
			<td>
				<input type="text" name="Nom" maxlength="50" size="30" placeholder="Entrer votre nom">
			</td>
		</tr>
        
        <tr>
			<td>
				<label for="Prenom">Prenom: </label>
			</td>
			<td>
				<input type="text" name="Prenom" maxlength="50" size="30" placeholder="Entrer votre prénom">
			</td>
		</tr>
        
        
        <tr>
        <td>
		<label for="CIN">CIN:</label>
			</td>
			<td>
				<input type="text" name="CIN" maxlength="50" size="30" placeholder="Entrez votre CIN">
			</td>
		</tr>

		<tr>
        

     <tr>
        <td>
		<label for="Email">Email:</label>
			</td>
			<td>
				<input type="text" name="Email" maxlength="50" size="30" placeholder="Exemple@gmail.com">
			</td>
		</tr>



		
		<tr>
			<td>
				<label for=password>Mot de passe:</label>
			</td>
			<td>
				<input type="text" name="Mdp" maxlength="50" size="30" placeholder="******">
			</td>
		</tr>	
		<tr>
            <tr>
			<td>
				<label for=VérifPassword>Vérification du mot de passe:</label>
			</td>
			<td>
				<input type="text" name="verifmdp" maxlength="50" size="30" placeholder="******">
			</td>
		</tr>	
		<tr>
			<td>
				<input type="submit" name="Valider" value="Valider" class="valider">
			
			</td>
		</tr>

					
		</table>

	
	</form>
    </div>
</body>
</html>