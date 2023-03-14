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
    <p>test</p>
</body>

</html>