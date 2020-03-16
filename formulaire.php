<html>
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
				<option value="benevole">Benevole</option>
				<option value="salarier">Salarier</option>
				<option value="dirigeant">Dirigeant</option>
				<option value="autre">Autre</option>
			
			<input type="submit" value="Valider">
			<input type="reset" value="Effacer">
		</form>

	</body>
</html>