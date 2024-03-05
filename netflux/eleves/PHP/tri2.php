<?php

//connection à la DB
try {
    $bdd = new PDO(
        'mysql:host=127.0.0.1;dbname=films;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e) {
    die('Erreur:' . $e->getMessage());
}

if (isset($_POST["mail"])) {
    $mail = $_POST["mail"];

    //Preparation de la requete
    $sql = "SELECT COUNT(*) FROM netflux WHERE mail = :mail";
    $req = $bdd->prepare($sql);
    $req->bindParam(':mail', $mail, PDO::PARAM_STR);
    $req->execute();

    //Récuperation des données
    $donnees = $req->fetchColumn();

    //Si la requête renvoie une entité ($donnees > 0) cela signifie que le mail est deja dans la DB
    if ($donnees > 0) {
        $response = "Email déjà utilisé";
    //Sinon le mail est disponible
    } else {
        $response = "Email disponible";
    }
    echo $response;
} else {
    // Erreur pour ne pas acceder à cette page directement depuis le menu xamp
    echo "Erreur: Impossible de charger la page";
}
?>
