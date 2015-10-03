<?php
    $current_page = 'thuisarts';
 ?>

<!doctype html>
<html lang="nl" prefix="og: http://ogp.me/ns#">
    <head>
        <?php include 'includes/head.php'; ?>

        <meta name="description" content="Voor betrouwbare informatie over uw gezondheid kunt u terecht op www.thuisarts.nl">
        <meta keywords="huisartsenpraktijk voorburg, huisartspraktijk voorburg, huisartsenpraktijk voorburg centrum, huisartspraktijk voorburg centrum, huisartsenpraktijk voorburg soeter, huisartspraktijk voorburg soeter, huisartsenpraktijk voorburg centrum soeter, huisartspraktijk voorburg centrum, peter soeter huisart, roelof soeter huisart, general practitioner voorburg, general practitioner voorburg center, gp voorburg, gp voorburg center, general practitioner voorburg expats, maatschap soeter hooijkaas">

        <meta property="og:title" content="Thuisarts - Huisartspraktijk Soeter" />
        <meta property="og:url" content="http://huisartspraktijksoeter.nl/thuisarts" />

        <title>Thuisarts - Huisartspraktijk Soeter</title>

        <?php include 'includes/styles.php' ?>
    </head>

    <body>
        <?php include 'includes/nav.php'; ?>
      <main>
        <div class="container" style="display: none;">
          <h4 class="#4dd0e1 cyan-text lighten-1">thuisarts.nl</h4>
          <div class="divider"></div>
          <div class="row">
            <div class="col s12 m12 l12">
              <p>Voor betrouwbare informatie over uw gezondheid kunt u terecht op <a href="http://www.thuisarts.nl" target="_blank" style="color:#4dd0e1;">thuisarts.nl</a>. Mocht u toch nog vragen hebben, neemt u dan gerust telefonisch contact op met de assistente.</p>
              <iframe src="http://www.thuisarts.nl" width="100%" height="400px"></iframe>
            </div>
          </div>
        </div>
      </main>

        <?php
            include 'includes/footer.php';
            include 'includes/scripts.php';
            include 'includes/tracking_code.php';
         ?>

        <script type="text/javascript">
            $(document).ready(function(){
                //   DRY
                  $(".container").fadeIn(1500);
              });
        </script>

    </body>
  </html>
