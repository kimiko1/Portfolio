<?php

// Inclusion des models
require('../models/User.php');
require('../models/BDD.php');

use Model\BDD;

$bdd = BDD::instance();
$infos_perso = $bdd->recupInfoPerso();

?>
<!Doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/index.css">
    <meta name="google-site-verification" content="ONtL-Oo0ExhLJcIlc6PQh1h1AycQKH6LYOR84F9J3Dk" />
</head>

<body>
    <header>
        <?php require('navbar.php'); ?>
    </header>
    <div class="info_perso">
        <?php foreach ($infos_perso as $p): ?>
            <h1 style="font-size:4  vw;">Bonjour et bienvenue sur le portfolio de
                <?php echo $p['surname'] . ' ' . $p["name"] ?>. J'ai actuellement
                20 ans et je suis en
                <?php echo $p['activity'] ?>.
            </h1>
        <?php endforeach; ?>
    </div>
    <script src="https://kit.fontawesome.com/84f57e19ad.js" crossorigin="anonymous" async></script>
</body>

</html>