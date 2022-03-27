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

    <h1>Bienvenue sur la page des contributions refusées par les administrateurs</h1>
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
                include("../back_end/denied_sites.php");
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