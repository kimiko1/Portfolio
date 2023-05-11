<?php
require('../models/BDD.php');
use Model\BDD;

$bdd = BDD::instance();
$infos = $bdd->recupInfoPerso();
$age = $bdd->getAge();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Information Personnelles</title>
    <?php require('navbar.php'); ?>
    <link rel="stylesheet" href="css/infos.css">
</head>

<body>
    <?php foreach ($infos as $p): ?>
        <div class="container">
            <div class="title">
                <h1>Nom et Prénom :</h1>
            </div>
            <div class="message">
                <p>Je m'appel
                    <?php echo $p['prénom'] . " " . $p['nom'] ?>.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h1>âge et date de naissance :</h1>
            </div>
            <div class="message">
                <p>J'ai actuellement
                    <?php echo $age ?> ans et je suis née le
                    <?php echo $p['date de naissance'] ?>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h1>Adresse postal et adresse mail :</h1>
            </div>
            <div class="message">
                <p>J'habite au
                    <?php echo $p['adresse postal'] ?> et mon email est :
                    <?php echo $p['adresse mail'] ?>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h1>Ce que je fais actuellement :</h1>
            </div>
            <div class="message">
                <p>Je suis en
                    <?php echo $p['activite'] ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>