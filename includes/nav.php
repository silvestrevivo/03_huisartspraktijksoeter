<nav class="#4dd0e1 cyan lighten-1">
  <ul id="slide-out" class="side-nav fixed #80deea cyan lighten-3">
    <li class="adres">
      <div class="adresbinnen z-depth-1 hoverable ">
        <address>
          <h6 style="font-weight:200;margin-left: 5px">Medisch Centrum Oud Voorburg</h6>
          <h6 style="margin-left: 5px;font-weight:200;">Raadhuisstraat 49</h6>
          <h6 style="margin-left: 5px;font-weight:200;">2271 DG Voorburg</h6>
          <a href="tel:+31703863443" class="fa fa-phone" style="font-weight:300;"><i class="tiny material-icons">phone</i> 070-3863443 </a>
        </address>
      </div>
    </li>
    <li<?php echo ($current_page == 'index') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/" title="Praktijk Info"><i class="tiny material-icons">games</i> Praktijk Info</a>
    </li>
    <li<?php echo ($current_page == 'medewerkers') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/medewerkers" title="Medewerkers"><i class="tiny material-icons">supervisor_account</i> Medewerkers</a>
    </li>
    <li<?php echo ($current_page == 'route') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/route" title="Route"><i class="tiny material-icons">polymer</i> Route</a>
    </li>
    <li<?php echo ($current_page == 'inschrijven') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/inschrijven" title="Inschrijven Patiënt"><i class="tiny material-icons">phone</i> Inschrijven Patiënt</a>
    </li>
    <li<?php echo ($current_page == 'thuisarts') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/thuisarts" title="thuisarts.nl"><i class="tiny material-icons">location_on</i> thuisarts.nl</a>
    </li>
    <li<?php echo ($current_page == 'geschiedenis') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/geschiedenis" title="Geschiedenis"><i class="tiny material-icons">perm_identity</i> Geschiedenis</a>
    </li>
    <li<?php echo ($current_page == 'stempels') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/stempels" title="Stempels"><i class="tiny material-icons">android</i> Stempels</a>
    </li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</nav>
