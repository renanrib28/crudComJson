<?php
include('css/start.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id='navbarTopo'>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.w3schools.com" target="iframe_a">Consulta <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cadastros
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://www.w3schools.com" target="iframe_a">Action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item"href="https://www.w3schools.com" target="iframe_a">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="embed-responsive embed-responsive-21by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" name="iframe_a" allowfullscreen></iframe>
</div>
<script>
$( '#navbarSupportedContent .navbar-nav a' ).on( 'click', function () {
	$( '#navbarSupportedContent .navbar-nav' ).find( 'nav-item active' ).removeClass( 'active' );
	$( this ).parent( 'nav-item' ).addClass( 'active' );
});</script>
<?php

?>