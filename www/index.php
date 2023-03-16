<?php

// Inclusion des models
require('../models/User.php');
require('../models/BDD.php');

use Model\BDD;

$user = BDD::affiche()

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
    <h2>Bonjour et bienvenue sur <br> le portfolio de Bastien Raoult</h2>
</body>

</html>