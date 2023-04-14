<link rel="stylesheet" href="../css/nav.css">

<nav class="navbar">
    <a href="index.php"><img class="perso" src="img/2.png" alt></a>
    <div class="nav-links">
        <ul>
            <li>
                <a href="informationPersonnelles.php">Informations Personnelles</a>
            </li>
            <li>
                <a href="#">Projets</a>
            </li>
            <li>
                <a href="cv.php">CV</a>
            </li>
            <li>
                <a href="login.php">Connection</a>
            </li>
        </ul>
    </div>
    <img src="img/test.png" class="mob-menu">
<body>
    <script>
        const mobMenu = document.querySelector("mob-menu")
        const navLinks = document.querySelector("nav-links")

        mobMenu.addEventListener('click',()=>{
            navLinks.toggle('mobile-menu')
        })
    </script>
</body>
</nav>