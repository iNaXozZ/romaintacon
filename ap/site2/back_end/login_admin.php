<?php
if ($_POST['COURRIEL_UT'] == '' OR $_POST['MDP_UT'] == '') {
            echo "Merci de bien renseigner l'ensemble des champs";
            echo "<br />";
            echo "<a href='index.php'>Retour</a>";
}
else
{   // démarrage de la session et sauvegarde des informations dans 2 variables
            
    session_start();
    require_once('verifie_idf_connexion.php');
    // la variable de session connect vaut true ou false!!!!!!!!
    if (isset($mdp) && $mdp === $_POST['MDP_UT'] ) {
        $_SESSION['connect'] = $mdp == $_POST['MDP_UT'];
        // $_SESSION['connect'] = $mdp == sha1($_POST['password']);
        $_SESSION['id'] = $_POST['COURIEL_UT'];
        header('Location:../admin/index_admin.php');
    }
    else 
    {
        echo "Erreur sur identifiant ou mot de passe";
        echo "<br />";
        echo "<a href='index.php'>Retour</a>";
    }
}
?>
