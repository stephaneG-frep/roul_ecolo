<?php
error_reporting(-1);
ini_set("display_errors", 1);
//session_start();
//inclure les fichiers nécessaire

require_once "./Users.php";
require_once "./Annonce.php";
require_once "./db/config.php";
require_once "./include/head.php";
require_once "./include/header.php";


//instancier la methode getAllAnnonces
$annonce = new Annonce();
$annonces = $annonce->getAllAnnonces();
// Instanciation du gestionnaire  des utilisateurs

?>


<div class="content">

                <div class="annonces-list">
                    <?php foreach ($annonces as $annonce): ?>
                        <div class="annonce-card">
                            <div class="annonce-header">
                                <img src="img/photo_profil/<?= $annonce['photo_profil'] ?>" alt="Photo de profil" class="user-photo">
                                <div class="user-info">
                                    <h3><?= htmlspecialchars($annonce['prenom'] . ' ' . $annonce['nom']) ?></h3>
                                    <h3><?=$annonce['email']?></h3>
                                </div>
                            </div>
                            
                            <div class="annonce-details">
                                <span class="departement"><?= htmlspecialchars($annonce['departement']) ?></span>
                                <p>"Je part de <?=$annonce['depart']?>  et je me rend a  <?=$annonce['arrive']?></p>
                                <h2><?= htmlspecialchars($annonce['vehicule']) ?></h2>
                                <p class="tarif"><?= htmlspecialchars($annonce['tarif']) ?> €</p>
                                <p><strong>Places disponibles:</strong> <?= htmlspecialchars($annonce['place']) ?></p>
                                <p class="description"><?= $annonce['description'];?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
</div>

<?php require_once "./include/footer.php"; ?>

