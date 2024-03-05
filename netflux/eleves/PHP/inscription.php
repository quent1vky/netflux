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


					<label for="nom">Nom : </label> 
					<input type="text" name="nom" id="nom" /> 

						<br>
						<br>

					<label for="nom">Prenom : </label> 
					<input type="text" name="prenom" id="prenom" /> 

						<br>
						<br>

					<label for="pseudo">Pseudo<span>*</span> : </label>
					<input type="pseudo" name="pseudo" id="pseudo" required>

						<br>
						<br>
					
					<label for="mdp">Mot de passe<span>*</span> : </label>
					<input type="password" name="mdp" id="mdp" minlength="8" required/>

						<br>
						<br>

					<label for="vmdp">Valider votre mot de passe<span>*</span> : </label>
					<input type="password" name="vmdp" id="vmdp" minlength="8" required/>

						<br>
						<br>

					<label for="dateN">Date de naissance : </label>
					<input type="date" name="dn" id="dateN" >

						<br>
						<br>

					
					<label for="mail">Adresse mail<span>*</span> : </label>
					<input type="email" name="mail" id="mail" required>
					<button id="boutton">validez</button>
					<div id="result"></div>


					


						<br>
						<br>

				<fieldset>


					<legend>Genre et conditions</legend>

						<div class="centre">


							

							<label for="genre1">Homme<span>*</span></label>
							<input type="radio" name="genre" id="genre1" value ="homme" checked>
							
							<label for="genre2">Femme</label>
							<input type="radio" name="genre" id="genre2" value ="femme">
							
							<label for="genre3">Autre</label>
							<input type="radio" name="genre" id="genre3" value="autre">
							

		

							<br>
							<br>

							<input type="checkbox" name="terms" id="terms" required>
							<label for="terms">J'accepte les conditions d'utilisation de ce site <span>*</span> </label>


							<br>
							<br>


							<input type="checkbox" name="cu" id="cu">
							<label for="cu">J'accepte de recevoir des mails d'informations</label>

					
						

						</div>

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


		<div class="legend">


			<span>*</span>
			<span>: champs obligatoire</span>

		</div>

	</body>
<script src="../JS/script.js"></script>

</html>


