<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>page administrateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/css_admin.css" />
</head>


<body>
    <header>
        <?php include("templates/navbar.php"); ?>
    </header>

    <h1>Bienvenue sur la page d'acceuil des administrateurs</h1>
    <h2>Voici les dernières pages soumises :</h2>
    <div class="new_pages">
        <table>
            <thead>
                <tr>
                    <td>Identifiant</td>
                    <td>Titre</td>
                    <td>Description</td>
                    <td>Date soumission</td>
                    <td>Contributeur</td>
                    <td>Catégorie</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include("back_end/new_sites.php");
                for ($i = 0; $i < 5; $i++) {
                    $new_sites = $result[$i];
                    if ($new_sites['STATUS_ART'] == 'P') {
                ?>
                        <tr>
                            <td><?php echo $new_sites['ID_ART']; ?></td>
                            <td><?php echo $new_sites['TITRE_ART']; ?></td>
                            <td><?php echo $new_sites['DESCR_ART']; ?></td>
                            <td><?php echo $new_sites['DATE_PROP_ART']; ?></td>
                            <td><?php echo $new_sites['ID_CONT']; ?></td>
                            <td><?php echo $new_sites['LIBELLE_CATEG']; ?></td>
                    <?php }
                } ?>
                        </tr>
            </tbody>
        </table>
    </div>
    <h2>Voici les pages en attente de validation :</h2>
    <div class="waiting_pages">
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
                </tr>
            </thead>
            <tbody>
                <?php
                include("back_end/waiting_sites.php");
                for ($i = 0; $i < 5; $i++) {
                    $waiting_sites = $result[$i];
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
                    <?php }
                } ?>
                        </tr>
            </tbody>
        </table>
    </div>
    <h2>Voici les pages acceptés :</h2>
    <div class="accepted_pages">
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
                </tr>
            </thead>
            <tbody>
                <?php
                include("back_end/accepted_sites.php");
                foreach ($result as $accepted_sites) {
                    if ($accepted_sites['STATUS_ART'] == 'A') {
                ?>
                        <tr>
                            <td><?php echo $accepted_sites['ID_ART']; ?></td>
                            <td><?php echo $accepted_sites['TITRE_ART']; ?></td>
                            <td><?php echo $accepted_sites['DESCR_ART']; ?></td>
                            <td><?php echo $accepted_sites['DATE_PROP_ART']; ?></td>
                            <td><?php echo $accepted_sites['DATE_ACCORD_ART']; ?></td>
                            <td><?php echo $accepted_sites['ID_CONT']; ?></td>
                            <td><?php echo $accepted_sites['LIBELLE_CATEG']; ?></td>
                    <?php }
                } ?>
                        </tr>
            </tbody>
        </table>
    </div>
    <h2>Voici les pages refusées :</h2>
    <div class="denied_pages">
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
                </tr>
            </thead>
            <tbody>
                <?php
                include("back_end/denied_sites.php");
                foreach ($result as $denied_sites) {
                    if ($denied_sites['STATUS_ART'] == 'R') {
                ?>
                        <tr>
                            <td><?php echo $denied_sites['ID_ART']; ?></td>
                            <td><?php echo $denied_sites['TITRE_ART']; ?></td>
                            <td><?php echo $denied_sites['DESCR_ART']; ?></td>
                            <td><?php echo $denied_sites['DATE_PROP_ART']; ?></td>
                            <td><?php echo $denied_sites['DATE_ACCORD_ART']; ?></td>
                            <td><?php echo $denied_sites['ID_CONT']; ?></td>
                            <td><?php echo $denied_sites['LIBELLE_CATEG']; ?></td>
                    <?php }
                } ?>
                        </tr>
            </tbody>
        </table>
    </div>
</body>

</html>