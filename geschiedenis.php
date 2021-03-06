<?php
    $current_page = 'geschiedenis';
 ?>

 <!doctype html>
 <html lang="nl" prefix="og: http://ogp.me/ns#">
     <head>
        <?php include 'includes/head.php'; ?>

        <?php //TODO@silvestre: description is to short ?>
        <meta name="description" content="Over de geschiedenis van onze huisartsenpraktijk.">
        <meta keywords="huisartsenpraktijk voorburg, huisartspraktijk voorburg, huisartsenpraktijk voorburg centrum, huisartspraktijk voorburg centrum, huisartsenpraktijk voorburg soeter, huisartspraktijk voorburg soeter, huisartsenpraktijk voorburg centrum soeter, huisartspraktijk voorburg centrum, peter soeter huisart, roelof soeter huisart, general practitioner voorburg, general practitioner voorburg center, gp voorburg, gp voorburg center, general practitioner voorburg expats, maatschap soeter hooijkaas">

        <meta property="og:title" content="Geschiedenis - Huisartspraktijk Soeter" />
        <meta property="og:url" content="http://huisartspraktijksoeter.nl/geschiedenis" />

        <title>Geschiedenis - Huisartspraktijk Soeter</title>

        <?php include 'includes/styles.php' ?>
    </head>

    <body>
        <?php include 'includes/nav.php'; ?>
      <main>
        <div class="container" style="display: none;">
          <h4 class="#4dd0e1 cyan-text lighten-1">Geschiedenis</h4>
          <div class="divider"></div>
          <div class="row">
            <div class="col s12 m6 l6">
              <p class="geschiedenis">Na zijn studie geneeskunde aan de Leidsche Universiteit te hebben afgerond, vestigde dokter W.J. Soeter zich in 1952 als huisarts aan de Laan van Oostenburg te Voorburg. Het was een klassieke huisartspraktijk aan huis waarbij de doktersvrouw een belangrijke rol speelde in de praktijkvoering. Zoon P.A. Soeter besloot eveneens in Leiden geneeskunde te gaan studeren en nam in 1984 de praktijk van vader over.</p>
              <p class="geschiedenis">Onder leiding van dokter P.A. Soeter werd de praktijk sterk gemoderniseerd. Er werd geautomatiseerd, de praktijk verhuisde naar de Raadhuisstraat en er werd praktijkondersteuning in dienst genomen. Zodoende werd de praktijk geschikt gemaakt om aan de eisen van moderne huisartszorg te kunnen voldoen.<br><br>
              Per 1 juni 2015 is (klein-) zoon R.P. Soeter  (uiteraard na studie in Leiden) als 3de generatie huisarts in de praktijk komen werken. Vader en zoon werkten 5 jaar lang nauw samen.</p>
              <p class="geschiedenis">Op 1 januari 2020 ging dokter P.A. Soeter met pensioen en droeg met trots het praktijkhouderschap over aan dokter R.P. (Roelof) Soeter. Het is niet ondenkbaar dat onder zijn leiding de praktijk het eeuwfeest zal vieren.</p>
            </div>
            <div class="col s12 m6 l6">
              <div class="row">
                <div class="col s6 m6 l6" style="margin-top:20px;">
                <img class="responsive-img z-depth-1 hoverable" src="/assets/img/Huisartspraktijk03.jpg" alt="HuisartpraktijkSoeter">
                </div>
                <div class="col s6 m6 l6" style="margin-top:20px;">
                  <img class="responsive-img z-depth-1 hoverable" src="/assets/img/Huisartspraktijk02.jpg" alt="HuisartpraktijkSoeter">
                </div>
              </div>
                <div class="s12 m12 l12">
                  <img class="responsive-img z-depth-1 hoverable" src="/assets/img/Huisartspraktijk01.jpg" alt="HuisartpraktijkSoeter">
                  <img class="responsive-img z-depth-2 foto1" src="/assets/img/huisartsgebouwsoeter.jpg" alt="HuisartpraktijkSoeter" style="margin-top:20px;">
                </div>
            </div>
          </div>
          <div class="row foto2">
            <div class="col s12 m12 l12">
              <img class="responsive-img z-depth-2" src="/assets/img/huisartsgebouwsoeter.jpg" alt="HuisartpraktijkSoeter">
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
                  // DRY
                  $(".container").fadeIn(1500);
              });
        </script>

    </body>
  </html>
