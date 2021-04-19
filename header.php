<?php
/* récupération de l'adresse de page passée dans URL*/
$path='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$current=basename($path);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--<link rel="stylesheet" href="style.css" />-->
    <link rel="stylesheet" href="App.css">
    <title>Bienvenue chez Simply Home</title>
</head>

<!-- _________________Bandeau____________________________________-->

<body>
    <div class="contenaire ">
        <header class="bandeau">

            <div class="logo">
                <img src=images/simply-home-logo.png alt="logo" />
            </div>

            <div class="societe">
                <h1>Simply Home <br> <small> Constructeur de vie </small> </h1>
            </div>

            <ul class="menu">

                <li><a href="index.php" class="en-cours"> Accueil</a></li>
                <li><a href="Apropos.php"> A propos</a></li>
                <li><a href="NosMaisons.php"> Nos Maisons</a></li>
                <li><a href="Contact.php"> Contact</a></li>
            </ul>

            <nav role="navigation">
                <div id="menuToggle">
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>


                    <ul id="menu">
                     
                <li><a href="accueil.php"> Accueil</a></li>
                <li><a href="apropos.php"> A propos</a></li>
                <li><a href="nosMaisons.php"> Nos Maisons</a></li>
                <li><a href="contact.php"> Contact</a></li>
                    </ul>

                    <!-- <?php echo $nav_en_cours ?>
                    <ul id="navigation" class="menu">
                        <li class="<?php if ($nav_en_cours == 'accueil') {echo 'en-cours';} ?>"><a
                                href="Accueil.php">Accueil</a></li>
                        <li class="<?php if ($nav_en_cours == 'apropos') {echo 'en-cours';} ?>"><a href="Apropos.php">A
                                propos</a></li>
                        <li class="<?php if ($nav_en_cours == 'nosmaisons') {echo 'en-cours';} ?>"><a
                                href="NosMaisons.php">Nos Maisons</a></li>
                        <li class="<?php if ($nav_en_cours == 'contact') {echo 'en-cours';} ?>"><a
                                href="Contact.php">Contact</a></li>
                    </ul> -->


                </div>
            </nav>


        </header>