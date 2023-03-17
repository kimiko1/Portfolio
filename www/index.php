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
    <title>Portfolio</title>
    <?php require('navbar.php'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/index.css">
</head>

<body>
<?php foreach ($infos_perso as $persos): ?>
    <h1>Bonjour et bienvenue sur le portfolio de <?php echo $persos["prenom"].' '.$persos["nom"]?>. J'ai actuellement <?php echo $persos['age'].' '?>ans et je suis en <?php echo $persos['activite']?>.</h1>
    <?php endforeach;?>
    <picture>
        <div class="image">
        <a href="informationPersonnelles.php"><img src="img/bastien.png"" alt="..."></a>
        </div>
</picture>
</body>

</html>