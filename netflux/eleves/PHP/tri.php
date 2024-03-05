<?php

//ouverture de session
session_start();

// recuperation des variables tri et type qui vont permettre d'effectuer les differents tris
$tri = isset($_GET['tri']) ? urldecode($_GET['tri']) : null;
$type = isset($_GET['type']) ? urldecode($_GET['type']) : null;

//connection à la DB
try {
    $bdd = new PDO(
        'mysql:host=127.0.0.1;dbname=films;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>
<body>

<div class="bannière">


<header>


    <nav>

        <ul>
            <li><a id='acc' href='profil.php'>Accueil</a></li>
            <?php

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

<div class="video">

    <ul class="list">

        <ul class="liste-films">
            <?php

            // condition de tri suivant la selection de l'utilisateur

            if(isset($_GET["tri"])){
                //tri par duree 
                if($tri === "duree"){
                    $sql = "SELECT * FROM Video ORDER BY duree DESC";
                    echo "<h2>Par durée</h2>";
                    $req = $bdd -> prepare($sql);
                }
                //tri par ordre alphabetique
                elseif($tri === "titre"){
                    $sql = "SELECT * FROM Video ORDER BY titre ASC";
                    echo "<h2>Par ordre alphabetique</h2>";
                    $req = $bdd -> prepare($sql);
                }
                //tri par les plus recent
                elseif($tri === "date"){
                    $sql = "SELECT * FROM Video ORDER BY date DESC";
                    echo "<h2>Les plus récent</h2>";
                    $req = $bdd -> prepare($sql);
                }     
                else{
                    //tri par genre
                    $sql = "SELECT * FROM Video 
                    JOIN Appartenir ON Video.idvideo = Appartenir.fkVideo
                    JOIN Genre ON Appartenir.fkgenre = Genre.idgenre 
                    WHERE genre.libelle = :tri";
                    echo "<h2>". $_GET['tri'] ."</h2>";
                    $req = $bdd -> prepare($sql);
                    $req -> bindParam(":tri", $tri, PDO::PARAM_STR);
                }

            }
            //recuperation du type de contenu choisi (serie,film,animé)
            elseif(isset($_GET["type"])){
                $sql = "SELECT *FROM video
                JOIN type ON video.fktype = type.idtype
                where type.denomination = :type";
                echo "<h2>Par" . " " . $_GET['type']."</h2>";
                $req = $bdd -> prepare($sql);
                $req -> bindParam(":type", $type, PDO::PARAM_STR);
            }else{
                echo "erreur de chargement";
            }



            $req -> execute();
            $donnees = $req -> fetchAll();


            //affichage des informations des films, series, animé
            foreach ($donnees as $elem) {
                $img = "../images/tendances/" . $elem["video"] . ".webp";
                echo "<li class='film'>";
                echo "<a href='affiche_film.php?titre=" . urlencode($elem['titre']) . "'><img class='imgF' src='$img' alt=''></a>";
                echo "<div class='infos'>" . $elem["titre"]. "<br>";
                echo "</li>";
            }


            
        echo "</ul>";

    echo "</ul>";

    echo "</div>";
    
echo"</body>";
echo"</html>";
?>