<?php
$bdd = new PDO("mysql:host=localhost;dbname=ap","root","");

$requete = $bdd->prepare('SELECT * FROM article');
$requete->execute();
$lignes = $requete->fetchAll();
?>
<nav>
        <div class="wrapper collapse navbar-collapse" id="main-navbar">
            <div class="logo"><a href="../index.php">BTS SIO1</a></div>

            <ul class="nav-links">
                <li>
                    <a href="#" class="desktop-item">Développeur</a>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <img class="icon" src="assets/images/dev.png" alt="">
                                <?php
                                    foreach($lignes as $ligne){
                                        if($ligne['ID_CAT'] == 2){
                                        
                                        
                                        $_SESSION['arts'] = $ligne;
                                        ?>
                                        <p><a href="<?php echo "metier.php?id=".$_SESSION['arts']['ID_ART'];  ?>"><?php echo $ligne['TITRE_ART']; ?></a></p>
                                        <?Php
                                        }
                                    }
                                ?>
                            </div>
                            
                        </div>
                    </div>
            </ul>

            <ul class="nav-links">
                <li>
                    <a href="#" class="desktop-item">Réseau</a>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <img class="icon" src="assets/images/res.png" alt="">
                                <?php
                                    foreach($lignes as $ligne){
                                        if($ligne['ID_CAT'] == 1){
                                        
                                        
                                        $_SESSION['arts'] = $ligne;
                                        ?>
                                        <p><a href="<?php echo "metier.php?id=".$_SESSION['arts']['ID_ART'];  ?>"><?php echo $ligne['TITRE_ART']; ?></a></p>
                                        <?Php
                                        }
                                    }
                                ?>
                            </div>
                            
                        </div>
                            
                    </div>
            </ul>


            <ul class="nav-links">
                <li>
                    <a href="#" class="desktop-item">Cybersécurité</a>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <img class="icon" src="assets/images/cyber.png" alt="">
                                <?php
                                    foreach($lignes as $ligne){
                                        if($ligne['ID_CAT'] == 3){
                                        
                                        
                                        $_SESSION['arts'] = $ligne;
                                        ?>
                                        <p><a href="<?php echo "metier.php?id=".$_SESSION['arts']['ID_ART'];  ?>"><?php echo $ligne['TITRE_ART']; ?></a></p>
                                        <?Php
                                        }
                                    }
                                ?>

                            </div>
                         
                        </div>

                    </div>
            </ul>

            <ul class="nav-links">
                <li>
                    <a href="#" class="desktop-item">Jeux-vidéos</a>
                    <div class="mega-box">
                        <div class="content">
                            <div class="row">
                                <img class="icon" src="assets/images/autre.png" alt="">
                                <?php
                                    foreach($lignes as $ligne){
                                        if($ligne['ID_CAT'] == 4){
                                        
                                        
                                        $_SESSION['arts'] = $ligne;
                                        ?>
                                        <p><a href="<?php echo "metier.php?id=".$_SESSION['arts']['ID_ART'];  ?>"><?php echo $ligne['TITRE_ART']; ?></a></p>
                                        <?Php
                                        }
                                    }
                                ?>
  
                            </div>

                        </div>

                    </div>
            </ul>

            <ul class="nav-links">
                <li>
                    <a href="connexion_admin.php" class="desktop-item">Administrateur</a>

            </ul>

            <ul class="nav-links">
                <li>
                    <a href="#" class="desktop-item">Contributeur</a>
                
            </ul>

        </div>
    </nav>