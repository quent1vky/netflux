<?php

//Récuperation des infos entrées dans le formulaire avec $_POST
$mail = $_POST["mail"];
$dateN = $_POST["dn"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$genre = $_POST["genre"]; 
$pseudo = $_POST["pseudo"];


//On verifie si les mdp ne sont pas des chaines vides
if(isset($_POST['mdp']) && $_POST['mdp'] != ""){
    if(isset($_POST['vmdp']) && $_POST['vmdp'] != ""){
        //On verifie si les mdp sont les mêmes
        if($_POST['mdp'] === $_POST['vmdp'])
            //hash() permet d'encoder le mot de passe
            $mdp = hash('sha256', $_POST['mdp']);
        else
            //redirection vers inscription avec erreur
            header("Location:inscription.php?erreur=invpass");
    }else{
        //redirection vers inscription avec erreur
        header("Location:inscription.php?erreur=invpass");
    }
}else{
    //redirection vers inscription avec erreur    
    header("Location:inscription.php?erreur=invpass");
}

//connection à la base de données
$bdd = new PDO(
    'mysql:host=localhost;dbname=films;charset=utf8',
    'root',
    ''
);

//requete SQL
$sql = "INSERT INTO netflux (mail, dateN, nom, prenom, pseudo, mdp, genre) VALUES (:mail, :dateN, :nom, :prenom, :pseudo, :mdp, :genre);";
//preparation de la requete
$req = $bdd->prepare($sql);


//bindParam permet d'eviter les injections SQL en sécurisant les données passés dans la DB
$req->bindParam(':mail', $mail, PDO::PARAM_STR);
$req->bindParam(':mdp', $mdp, PDO::PARAM_STR);
$req->bindParam(':dateN', $dateN, PDO::PARAM_STR);
$req->bindParam(':nom', $nom, PDO::PARAM_STR);
$req->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$req->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
$req->bindParam(':genre', $genre, PDO::PARAM_STR);

$req->execute();

//ouverture session avec récuperation du pseudo et redirection vers profil.php
session_start();
$_SESSION["pseudo"] = $pseudo;
header("location: profil.php");
die();

?>
