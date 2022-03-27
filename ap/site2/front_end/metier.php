<?php

    session_start();
    $bdd = new PDO("mysql:host=localhost;dbname=ap","root","");
    $id = $_GET['id'];
    $pre = $bdd->prepare("SELECT * FROM article WHERE ID_ART = ?");
    $pre->execute(array($id));
    $art = $pre->fetchAll();

    foreach($art as $arts){



?>
<!doctype html>
<html>

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/default.css" />
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>


        <title> Les métiers</title>
    </head>
<body>
<?php
include("../templates/navbar_front_end.php");
?>
<h1><?php echo $arts['TITRE_ART']; ?></h1>

<h3>Description</h3>
<?php echo $arts['DESCR_ART']; ?>


<h3>Salaire</h3>
<p>Son salaire est de <?php echo $arts['SALAIRE_ART']; ?> €</p>
<?php
    }
?>