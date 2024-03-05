<?php

//Récuperation des infos entrée par l'utilisateur dans le formulaire 
$pseudo = $_POST["pseudo"];
$mail = $_POST['mail'];

//hash() permet de crypter le mot de passe
$mdp = hash('sha256', $_POST['mdp']);


//connection à la DB
try {
    $bdd = new PDO(
        'mysql:host=localhost;dbname=films;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e) {
    die('Erreur:'. $e->getMessage());
}


//Préparation de la requête SQL
$sql = "SELECT COUNT(*) FROM netflux WHERE mail = :mail AND mdp = :mdp AND pseudo = :pseudo";
$req = $bdd->prepare($sql);

//bindParam permet d'eviter les injections SQL en sécurisant les données passés dans la DB
$req->bindParam(":mail", $mail, PDO::PARAM_STR);
$req->bindParam(":mdp", $mdp, PDO::PARAM_STR);
$req->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);

//execution requete + recuperation des donnees
$req->execute();
$session = $req->fetchColumn();



//Si la session existe, on recupere le pseudo plus on redirige vers profil.php
if ($session == 1) {
    session_start();
    $_SESSION['pseudo'] = $pseudo;
    header("location: profil.php");
    die();
}
else
    //Sinon on renvoie sur la page de connexion avec une erreur
    header("location: authentification.php?errorInvalidData");
    die();

?>
