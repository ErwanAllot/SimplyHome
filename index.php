
<?php include('headerAccueil.php'); ?>


<!-- _________________Bienvenue Chez Simply Home____________________________________-->

<section class="bienvenue">


    <div class="blocBienvenue">
        <div class="titreBienvenue">
            <strong>Bienvenue Chez Simply Home</strong>
        </div>

        <div class="blablaBienvenue">
            <p>
                <br>
                La société <strong>Simply Home, </strong>
                constructeur de maisons neuves individuelles en <strong>Charente </strong>
                (16) et en <strong>Vendée </strong>
                (85), est née d'une ambition, accompagner ses clients dans la réussite d'un des projets
                les plus importants dans leur vie : la <strong>construction d'une maison neuve. </strong>
                <br>
                <br>
                <strong>Simply Home </strong> vous accompagne tout au long de votre projet de construction
                de maison individuelle, de la recherche de votre terrain jusqu'à la remise des clés.
        </div>
    </div>



    <div class="chantier">
        <img src=images/construction_maison_individuelle.jpg alt="chantier" />
    </div>




    <div class="telmail">



        <button class="telMailBlanc" id="icontel"><i class="fa fa-phone" aria-hidden="true"> </i>
            <div id="numtel">
                <p>02 57 87 71 85</p>
        </button>


        <button type="submit" class="telMailBlanc" id="iconmail"><i class="fa fa-envelope"
                aria-hidden="true"></i></button>
    </div>

    <!-- <div class="publication">
     <div class="settings">x</div>
     Coucou
</div> -->

    <!-- <div class="parent">
Comment afficher un div au survol d'un autre div ? (texte à afficher en permanence)
<div class="enfant">
Il suffit d'utiliser deux div imbriquées et le deuxième div s'affichera au survol du 
premier grâce à la feuille de style css !
</div>
</div> -->




</section>




<!-- _________________Nos Maisons____________________________________-->


<section class="nosMaisons">


    <h2 class="titreNosMaisons">Nos maisons</h2>



    <article class="avantGout">
        <img src=images/calypso_3_chambres.jpg alt="Calypso" />
        <p class="legende">Calypso <br> <br> Maison 3 chambres <br> 107m²</p>
    </article>

    <article class="avantGout">
        <img src=images/city_4_chambres.jpg alt="City" />
        <p class="legende">City <br> <br> Maison 2,3 ou 4 chambres <br> A partir de 68m²</p>
    </article>

    <article class="financement">
        <img src=images/imgfinancerprojet.jpg alt="financement" />
        <div class="dInfos">
            <p class="texteBlanc"> Comment financer mon projet ? </p>
            <p> <span class="texteFondBlanc"> +d'infos </span></p>
        </div>
    </article>

    <article class="avantGout">
        <img src=images/armenia_3_chambres.jpg alt="Armenia" />
        <p class="legende"> Armenia <br> <br> Maison 3 chambres+bureau <br> 104m²</p>
    </article>

    <article class="avantGout">
        <img src=images/bolzano_3_chambres.jpg alt="Bolzano" />
        <p class="legende">Bolzano <br> <br> Maison 3 chambres <br> 104m²</p>
    </article>

    <article class="avantGout">
        <img src=images/azure_3_chambres.jpg alt="Azure" />
        <p class="legende">Azure <br> <br> Maison 3 chambres <br> 97m²</p>
    </article>


</section>

<!-- <div class="enVoirPlus">
        <button type="submit">
            <p><span>En voir +</span></p>
        </button>
    </div> -->


<button type="submit" class="enVoirPlus">
    <li><a href="nosMaisons.php">En voir +</a></i>
</button>




<?php include('footer.php'); ?>