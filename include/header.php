<?php
ob_start();
require_once "Users.php";
//require_once "Admin.php";
?>


<header>   
        <nav>
                <ul class="nav-link">
                    <li><a href="../public/index.php">Accueil</a></li>
                    <?php 
                    if(!isset($_SESSION['id'])){   
                    ?>                
                    <li><a href="../public/inscription.php">Inscription</a></li>
                    <li><a href="../public/connexion.php">Se connecter</a></li>
                     
                     <?php             
                    }else{
                    ?>
                    <li><a href="../public/reprofil.php">Changer le profil</a></li>
                    <li><a href="../public/les_annonces.php">Annonces</a></li>
                    <li><a href="../public/les_profils.php">Profils</a></li>
                    <li><a href="../public/les_commentaires.php">Commentaires</a></li>
                    <li><a href="../public/recherche.php">Recherche</a></li>
                    <li><button class="deconnect"><a href="../public/deconnexion.php">OFF</a></button></li>
                        
                <?php
                    }
                    ?>
                    
                </ul>
        </nav>
    </div>
</header>
<body class="container">
