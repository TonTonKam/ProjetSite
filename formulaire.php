<html>
	<head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
	<body>
	
		<form method='post' action='creation.utilisateur.php'>
			<label><b>Nom</b></label>
			<input type="text" placeholder="Entrer votre nom" name="nom" required>
			
			<label><b>Prenom</b></label>
			<input type="text" placeholder="Entrer votre prenom" name="prenom" required>
			
			<label><b>Email</b></label>
			<input type="email" placeholder="Entrer votre email" name="email" required>
			
			<label><b>Mot de passe</b></label>
			<input type="password" placeholder="Entrer le mot de passe" name="entrerPassword" required>
			
			<label for="status">Status</label>
			<select id="status" name="status">
				<option value="autre">Autre</option>
				<option value="benevole">Benevole</option>
				<option value="salarier">Salarier</option>
				<option value="dirigeant">Dirigeant</option>
				
			<input type="submit" value="Valider">
			<input type="reset" value="Effacer">
		</form>

	</body>
</html>