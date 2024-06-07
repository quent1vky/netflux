<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<link rel="stylesheet" href="../CSS/style2.css">
		
	</head>
	<body>


		<div class="cadre">

			<div class="cadrebody">

				<h1>Connexion</h1>
				
				<form method="post" action="traitement_authentification.php">


				<input type="text" name="pseudo" id="unPseudo" placeholder="Pseudo" required />

				<br>
				<br>
    				
    			<input type="text" name="mail" id="eMail" placeholder="adresse-email" required />

				<br>
				<br>
					
    			<input type="password" name="mdp" id="mdp_auth" placeholder="mot de passe" required />

				<br>
				<br>
				<br>
				<br>

				<input type="submit" class="boutton-valid" value="Valider" required>
				
				<br>
				<br>

				</form>


				<footer class="foot">

				<p><a href="inscription.php">Pas de compte ? Inscrivez-vous ICI.</a></p>



				</footer>

			</div>


		</div>


	</body>
<script src="../JS/script.js"></script>

</html>


