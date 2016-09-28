<nav class="#4dd0e1 cyan lighten-1" itemscope itemtype="http://schema.org/SiteNavigationElement">
  <a class="waves-effect cyan darken-1 btn modal-trigger" href="#modalvideo" id="video">Video</a>
  <ul id="slide-out" class="side-nav fixed #80deea cyan lighten-3">
    <li class="adres">
      <div class="adresbinnen z-depth-1 hoverable ">
        <address itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
          <h6 itemprop="name" style="font-weight:200;margin-left: 5px">Medisch Centrum Oud Voorburg</h6>
          <h6 itemprop="streetAddress" style="margin-left: 5px;font-weight:200;">Raadhuisstraat 49</h6>
          <h6 style="margin-left: 5px;font-weight:200;"><span itemprop="postalCode">2271 DG</span> <span itemprop="addressLocality">Voorburg</span></h6>
          <a href="tel:+31703863443" class="fa fa-phone" style="font-weight:300;" itemscope itemtype="http://schema.org/ContactPoint">
              <i class="tiny material-icons">phone</i> <span itemprop="telephone">070-3863443</span>
          </a>
        </address>
      </div>
    </li>
    <li<?php echo ($current_page == 'index') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/" title="Praktijk Info" itemprop="url">
            <i class="tiny material-icons">games</i>
            <span itemprop="name">Praktijk Info</span>
        </a>
    </li>
    <li<?php echo ($current_page == 'medewerkers') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/medewerkers" title="Medewerkers" itemprop="url">
            <i class="tiny material-icons">supervisor_account</i>
            <span itemprop="name">Medewerkers</span>
        </a>
    </li>
    <li<?php echo ($current_page == 'route') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/route" title="Route" itemprop="url">
            <i class="tiny material-icons">polymer</i>
            <span itemprop="name">Route</span>
        </a>
    </li>
    <li<?php echo ($current_page == 'inschrijven') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/inschrijven" title="Inschrijven Patiënt" itemprop="url">
            <i class="tiny material-icons">phone</i>
            <span itemprop="name">Inschrijven Patiënt</span>
        </a>
    </li>
    <li<?php echo ($current_page == 'thuisarts') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/thuisarts" title="thuisarts.nl" itemprop="url">
            <i class="tiny material-icons">location_on</i>
            <span itemprop="name">thuisarts.nl</span>
        </a>
    </li>
    <li<?php echo ($current_page == 'geschiedenis') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/geschiedenis" title="Geschiedenis" itemprop="url">
            <i class="tiny material-icons">perm_identity</i>
            <span itemprop="name">Geschiedenis</span>
        </a>
    </li>
    <li<?php echo ($current_page == 'stempels') ? ' class="active"' : ''; ?>>
        <a class="waves-effect waves-teal" href="/stempels" title="Stempels" itemprop="url">
            <i class="tiny material-icons">android</i>
            <span itemprop="name">Stempels</span>
        </a>
    </li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</nav>

<div id="modalvideo" class="modal">
  <div class="modal-content">
    <video class="responsive-video" controls>
      <source src="/assets/video/Ervaringen met het LSP - de huisarts.mp4" type="video/mp4">
    </video>
  </div>
</div>
