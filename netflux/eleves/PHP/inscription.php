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

				<h1>Inscription</h1>
				
				<form method="post" action="traitement_inscription.php">


					<input type="text" name="nom" id="nom" placeholder="Nom" /> 

						<br>
						<br>

					<input type="text" name="prenom" id="prenom" placeholder="Prénom"/> 

						<br>
						<br>

					<input type="pseudo" name="pseudo" id="pseudo" placeholder="Pseudo" required>

						<br>
						<br>
					
					<input type="password" name="mdp" id="mdp" minlength="8" placeholder="Mot de passe" required/>

						<br>
						<br>

					<input type="password" name="vmdp" id="vmdp" minlength="8" placeholder="Valider le mot de passe"required/>

						<br>
						<br>

					<label for="dateN">Date de naissance : </label>
					<input type="date" name="dn" id="dateN" >

						<br>
						<br>
					
					<input type="email" name="mail" id="mail" placeholder="Adresse mail" required>
					<button id="boutton">validez</button>
					<div id="result"></div>
			</div>

					


						<br>
						<br>

				<fieldset>


					<legend>Genre et conditions</legend>

						<div class="centre">


							

							<label for="genre1">Homme</label>
							<input type="radio" name="genre" id="genre1" value ="homme" checked>
							
							<label for="genre2">Femme</label>
							<input type="radio" name="genre" id="genre2" value ="femme">
							
							<label for="genre3">Autre</label>
							<input type="radio" name="genre" id="genre3" value="autre">
							

		

							<br>
							<br>

							<input type="checkbox" name="terms" id="terms" required>
							<label for="terms">J'accepte les conditions d'utilisation de ce siteS</label>


							<br>
							<br>


							<input type="checkbox" name="cu" id="cu">
							<label for="cu">J'accepte de recevoir des mails d'informations</label>

					
						
					</fieldset>

					<br>
					<br>

					<input type="submit" class="boutton-valid" value="Valider" required>
				
				</form>


				<footer class="foot">

				<p><a href="authentification.php">Retour à la page de connexion.</a></p>



				</footer>

			</div>


		</div>


	</body>
<script src="../JS/script.js"></script>

</html>


