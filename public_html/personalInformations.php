<?php
require('../models/BDD.php');

use Model\BDD;

$bdd   = BDD::instance();
$infos = $bdd->recupInfoPerso();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Personnelles</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/infos.css">
</head>

<body>
    <?php require('navbar.php'); ?>
    <?php foreach ($infos as $p) : ?>
        <div class="container">
            <div class="title">
                <h1>Nom et Prénom :</h1>
            </div>
            <div class="message">
                <p>Je m'appel
                    <?php echo $p['name'] . " " . $p['surname'] ?>.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h1>Âge et date de naissance :</h1>
            </div>
            <div class="message">
                <p>J'ai actuellement 20 ans, je suis née le
                    <?php echo $p['date_of_birth'] ?>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h1>Adresse postal et adresse mail :</h1>
            </div>
            <div class="message">
                <p>J'habite au
                    <?php echo $p['address'] ?>
                </p>
                <p>Mon email :
                    <?php echo $p['email'] ?>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h1>Ce que je fais actuellement :</h1>
            </div>
            <div class="message">
                <p>Actuellement je suis en
                    <?php echo $p['activity'] ?>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="title">
                <h1>Ce que j'aime faire :</h1>
            </div>
            <div class="message">
                <p>
                    <?php echo $p['activities_outside_of_studies'] ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</body>

</html>