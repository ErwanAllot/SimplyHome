<?php  $nav_en_cours = 'contact'; ?>

<?php include('header.php'); ?>


<!-- _________________Contacter Simply Home ____________________________________-->
<section class="contact">


    <div class="blocContact">
        <div class="titreContact">
            <strong>Bienvenue Chez Simply Home</strong>
        </div>

        <div class="blablaContact">
            <p>
                <br>
                Pour toute demande d'information ou de prise de rendez-vous, vous pouvez nous adressez votre demande
                en remplissant le formulaire de contact ci-dessous.
                <br>
                Le conseiller en habitat de votre secteur géographique, interlocuteur unique, vous proposera un
                accompagnement
                unique et personnalisé tout au long de la construction. Ce suivi personnalisé est garant de la
                réussite des projets.
        </div>
    </div>



    <div class="maisonViolette">
        <img src=images/imgcommencerprojet.jpg alt="maisonViolette" />
    </div>




    <div class="telmail">



        <button class="telMailBlanc" id="icontel"><i class="fa fa-phone" aria-hidden="true"> </i>
            <div id="numtel">
                <p>02 57 87 71 85</p>
        </button>


        <button type="submit" class="telMailBlanc" id="iconmail"><i class="fa fa-envelope"
                aria-hidden="true"></i></button>
    </div>


</section>



<section class="formulaire">

    <input type="search" class="identifiant" placeholder="Nom" id="search" name="search">

    <input type="search" class="identifiant" placeholder="Email" id="search" name="search">

    <input type="search" class="identifiant" placeholder="Téléphone" id="search" name="search">


    <p>Département</p>
    <div class="departement">
        <div class="espace">
            <label for="horns">16</label>
            <input type="checkbox" id="horns" name="horns">
        </div>

        <div>
            <label for="horns">85</label>
            <input type="checkbox" id="horns" name="horns">
        </div>
    </div>

    <p>Votre projet</p>
    <div class="projet">
        <div class="espace">
            <label for="horns">Maison</label>
            <input type="checkbox" id="horns" name="horns">
        </div>
        <div class="espace">
            <label for="horns">Maison+Terrain</label>
            <input type="checkbox" id="horns" name="horns">
        </div>
        <div>
            <label for="horns">Appartement</label>
            <input type="checkbox" id="horns" name="horns">
        </div>
    </div>

    <p>Votre message</p>
    <input type="search" class="message" placeholder="" id="search" name="search">

    <button type="submit" class="envoyer">Envoyer</i></button>


</section>

<!-- 
<button type="button" data-toggle="modal" data-target="#infos" class="btn btn-secondary">Commande</button>
<div class="modal" id="infos">
  <div class="modal-dialog">
    <div class="modal-content">
      Contenu de la fenêtre modale
    </div>
  </div>
</div>

<button type="button" data-toggle="modal" data-target="#infos" class="btn btn-primary">Informations</button>
<div class="modal" id="infos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Plus d'informations</h4>
      </div>
      <div class="modal-body">
        Le Tigre (Panthera tigris) est un mammifère carnivore de la famille des félidés...
      </div>
      <div class="modal-footer">
        <em>Informations sous réserve</em>
      </div>
    </div>
  </div>
</div>


<button type="button" data-toggle="modal" data-target="#infos" class="btn btn-primary">Informations</button>
<div class="modal" id="infos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Plus d'informations</h4>
        <button type="button" class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>            
      </div>
      <div class="modal-body">
        Le Tigre (Panthera tigris) est un mammifère carnivore de la famille des félidés...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div> -->


<!-- <div class="publication">
     <div class="settings">x</div>
     Coucou
</div> -->



<?php include('footer.php'); ?>