<?php

// Inclusion des models
require('../models/BDD.php');

use Model\BDD;

$bdd = BDD::instance();
$infos_perso = $bdd->recupInfoPerso();

?>
<!Doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/index.css">
    <meta name="google-site-verification" content="ONtL-Oo0ExhLJcIlc6PQh1h1AycQKH6LYOR84F9J3Dk">
    <link rel="stylesheet" href="css/nav.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Flex:opsz,wght@8..144,100;8..144,300;8..144,500;8..144,700;8..144,900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <?php require('navbar.php'); ?>
    </header>
    <div class="info_perso">
        <?php foreach ($infos_perso as $p): ?>
            <h1>Bonjour et bienvenue sur le portfolio de
                <?php echo $p['surname'] . ' ' . $p["name"] ?>. J'ai actuellement
                20 ans et je suis en
                <?php echo $p['activity'] ?>.
            </h1>
        <?php endforeach; ?>
    </div>
    <script src="https://kit.fontawesome.com/84f57e19ad.js" crossorigin="anonymous" async></script>
    <script src="JavaScript/script.js"></script>
</body>

</html>