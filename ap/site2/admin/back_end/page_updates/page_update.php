<!doctype html>
<html>

<head>

</head>

<body>
    <?php
    foreach ($_POST as $key => $value) {
        $id = str_replace("option_", "", $key);
        $choix = $value;
        echo $choix;
        include("../connexion.php");
        $requete = $connexion->prepare('UPDATE article set STATUS_ART=:choix,date_accord_art=now() where id_art=:id_art');
        $requete->bindParam(":id_art", $id);
        $requete->bindParam(":choix",$choix);
        $requete->execute();
        header("Location: ../../index.php");
        exit();


    }
    ?>
</body>

</html>