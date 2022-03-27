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

    <h1>Bienvenue sur la page des contributions mises en attente par les administrateurs</h1>
    <h2>Voici les pages mises en attente :</h2>
    <div class="waiting_pages">
        <form action="../back_end/page_updates/page_update.php" method="post">
            <table>
                <thead>
                    <tr>
                        <td>Identifiant</td>
                        <td>Titre</td>
                        <td>Description</td>
                        <td>Date soumission</td>
                        <td>Date décision</td>
                        <td>Contributeur</td>
                        <td>Catégorie</td>
                        <td>Choixs</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../back_end/waiting_sites.php");
                    foreach ($result as $waiting_sites) {
                        if ($waiting_sites['STATUS_ART'] == 'D') {
                    ?>
                            <tr>
                                <td><?php echo $waiting_sites['ID_ART']; ?></td>
                                <td><?php echo $waiting_sites['TITRE_ART']; ?></td>
                                <td><?php echo $waiting_sites['DESCR_ART']; ?></td>
                                <td><?php echo $waiting_sites['DATE_PROP_ART']; ?></td>
                                <td><?php echo $waiting_sites['DATE_ACCORD_ART']; ?></td>
                                <td><?php echo $waiting_sites['ID_CONT']; ?></td>
                                <td><?php echo $waiting_sites['LIBELLE_CATEG']; ?></td>
                                <td><select name="option_<?php echo $waiting_sites['ID_ART'] ?>">
                                        <option value="D">Non défini</option>
                                        <option value="A">Accepter</option>
                                        <option value="R">Refuser</option>
                                        <option value="D">Mettre en attente</option>
                                    </select></td>
                        <?php }
                    } ?>
                            </tr>
                </tbody>
            </table>
            <p><input type="submit" value="Envoyer"></p>
        </form>
    </div>
</body>