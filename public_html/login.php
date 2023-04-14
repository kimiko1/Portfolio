<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Se Connecter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <?php require('navbar.php'); ?>
</head>
<header>
</header>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="../validation/validate-db.php" method="POST">
                    <h2>login</h2>
                    <div class="inputbox">
                        <input type="text" name="username"required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <input type="email" name="email"required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <input type="password" name="password"required>
                        <label for="">Mot De Passe</label>
                    </div>
                    <button type="submit">Log in</button>
                    <div class="register">
                        <p>Pas de compte <a href="register.php">Créer un compte</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>