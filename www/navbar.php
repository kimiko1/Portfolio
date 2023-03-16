<?php

// On récupère le nom du fichier php
$filename = basename($_SERVER['REQUEST_URI']);

$indexActive = 'active'; // Par défaut on selectionne l'index
$informationPesonnellesActive = '';
$projetsActive = '';
$connectionActive = '';

if (strpos($filename, 'informationPersonnelles') !== false) {
    $indexActive = '';
    $devoirActive = '';
    $connectionActive = '';
    $informationPesonnellesActive = 'active';
} else if (strpos($filename, 'utilisateur') !== false) {
    $indexActive = '';
    $informationPesonnellesActive = '';
    $connectionActive = '';
    $utilisateurActive = 'active';
}else if (strpos($filename, 'projets') !== false) {
    $indexActive = '';
    $informationPesonnellesActive = '';
    $connectionActive = '';
    $projetsActive = 'active';
}else if (strpos($filename, 'connection') !== false) {
    $indexActive = '';
    $informationPesonnellesActive = '';
    $projetsActive = '';
    $connectionActive = 'active';
}
?>
<ul class="nav nav-pills justify-content-center">
    <li class="nav-item">
        <a class="nav-link <?php echo $indexActive ?>" href="#">Accueil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo $informationPesonnellesActive ?>" href="#">Information Personnelles</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo $projetsActive ?>" href="#">Projets</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo $connectionActive ?>" href="#">Connection</a>
    </li>
</ul>
<hr>