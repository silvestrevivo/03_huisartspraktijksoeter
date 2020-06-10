<?php
    $current_page = 'medewerkers';
 ?>

<!doctype html>
<html lang="nl" prefix="og: http://ogp.me/ns#">
    <head>
        <?php include 'includes/head.php'; ?>

        <?php //TODO@silvestre: description is to short ?>
        <meta name="description" content="Over huisartspraktijkmedewerkers">
        <meta keywords="huisartsenpraktijk voorburg, huisartspraktijk voorburg, huisartsenpraktijk voorburg centrum, huisartspraktijk voorburg centrum, huisartsenpraktijk voorburg soeter, huisartspraktijk voorburg soeter, huisartsenpraktijk voorburg centrum soeter, huisartspraktijk voorburg centrum, peter soeter huisart, roelof soeter huisart, general practitioner voorburg, general practitioner voorburg center, gp voorburg, gp voorburg center, general practitioner voorburg expats, maatschap soeter hooijkaas">

        <meta name="dc.description" content="Medewerkers - Huisartspraktijk Soeter">

        <meta property="og:title" content="Medewerkers - Huisartspraktijk Soeter">
        <meta property="og:url" content="http://huisartspraktijksoeter.nl/medewerkers">

        <title>Medewerkers - Huisartspraktijk Soeter</title>

        <?php include 'includes/styles.php' ?>
    </head>

    <body>
        <?php include 'includes/nav.php'; ?>
      <main>
        <div class="container" style="display: none;">
          <h4 class="#4dd0e1 cyan-text lighten-1">Medewerkers</h4>
          <div class="divider"></div>
          <div class="row" style="margin-top:20px;">
            <div class="grid-example col s12 m4 l4">
              <img class="responsive-img circle z-depth-2" src="/assets/img/RoelofSoeter.jpg" alt="Roelof Soeter">
              <h6 class="center-align">R.P. Soeter | huisarts<br> <em>(ma, di, wo, do, vrij)</em></h6>
            </div>
            <div class="grid-example col s12 m4 l4">
              <img class="responsive-img circle z-depth-2" src="/assets/img/NienkedeJong.jpg" alt="Nienke de Jong">
              <h6 class="center-align">N. de Jong | huisarts<br> <em>(ma, wo, do)</em></h6>
            </div>
            <div class="grid-example col s12 m4 l4">
              <img class="responsive-img circle z-depth-2" src="/assets/img/PeterSoeter.jpg" alt="Peter Soeter">
              <h6 class="center-align">P.A. Soeter <br><em>(inval)</em></h6>
            </div>
          </div>
          <div class="row" style="margin-top:20px;">
            <div class="grid-example col s12 m4 l4">
              <img class="responsive-img circle z-depth-2" src="/assets/img/AstridVrolijk.jpg" alt="Astrid Vrolijk">
              <h6 class="center-align">Astrid Vrolijk <br> eerste assistente
              <!-- <br> <em>(wo, vrij)</em> -->
              </h6>
            </div>

            <div class="grid-example col s12 m4 l4">
              <img class="responsive-img circle z-depth-2" src="/assets/img/MarietteVerhoef.jpg" alt="Mariette Verhoef">
              <h6 class="center-align">Mariette Verhoef <br> doktersassistente
              <!-- <br> <em>(ma, di, do)</em> -->
              </h6>
            </div>

            <div class="grid-example col s12 m4 l4">
              <img class="responsive-img circle z-depth-2" src="/assets/img/GaudiadeLeede.jpg" alt="Gaudia de Leede">
              <h6 class="center-align" style="line-height: 130%">Gaudia de Leede <br><a class="modal-trigger"href="#modal1" style="color:#4dd0e1;">praktijkverpleegkundige</a><br><em>(wo)</em>
            </div>
          </div>
          <div class="row" style="margin-top:20px;">
            <div class="grid-example offset-l4 offset-m4 col s12 m4 l4 offset-l4 offset-m4">
              <img class="responsive-img circle z-depth-2" src="/assets/img/MarijkevanderBurg.jpg" alt="Marijke van der Burg">
              <h6 class="center-align" style="line-height: 130%">Marijke van der Burg <br><a class="modal-trigger" href="#modal2" style="color:#4dd0e1;">praktijkondersteuner geestelijke gezondheidszorg</a> <br><em>(ma)</em></h6>
            </div>

          </div>
        </div>
      </main>

      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <H5>Praktijkverpleegkundige</H5>
          <p>De praktijkverpleegkundige is gespecialiseerd in begeleiding en behandeling van:<br><br>
          -patiënten die lijden aan suikerziekte (diabetes mellitus)<br><br>
          -patiënten die lijden aan chronische longaandoeningen (astma en COPD)<br><br>
          -patiënten met een verhoogd risico op hart- en vaatziekten (CVRM)<br><br></p>
          <p>Verder ondersteunt de praktijkverpleegkundige de huisarts met het afnemen van:<br><br>
          -longfunctieonderzoek (spirometrie)<br><br>
          -gehoortesten (audiometrie)<br><br>
          -onderzoek van de bloedvaten (enkel-arm index)<br><br>
          -dementie screening<br><br>
          -uitstrijkjes voor het bevolkingsonderzoek naar baarmoederhalskanker<br><br></p>
          <p>De praktijkverpleegkundige is opgeleid en bevoegd om zelf ziekten te diagnosticeren en te behandelen. Ook mag zij bepaalde medicatie voorschrijven. Het spreekuur van de praktijkverpleegkundige wordt altijd nabesproken met een van de huisartsen.<br><br>Onderzoek en behandeling door de praktijkverpleegkundige wordt vergoed door uw zorgverzekeraar en valt buiten het eigen risico.</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
        </div>
      </div>

      <div id="modal2" class="modal modal-fixed-footer">
        <div class="modal-content">
          <H5>Praktijkondersteuner geestelijke gezondheidszorg</H5>
          <p>De praktijkondersteuner geestelijke gezondheidzorg (POH-GGZ) is gespecialiseerd in begeleiding en behandeling van patiënten met milde psychische klachten. Meestal zal een aantal gesprekken met de POH-GGZ voldoende zijn om de klachten de baas te kunnen. Soms blijkt verwijzing naar een andere zorgverlener toch noodzakelijk. De POH-GGZ zal u dan in overleg met een van de huisartsen doorverwijzen.<br><br>
          De huisarts beoordeelt altijd of uw klachten geschikt zijn voor behandeling bij de POH-GGZ of dat u moet worden doorverwezen naar bijvoorbeeld een psycholoog of psychiater. Het spreekuur van de POH-GGZ wordt altijd nabesproken met een van de huisartsen.<br><br>
          Behandeling en begeleiding door de POH-GGZ wordt vergoed door uw zorgverzekeraar en valt buiten het eigen risico.</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
        </div>
      </div>

        <?php
            include 'includes/footer.php';
            include 'includes/scripts.php';
            include 'includes/tracking_code.php';
         ?>

        <?php //TODO ?>
        <script type="text/javascript">
            $(document).ready(function(){
                  // DRY
                  $(".container").fadeIn(1500);
              });
        </script>

    </body>
  </html>
