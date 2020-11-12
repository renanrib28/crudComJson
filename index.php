<?php
include('css/start.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" id='navbarTopo'>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active"style="
    padding: 4px;
">
        <a class="nav-link" href="https://www.w3schools.com" target="iframe_a"><i class="fas fa-address-book"> Consulta</i></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-plus"> Cadastros</i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://www.w3schools.com" target="iframe_a">Categorias</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item"href="https://www.w3schools.com" target="iframe_a">Produtos</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="embed-responsive embed-responsive-21by9">
  <iframe class="embed-responsive-item" src="" name="iframe_a" allowfullscreen></iframe>
</div>
<script>
$(document).ready(function() {
        $(".nav-item").click(function(event) {
           $(".nav-item").removeClass('active');
           $(".dropdown-item").removeClass('active');
          $(this).addClass('active'); 
         }); 
        $(".dropdown-item").click(function(event) {
           $(".nav-item").removeClass('active');
           $(".dropdown-item").removeClass('active');
          $(this).addClass('active'); 
         }); 
    });
</script>
<?php

?>