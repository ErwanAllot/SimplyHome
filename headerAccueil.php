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
    <link rel="stylesheet" href="style.css" />
    <title>Bienvenue chez Simply Home</title>
</head>

<!-- _________________Bandeau____________________________________-->

<body>
    <div class="contenaire">

        <header class="blocUn">

            <div class="premierBandeau">

                <p class="espace2">|</p>

                <div id="reseauxSociaux1">
                    <ul class="iconesReseauxSociaux1">
                        <li class="espace" class="iconeSociale1"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="espace" class="iconeSociale1"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="espace" class="iconeSociale1"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li class="espace2" class="iconeSociale1"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>

                <p class="espace2">|</p>

                <div class="espace">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <p class="espace2">02 57 87 71 85</p>

                <p class="espace2">|</p>


                <div class="espace">
                    <i class="far fa-sticky-note"></i>
                </div>

                <p class="espace2">Suivre mon projet</p>

                <p class="espace2">|</p>

            </div>







            <div class="maisonUn">
                <img src=images/image-bandeau.jpg alt="logo" />
            </div>




            <div class="bandeauM">

                <div class="logo">
                    <img src=images/simply-home-logo.png alt="logo" />
                </div>

                <div class="societe">
                    <h1>Simply Home <br> <small> Constructeur de vie </small> </h1>
                </div>

                <!-- <ul  class="menu">

                    <li><a href="accueil.php"> Accueil</a></li>
                    <li><a href="apropos.php"> A propos</a></li>
                    <li><a href="nosMaisons.php"> Nos Maisons</a></li>
                    <li><a href="contact.php"> Contact</a></li>
                </ul> -->


                <ul id="navigation" class="menu">
                    <li><a href="accueil.php"> Accueil</a></li>
                    <li><a href="apropos.php"> A propos</a></li>
                    <li><a href="nosMaisons.php"> Nos Maisons</a></li>
                    <li><a href="contact.php"> Contact</a></li>
                </ul>


                <!-- <ul id="navigation" class="menu">
                    <li class="<?php if ($nav_en_cours == 'accueil') {echo 'en-cours';} ?>"><a
                            href="accueil.php">Accueil</a></li>
                    <li class="<?php if ($nav_en_cours == 'apropos') {echo 'en-cours';} ?>"><a href="Apropos.php">A
                            propos</a></li>
                    <li class="<?php if ($nav_en_cours == 'NosMaisons') {echo 'en-cours';} ?>"><a
                            href="NosMaisons.php">Nos Maisons</a></li>
                    <li class="<?php if ($nav_en_cours == 'contact') {echo 'en-cours';} ?>"><a
                            href="Contact.php">Contact</a></li>
                </ul> -->


                <!-- <li><?php if ($nav_en_cours == 'apropos') {echo ' class="en-cours"';} ?><a href="apropos.php">A propos</a></li>
                    <li><?php if ($nav_en_cours == 'nosMaisons') {echo ' class="en-cours"';} ?><a href="nosMaisons.php">Nos Maisons</a></li>
                    <li><?php if ($nav_en_cours == 'contact') {echo ' class="en-cours"';} ?><a href="contact.php">Contact</a></li> -->





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
                    </div>
                </nav>

            </div>

        </header>