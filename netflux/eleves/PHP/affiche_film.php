<?php

if(!(isset($_GET["titre"]))){
    // message d'erreur afin de masquer à l'utilisateur les erreur SQL.
    echo "impossible d'acceder à cette page";
}else{

session_start();

// Récupérez le titre depuis l'URL
$titre = isset($_GET['titre']) ? urldecode($_GET['titre']) : null;

//Tableaux
$acteurs = array();
$real = array();
$type = array();
$genres = array();


//connection à la DB
try {
    $bdd = new PDO(
        'mysql:host=127.0.0.1;dbname=films;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e) {
    die('Erreur:'. $e->getMessage());
}

//requete SQL 
$sql = "SELECT Video.titre, Video.date, Video.duree, Acteur.nom AS acteurN, Acteur.prenom AS acteurP, 
        Realisateur.nom as realN, Realisateur.prenom AS realP,libelle,role,video,type.denomination
        FROM Video
        JOIN Realiser ON Video.idvideo = Realiser.fkvideo
        JOIN Realisateur ON Realiser.fkReal = Realisateur.idReal
        JOIN Appartenir ON Video.idvideo = Appartenir.fkVideo
        JOIN Genre ON Appartenir.fkgenre = Genre.idgenre
        JOIN Jouer ON Video.idVideo = Jouer.fkVideo 
        JOIN Acteur ON Jouer.fkActeur = Acteur.idActeur
        JOIN type ON video.fktype = type.idType
        WHERE Video.titre = :titre";


//preparation de la requête
$req = $bdd->prepare($sql);
$req->bindParam(':titre', $titre, PDO::PARAM_STR);
$req->execute();
$fd = $req->fetchAll();



foreach ($fd as $f) {
    $duree = $f["duree"];
    $video = $f["video"];
    $titre = $f["titre"];
    $img = "../images/tendances/" . $video . ".webp";
    $date = $f["date"];


    // On ajoute les infos des acteurs,types de film ,nom et prenom realisateurs et genre dans des tableaux differents
    // afin d'éviter les doublons lors de l'affichage.
    // strtoupper est une fonction qui passe les chaines de caractères en majuscule.
    if (!in_array($f["acteurP"] . " " . strtoupper($f["acteurN"]) . " : " . $f["role"] , $acteurs)) {
        $acteurs[] = $f["acteurP"] . " " . strtoupper($f["acteurN"]) . " : " . $f["role"];
    }
    if(!in_array($f["denomination"],$type)){
        $type[] = $f["denomination"];
    }
    if(!in_array($f["realP"] . " " . $f["realN"],$real)){
        $real[] = $f["realP"] . " " . $f["realN"];
    }
    if(!in_array($f["libelle"] ,$genres)){
        $genres[] = $f["libelle"];
    }

}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Netflux - <?php echo $titre; ?></title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<div class="bannière">


<header>


    <nav>

        <ul>
            <li><a id='acc' href="profil.php">Accueil</a></li>
            <?php
            foreach ($type as $t){
                echo "<li><a class='blanc' href='tri.php?type=" . urlencode($t) . "'>Plus de" . " " . $t . "</a></li>";    
            }

            if(isset($_SESSION['pseudo'])){
                echo "<div class='menu_deroulant'>";
                    echo "<button id='bouton_co'>" . "BONJOUR " . "<li id='pseudo'>" . $_SESSION['pseudo'] . "</li>" . "</button>";
                        echo "<div class='choix_tries'>";

                            //Formulaire redirigeant vers une page de deconnexion pour fermer la session
                            echo "<form action='deconnexion.php' method='POST'>";
                                echo "<input type='submit' id='deco' value='DECONNEXION'>";
                            echo "</form>";

                        echo "</div>";
                echo "</div>";
                        
            }else{
            echo "<button class='connexion'><a href='authentification.php'>Connecter-VOUS</a></button>";
            }
            ?>



        </ul>

    </nav>



</header>


</div>


    
    <h1><?php echo $titre; ?></h1>

    <div class="film-details">

        <ul class="infos">

            <li>Durée: <?php echo $duree; ?> minutes</li>

            <?php

            //la fonction implode separe les chîne de caractère par une virgules
            echo "<li>Réalisé par: " . implode(", ", $real) . "</li>";
            echo "<li>Genre : ". implode(",",$genres) . "</li>";
            ?>

            <li>Parrution : <?php echo " " . $date; ?></li>
            <li>Acteurs principaux, rôle:</li>

            <?php
            echo "<ul>";
            foreach ($acteurs as $acteur)
                echo "<li>" . $acteur .  "</li>";
            echo "</ul>";



        echo "</ul>";

        
        echo "<ul class='film_bouton'>";
                
            echo "<li id='imgAf'><img class='imgaF' src='$img' alt=''></li>";
            echo "<li>" . "<button id='regarder'><a href='b-a.php?video=" . urlencode($video) . "'>" . "Regarder " . $titre . "</a></button>" . "</li>";
            
        echo "</ul>";
            
    echo "</div>";
    echo "</body>";
echo "</html>";

}
?>

