<?php
include('../assets/functions/connection.php');
$maxItensPerPage=5;
$pagina_num= isset($_GET['pagina']) && !empty($_GET['pagina']) ? intval($_GET['pagina']) : 0;
$pagina= isset($_GET['pagina']) && !empty($_GET['pagina']) ? intval($_GET['pagina'])*$maxItensPerPage : 0;

$limitSelect=$pagina.','.$maxItensPerPage;

 $sql="select * from (SELECT t.*, 
                               @rownum := @rownum + 1 as idind
                          FROM produtos t, 
                               (SELECT @rownum := 0) r) as categ";
$result=mysqli_query($conn,$sql);
$dados=mysqli_fetch_array($result);
$num_total=mysqli_num_rows($result);

$num_paginas=ceil($num_total/$maxItensPerPage);

?>

<!--
  DESENVOLVIDO POR RENAN RIBEIRO  E BASE DE ALTEAÇÃO SOBRE CREATIVE TIM CONFOME DESCRITO ABAIXO (PROJETO OPEN SOURCE)
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="apple-touch-icon" sizes="76x76" href="https://scontent.fsdu25-1.fna.fbcdn.net/v/t1.0-9/83887005_1267809216746693_1795221696081297408_n.png?_nc_cat=111&ccb=2&_nc_sid=85a577&_nc_ohc=aHPUkmLq_4sAX-MK-Ic&_nc_ht=scontent.fsdu25-1.fna&oh=3e6e888c8f94754e4b63bd8a5501f8bb&oe=5FD3D0AF">
  <link rel="icon" type="image/png" href="https://scontent.fsdu25-1.fna.fbcdn.net/v/t1.0-9/83887005_1267809216746693_1795221696081297408_n.png?_nc_cat=111&ccb=2&_nc_sid=85a577&_nc_ohc=aHPUkmLq_4sAX-MK-Ic&_nc_ht=scontent.fsdu25-1.fna&oh=3e6e888c8f94754e4b63bd8a5501f8bb&oe=5FD3D0AF">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Eficaz Project
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head><style>
  .dropdown-toggle::after {
    display: none !important;
  }
