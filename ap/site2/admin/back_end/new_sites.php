<!doctype html>
<html>
<head>

</head>
<body>
<?php
    include("connexion.php");
    $requete = $connexion->prepare('SELECT * from article INNER JOIN categorie ON article.ID_CAT = categorie.ID_CAT ORDER BY DATE_PROP_ART DESC');
    $requete->execute();
    $result = $requete->fetchall();
?>
</body>
</html>