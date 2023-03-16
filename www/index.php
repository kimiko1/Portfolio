<?php
session_start();

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
    <?php require('navbar.php');?>
</head>
<body>
    <p>test</p>
</body>

</html>