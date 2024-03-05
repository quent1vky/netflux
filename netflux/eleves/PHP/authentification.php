<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Loggin</title>
		<link rel="stylesheet" href="../CSS/style2.css">
	</head>
	<body>
		<div class="cadre">
			<div class="cadrebody">
				<h1>Authentification</h1>

				<form action="traitement_authentification.php" method="post">

					<label for="pseudo">Pseudo : </label>
    				<input type="text" name="pseudo" id="pseudo" required />

					<br>
					<br>
    				
					<label for="adresse mail">Email : </label>
    				<input type="text" name="mail" id="mail" required />
					
					<br>
					<br>
					
					<label for="mdp">Mot de passe : </label>
    				<input type="password" name="mdp" id="mdp" required />

					<br>
					<br>
					
					<br>



						<input type="submit" class="boutton-valid" value="Valider"/>


					<br>
					<br>


						<input type="reset" class="boutton-efface" value="Effacer"/>


				</form>
			</div>

			<footer>
				<p>Pas de compte ? <a href="inscription.php">Cliquez ici.</a></p>
			</footer>

		</div>
	</body>
</html>
