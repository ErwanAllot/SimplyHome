<!DOCTYPE html>
<?php
/* récupération de l'adresse de page passée dans URL*/
$path='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$current=basename($path);
?>

<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
    <title>Bienvenue chez Simply Home</title>
</head>

<body>


<section class="bienvenue">

<div class="essai">



<div class="telmail">

<!-- <div class="publication">
 <div class="settings">x</div>
 Coucou
</div> -->

    <button class="telMailBlanc" id="icontel"><i class="fa fa-phone" aria-hidden="true">  </i>
    <div id="numtel">
<p >02 57 87 71 85</p>
</button>

</div>

</div>

</div>


</section>

</body>