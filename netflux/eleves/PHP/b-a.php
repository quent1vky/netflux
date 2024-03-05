<?php

// si video existe, on decode l'URL
$video = isset($_GET['video']) ? urldecode($_GET['video']) : null;

try {
    $bdd = new PDO(
        'mysql:host=127.0.0.1;dbname=films;charset=utf8',
        'root',
        ''
    );
} catch (Exception $e) {
    die('Erreur:'. $e->getMessage());
}

$sql = "SELECT * FROM video where video = :video";

$req = $bdd->prepare($sql);
$req->bindParam(":video", $video, PDO::PARAM_STR);
$req->execute();
$donnees = $req->fetchAll();


foreach ($donnees as $d) {
    $titre = $d["titre"];
    $t = $d["video"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Bande Annonce <?php echo $titre ?></title>
</head>
<body>

<?php

echo "<video controls src='../bande-annonce/$t.mp4'></video>";

?>

    
</body>
</html>
