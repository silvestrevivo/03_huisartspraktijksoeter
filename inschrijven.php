<?php
    $current_page = 'inschrijven';
 ?>

<!doctype html>
<html lang="nl" prefix="og: http://ogp.me/ns#">
    <head>
        <?php include 'includes/head.php'; ?>

        <meta name="description" content="De huisarts zal u verdere instructies geven over de inschrijving">
        <meta keywords="huisartsenpraktijk voorburg, huisartspraktijk voorburg, huisartsenpraktijk voorburg centrum, huisartspraktijk voorburg centrum, huisartsenpraktijk voorburg soeter, huisartspraktijk voorburg soeter, huisartsenpraktijk voorburg centrum soeter, huisartspraktijk voorburg centrum, peter soeter huisart, roelof soeter huisart, general practitioner voorburg, general practitioner voorburg center, gp voorburg, gp voorburg center, general practitioner voorburg expats, maatschap soeter hooijkaas">

        <meta name="dc.description" content="Inschrijven - Huisartspraktijk Soeter">

        <meta property="og:title" content="Inschrijven - Huisartspraktijk Soeter">
        <meta property="og:url" content="http://huisartspraktijksoeter.nl/inschrijven">

        <title>Inschrijven - Huisartspraktijk Soeter</title>

        <?php include 'includes/styles.php' ?>
    </head>

    <body>
        <?php include 'includes/nav.php'; ?>
      <main>
        <div class="container" style="display: none;">
          <h4 class="#4dd0e1 cyan-text lighten-1">Inschrijven Nieuwe Patiënt</h4>
          <div class="divider"></div>
          <div class="row">
            <!-- <div class="col s12 m6 l6">
              <p style="text-align:justify;">Om u als nieuwe patiënt in de praktijk aan te melden belt u tijdens het telefonisch spreekuur met <a href="tel:+31703863443" class="fa fa-phone" style="font-weight:300;color: #0097a7;"><i class="tiny material-icons">phone</i> 070-3863443 </a> <strong>(dagelijks tussen 11:45-12:15)</strong>. De huisarts zal u verdere instructies geven over de inschrijving. <br><br>
              Het is gebruikelijk dat er na inschrijving een kennismakingsgesprek plaats vindt.</p>
            </div> -->
            <div class="col s12 m6 l6">
              <p style="text-align:justify;">Helaas is huisartspraktijk Soeter voorlopig gesloten voor nieuwe inschrijvingen. Nieuwgeboren gezinsleden kunnen uiteraard gewoon worden ingeschreven.</p>
            </div>
            <div class="col s12 m6 l6">
              <img class="responsive-img z-depth-2" src="/assets/img/Inschrijven.jpg" alt="Inschrijven" style="margin-top:20px;">
            </div>
          </div>
        </div>
      </main>

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
