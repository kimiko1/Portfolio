<?php
require('../models/BDD.php');
use Model\BDD;

$bdd = BDD::instance();
$infos = $bdd->recupInfo();

?>
<!DOCTYPE html>
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
    <?php foreach($infos as $p):?>
<div class="container">
    <div class="title">
        <h1>Nom et Prénom :</h1>
    </div>
    <div class="message">
        <p>Je m'appel <?php echo $p['nom']. " " .$p['prenom']?>.</p>
    </div>
</div>
<div class="container">
    <div class="title">
        <h1>âge et date de naissance :</h1>
    </div>
    <div class="message">
        <p>J'ai actuellement <?php echo $p['age']?> ans et je suis née le <?php echo $p['date_de_naissance']?></p>
    </div>
</div>
<div class="container">
    <div class="title">
        <h1>Adresse postal et adresse mail :</h1>
    </div>
    <div class="message">
        <p>J'habite au <?php echo $p['adresses']?> et mon email est : <?php echo $p['email']?></p>
    </div>
</div>
<div class="container">
    <div class="title">
        <h1>Ce que je fais actuellement :</h1>
    </div>
    <div class="message">
        <p><?php echo $p['activite']?></p>
    </div>
</div>
<?php endforeach;?>
</body>
</html>