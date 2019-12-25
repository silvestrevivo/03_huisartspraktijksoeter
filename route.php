<?php
    $current_page = 'route';
 ?>

<!doctype html>
<html lang="nl" prefix="og: http://ogp.me/ns#">
    <head>
        <?php include 'includes/head.php'; ?>

        <?php //TODO@silvestre: description is to short ?>
        <meta name="description" content="Route en verbinding naar de huisartspraktijk">
        <meta keywords="huisartsenpraktijk voorburg, huisartspraktijk voorburg, huisartsenpraktijk voorburg centrum, huisartspraktijk voorburg centrum, huisartsenpraktijk voorburg soeter, huisartspraktijk voorburg soeter, huisartsenpraktijk voorburg centrum soeter, huisartspraktijk voorburg centrum, peter soeter huisart, roelof soeter huisart, general practitioner voorburg, general practitioner voorburg center, gp voorburg, gp voorburg center, general practitioner voorburg expats, maatschap soeter hooijkaas">

        <meta name="dc.description" content="Route - Huisartspraktijk Soeter">

        <meta property="og:title" content="Route - Huisartspraktijk Soeter">
        <meta property="og:url" content="http://huisartspraktijksoeter.nl/route">

        <title>Route - Huisartspraktijk Soeter</title>

        <?php include 'includes/styles.php' ?>
    </head>

    <body>
        <?php include 'includes/nav.php'; ?>
      <main>
        <div class="container" style="display: none;">
          <h4 class="#4dd0e1 cyan-text lighten-1">Route</h4>
          <div class="divider"></div>
          <div class="row" style="margin-top:20px;">
            <div class="col s12 m5 l5" style="margin-bottom:20px;">
              <h5>Openbaar vervoer</h5>
              <p><i class="tiny material-icons">directions_car</i> Bereikbaar per auto</p>
              <p><i class="tiny material-icons">directions_bus</i> Bus - Nummer 23, 45 en 46</p>
              <a class="#4dd0e1 cyan lighten-1 waves-effect waves-light btn" href="/uploads/route.pdf">Route</a>
            </div>
            <div class="col s12 m7 l7">
              <iframe class="z-depth-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.4701304137783!2d4.364581513862314!3d52.06735642709386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b64b459c01ed%3A0x74fd1a754bb17cf1!2sMaatschap%20Soeter%20Hooijkaas!5e0!3m2!1snl!2suk!4v1577139633342!5m2!1snl!2suk" width="100%" height="450" frameborder="0" style="border:0;margin-bottom:40px; margin-top: 15px;"></iframe>
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
                  // DRY@diego
                  $(".container").fadeIn(1500);
              });
        </script>

    </body>
  </html>
