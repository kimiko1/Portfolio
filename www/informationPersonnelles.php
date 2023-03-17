<?php
require('../models/BDD.php');
use Model\BDD;

$bdd = BDD::instance();
$infos = $bdd->recupInfo();

?>
<html>

<head>
    <title>Information Personnelles</title>
    <?php require('navbar.php'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1
/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/infos.css">
</head>
<body>
<div class="container">
    <div class="title">
        <h1>Bonjour à toi!</h1>
    </div>
    <div class="message">
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>
</div>
</body>
</html>