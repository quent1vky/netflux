<?php

//ouverture d'une session
session_start();

// variables utilisé pour distinguer les differents types de trie
$duree = "duree";
$titre = "titre";
$date = "date";


$type = array();


// tabeaux genre permettra de stocker les genre de la bdd et de les affichés avec le foreach plus bas
//On va pouvoir affichés plusieurs genre si le films en possède plusieurs (sans repetition)
$genres = array();

// tableaux films permettra d'afficher les films sans doublons.
$films = array();


//Connection à la bdd films
try {
    $bdd = new PDO(
        'mysql:host=127.0.0.1;dbname=films;charset=utf8',
        'root',
        ''
);
} catch (Exception $e) {
    die('Erreur:'. $e->getMessage());
}
    
//preparation et execution de la requete sql
$sql = "SELECT DISTINCT video.*, genre.libelle, type.denomination
        FROM video
        JOIN appartenir ON video.idVideo = appartenir.fkVideo
        JOIN genre ON appartenir.fkGenre = genre.idGenre
        JOIN type ON video.fkType = type.idType";

$req = $bdd -> prepare($sql);
$req -> execute();
$donnees = $req -> fetchAll();


//On remplie le tableaux films sans doublons
foreach ($donnees as $infosF) {
    $video = $infosF["video"];
    if (!isset($films[$video])) {
        // creation d'un sous tableaux contenant le titre du film associé à 
        //l'entité "video" qui fait reference au nom des images des films
        $films[$video] = array(
            "titre" => $infosF["titre"],
        );

    }   
}

//On remplie le tableaux genres sans doublons
foreach($donnees as $infosG){
    if(!in_array($infosG["libelle"],$genres)){
        $genres[] = $infosG["libelle"];
    }
}

//On remplie le tableaux type sans doublons
foreach($donnees as $types){
    if(!in_array($types["denomination"],$type)){
        $type[] = $types["denomination"];
    }
}



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Netflux</title>
        <link rel="stylesheet" href="../CSS/style.css">
        <link rel="stylesheet" href="../CSS/responsive.css">
    </head>

    <body>
        
        <div class="banniere">


            <header>


                <nav>

                    <ul>

                        <li>
                            <?php
                            // Affichage des type dans la banniere
                            foreach ($type as $t){
                                echo "<li><a class='blanc' href='tri.php?type=" . urlencode($t) . "'>$t</a></li>";    
                            }
                            ?>
                        </li>

                        <?php

                        ?>
                        <li>
                            <div id="menu_deroulant">
                                <button id="bouton_t">--Trier par--</button>
                                    <div class="choix_trie">

                                        <?php
                                            //affichage des methodes de tri
                                            echo "<p class='c'><a href='tri.php?tri=" . urlencode($duree) . "'>Du plus long au plus court</a></p>";    
                                            echo "<p class='c'><a href='tri.php?tri=" . urlencode($titre) . "'> Titre: De A à Z</a></p>";    
                                            echo "<p class='c'><a href='tri.php?tri=" . urlencode($date) . "'>Les plus recent</a></p>"; 
                                        ?>
                                    </div>
                            </div>
                        </li>

                        <li>
                            <div id='menu_deroulant'>
                                <button id='bouton_t'>Genre</button>
                                    <div class='choix_trie'>

                                        <?php
                                        //affichages des genres récupéres dans le tableaux
                                        foreach ($genres as $g){
                                            echo "<p class='c'><a href='tri.php?tri=" . urlencode($g) . "'>$g</a></p>";
                                        }

                                        ?>
                                    </div>
                            </div>
                        </li>

                        <li>
                        
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
                        </li>
                        

                    </ul>

                </nav>


            </header>


        </div>


<div class="video">

    <h2>Tout les films</h2>

    <ul class="list">

        <ul class="liste-films">
            

            <?php
            // Affichage des infos sur les films
                foreach ($films as $video => $film) {
                    $img = "../images/tendances/" . $video . ".webp";
                    echo "<li class='film'>";
                    echo "<a href='affiche_film.php?titre=" . urlencode($film['titre']) . "'><img class='imgF' src='$img' alt=''></a>";
                    echo "<div class='infos'>" . $film["titre"];
                    echo "</li>";
                }
                
            ?>
        </ul>

    </ul>

</div>



<script src="../JS/script.js"></script>


        
    </body>
</html>