</style>
<style>
  .btn .material-icons, .btn:not(.btn-just-icon):not(.btn-fab) .fa {
    position: relative;
    display: inline-block;
    top: 8px;
    margin-top: -1em;
    margin-bottom: -1em;
    font-size: 1.1rem;
    vertical-align: middle;
}
.table .td-actions .btn {
    margin: 0px;
    padding: 5px;
    height: 27px;
}
.bmd-form-group .form-control, .bmd-form-group label, .bmd-form-group input::placeholder {
    line-height: 1.1;
    color: black;
}
.fo
</style>
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><div class="simple-text logo-normal">
          Eficaz Project
        </div></div>
      <div class="sidebar-wrapper" id="navbarSupportedContent">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">
              <i class="material-icons">home</i>
              <p>Início</p>
            </a>
          </li>
           <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">supervised_user_circle</i>
              <p>Administrativo</p>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="clientes.php">Clientes</a>
            <a class="dropdown-item" href="#">Em Breve</a>
            <a class="dropdown-item" href="#">Em Breve</a>
          </div>
      </li>
          <li class="nav-item">
            <a class="nav-link" href="categorias.php">
              <i class="material-icons">toc</i>
              <p>Categorias</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="produtos.php">
              <i class="material-icons">shopping_cart</i>
              <p>Produtos</p>
            </a>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-brand" >Produtos</div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Produtos 
                   
                    <button type="button" id="btn_reload" class="btn btn-info btn-fab btn-fab-mini btn-round" style="float: right;">
                      <i class="material-icons" style="color: black;">cached</i>
                    </button>
                    <a role='button' class="btn btn-success btn-fab btn-fab-mini btn-round" href="produtos_cad.php" style="float: right;">
                      <i class='material-icons'>add_circle</i>
                    </a>
                     <input type="text" class="form-control" style="float: right;" id="myInput" placeholder="Pesquisar por Nome,Descrição..." title="Type in a name">
                  </h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover" id="myTable">
                    <thead class="text-warning">
                      <th>Categoria</th>
                      <th>Nome</th>
                      <th>Descrição</th>
                      <th>Valor</th>
                      <th>Estoque</th>
                      <th class="text-right">Ações</th>
                    </thead>
                    <tbody id="tab-id">
                    <?php

                    $json_url = "http://localhost/crudComJson/api.php?paginationinit=$pagina&paginationend=$maxItensPerPage&tipobusca=2";
                    $crl = curl_init();
                    curl_setopt($crl, CURLOPT_URL, $json_url);
                    curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, FALSE); 
                    $json = curl_exec($crl);
                    curl_close($crl);
                    $arr=json_decode($json, true);
                    if($arr){
                    if(count($arr)>1){
                    foreach($arr as $key=>$value){
                      echo"
                            <tr>
                              <td>".$value['categoria']."</td>
                              <td>".$value['nome']."</td>
                              <td>".$value['descricao']."</td>
                              <td>R$ ".$value['valor']."</td>
                              <td>".$value['estoque']."</td>
                              <td class='td-actions text-right'>
                                <a role='button'  href='produtos_edit.php?idProduto=".$value['idProduto']."' class='btn btn-warning btn-round'>
                                    <i style='top:18px;' class='material-icons'>edit</i>
                                </a>
                                ";?>
                                <button type='button' id='btn_delete' onclick="exibeLog('<?php echo $value['idProduto']?>')" class='btn btn-danger btn-round'>
                                    <i class='material-icons'>close</i>
                                </button>
                            </td>
                          </tr>
                      <?php
                    }
                  }elseif(count($arr)==1){
                      echo"
                            <tr>
                              <td>".$arr[0]['categoria']."</td>
                              <td>".$arr[0]['nome']."</td>
                              <td>".$arr[0]['descricao']."</td>
                              <td>R$ ".$arr[0]['valor']."</td>
                              <td>".$arr[0]['estoque']."</td>
                              <td class='td-actions text-right'>
                                <a role='button' href='produtos_edit.php?idProduto=".$arr[0]['idProduto']."' class='btn btn-warning btn-round'>
                                    <i style='top:18px;'class='material-icons'>edit</i>
                                </a>
                                ";?>
                                <button type='button' id='btn_delete' onclick="exibeLog('<?php echo $arr[0]['idProduto']?>')" class='btn btn-danger btn-round'>
                                    <i class='material-icons'>close</i>
                                </button>
                            </td>
                          </tr>
                      <?php
                  }
                    }
                    ?>
                    </tbody>
                  </table>
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="produtos.php?pagina=0">Primeira</a>
                      </li>
                      <?php for($i=0;$i<$num_paginas;$i++){
                        $pag=$i+1;
                        $classe="";
                        if($pagina_num+1==$pag){
                          $classe="active";
                        }
                        echo"
                      <li class='page-item $classe'><a class='page-link' href='produtos.php?pagina=$i'>$pag</a></li>";
                    }
                    ?>
                    <li class="page-item">
                        <a class="page-link" href="produtos.php?pagina=<?php echo $num_paginas-1;?>">Ultima</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Criado com <i class="material-icons">favorite</i> por
            <a href="https://github.com/renanrib28" target="_blank">Renan Ribeiro</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert 
  <script src="../assets/js/plugins/sweetalert2.js"></script>-->
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
   <script src="sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script>
    function exibeLog(idProduto){
      Swal.fire({
                title: 'Deseja realmente excluir?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim!',
                cancelButtonText:'Não!'
              }).then((result) => {
                if (result.isConfirmed) {
                  $.ajax({
                          url: "ajax.php",
                          type: "POST",
                          data: "aplicacao=produtos&acao=delete&id="+idProduto+"",
                          dataType: "html"

                          }).done(function(resposta) {
                              if(resposta=="delete"){
                                swal.fire({ title:"Registro removido!", icon: "success", buttonsStyling: false, customClass: {confirmButton: 'btn btn-success'},}).then((result) => {
                                  if (result.isConfirmed) {
                                    window.location='produtos.php';
                                  }
                                });
                              }
                          }).fail(function(jqXHR, textStatus ) {
                              console.log("Request failed: " + textStatus);

                          }).always(function() {
                              console.log("completou");
                          });
                }
              })
    };
    $(document).ready(function() {
      $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tab-id tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
        $("#btn_reload").click(function(){

              // Perform your action on click here, like redirecting to a new url
              window.location='produtos.php';
          });
        
        /*Funções originais do painel*/
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();


        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in ../assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>