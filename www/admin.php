<?php
session_start();

// Inclusion des models
require('../models/User.php');
require('../models/BDD.php');

use Model\BDD;

$user = BDD::affiche()
?>
<html>

<body>
    <?php foreach ($user as $p): ?>
        <h2>
            <?php echo $p->getEmail(); ?>
        </h2>
        <br>
        <h2>
            <?php echo $p->getUsername(); ?>
        </h2>
        <br>
        <h2>
            <?php echo $p->getRole(); ?>
        </h2>
        <br>
        <h2>
            <?php echo $p->getId(); ?>
        </h2>
        <br>
    <?php endforeach ?>
</body>

</html>