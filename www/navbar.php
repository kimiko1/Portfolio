<?php

// On récupère le nom du fichier php
$filename = basename($_SERVER['REQUEST_URI']);

$informationPesonnellesActive = '';
$projetsActive = '';
$connectionActive = '';

if (strpos($filename, 'informationPersonnelles') !== false) {
    $devoirActive = '';
    $connectionActive = '';
    $informationPesonnellesActive = 'active';
} else if (strpos($filename, 'utilisateur') !== false) {
    $informationPesonnellesActive = '';
    $connectionActive = '';
    $utilisateurActive = 'active';
} else if (strpos($filename, 'projets') !== false) {
    $informationPesonnellesActive = '';
    $connectionActive = '';
    $projetsActive = 'active';
} else if (strpos($filename, 'connection') !== false) {
    $informationPesonnellesActive = '';
    $projetsActive = '';
    $connectionActive = 'active';
}
?>
<link rel="stylesheet" href="../css/nav.css">
<a href="index.php"><img class="perso"src="img/2.png" alt></a>

<ul class="nav">
    <li class="nav-item2">
        <a class="nav-link <?php echo $informationPesonnellesActive ?>" href="informationPersonnelles.php">Informations Personnelles</a>
    </li>

    <li class="nav-item3">
        <a class="nav-link <?php echo $projetsActive ?>" href="#">Projets</a>
    </li>
    <li class="nav-item3">
        <a class="nav-link <?php echo $projetsActive ?>" href="cv.php">CV</a>
    </li>
    <li class="nav-item4">
        <a class="nav-link <?php echo $connectionActive ?>" href="login.php">Connection</a>
    </li>
</ul>