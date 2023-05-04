<?php

// Inclusion des models
require('../models/User.php');
require('../models/BDD.php');

use Model\BDD;

$bdd = BDD::instance();
$infos_perso = $bdd->recupInfo();
?>
<!Doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <?php require('navbar.php'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <meta name="google-site-verification" content="ONtL-Oo0ExhLJcIlc6PQh1h1AycQKH6LYOR84F9J3Dk" />
</head>

<body>
    <?php foreach ($infos_perso as $persos): ?>
        <h1 style="font-size:4  vw;">Bonjour et bienvenue sur le portfolio de
            <?php echo $persos["prenom"] . ' ' . $persos["nom"] ?>. J'ai actuellement
            <?php echo $persos['age'] . ' ' ?>ans et
            <?php echo $persos['activite'] ?>.
        </h1>
    <?php endforeach; ?>

    <script src="script.js"></script>
</body>

</html>