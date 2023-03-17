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
<div class="jumbotron">
  <h1 class="display-3">Bonjour à toi!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-2">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
</div>
</body>
</html>