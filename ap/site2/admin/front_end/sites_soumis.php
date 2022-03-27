<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page administrateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        <?php include("../css/css_admin.css"); ?>
    </style>
</head>

<body>
    <header>
        <?php
        include("../templates/navbar_front_end.php");
        ?>
    </header>

    <h1>Bienvenue sur la page des contributions soumises par les contributeurs</h1>
    <h2>Voici les pages soumises:</h2>
    <div class="new_pages">
        <?php
        include("../back_end/new_sites.php");
        foreach ($result as $new_sites) {
            if ($new_sites['STATUS_ART'] == 'P') {

        ?>
                <form action="../back_end/page_updates/page_update.php" method="post">
                    <table>
                        <tr>
                            <td>Identifiant</td>
                            <td><?php echo $new_sites['ID_ART']; ?></td>
                        </tr>
                        <tr>
                            <td>Nom du métier</td>
                            <td><?php echo $new_sites['TITRE_ART']; ?></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><?php echo $new_sites['DESCR_ART']; ?></td>
                        </tr>
                        <tr>
                            <td>Catégorie</td>
                            <td><?php echo $new_sites['LIBELLE_CATEG']; ?></td>
                        </tr>
                        <tr>
                            <td>Contributeur</td>
                            <td><?php echo $new_sites['ID_CONT']; ?></td>
                        </tr>
                        <tr>
                            <td>Date soumission</td>
                            <td><?php echo $new_sites['DATE_PROP_ART']; ?></td>
                        </tr>
                        <tr>
                            <td>Votre choix</td>
                            <td><select name="option_<?php echo $new_sites['ID_ART'] ?>">
                                        <option value="P">Non défini</option>
                                        <option value="A">Accepter</option>
                                        <option value="R">Refuser</option>
                                        <option value="D">Mettre en attente</option>
                                    </select></td>
                        </tr>
                    </table>
                    <p><input type="submit" value="Envoyer"></p>
                </form>
        <?php }
        } ?>
    </div>
</body>

</html>