<?php
include('../assets/functions/connection.php'); 
$idProduto=isset($_GET['idProduto']) && !empty($_GET['idProduto']) ? $_GET['idProduto'] : '';

$sql="select * from produtos where idProduto='$idProduto'";
$dados=lookup_sql($sql,$conn);

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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
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
    top: 0px;
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
          <li class="nav-item ">
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
                  <h4 class="card-title">Cadastro de Produtos 
                  </h4>
                </div>
                </div>
                <form>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="Select1">Categoria</label>
                          <select class="form-control js-select2" data-style="btn btn-link" id="Select1">
                            <option value='' disabled>Selecione uma categoria</option>
                            <?php
                              $sql="select * from (SELECT t.*, 
                                         @rownum := @rownum + 1 as idind
                                    FROM categorias t, 
                                         (SELECT @rownum := 0) r) as categ ORDER BY idind desc limit 10";
                              $result=mysqli_query($conn,$sql);
                               while ($dados2=mysqli_fetch_array($result)) {
                                $class='';
                                if($dados2['idCategoria']==$dados['idCategoria']){
                                  $class='selected';
                                }
                                echo"<option $class value='".$dados2['idCategoria']."'>".$dados2['nome']."</option>
                                ";
                              }
                              ?>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nome <font style="color:red;">*</font></label>
                          <input type="text" class="form-control" value="<?php echo $dados['nome']; ?>" maxlength="50" name="id_field_nome">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Descrição <font style="color:red;">*</font></label>
                          <input type="text" class="form-control" value="<?php echo $dados['descricao']; ?>"maxlength="100" name="id_field_descricao">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Valor <font style="color:red;">*</font></label>
                          <input type="number" class="form-control" max="9999999999" value="<?php echo $dados['valor']; ?>"pattern="^\d*(\.\d{0,2})?$" name="id_field_valor">
                        </div>
                      </div>
                    </div>
                   <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Estoque <font style="color:red;">*</font></label>
                          <input type="hidden" value="<?php echo $dados['idProduto']; ?>" name="id_field_idProduto">
                          <input type="number" class="form-control" max="9999999999" value="<?php echo $dados['estoque']; ?>" name="id_field_estoque">
                        </div>
                      </div>
                    </div>
                    <center>
                      <a role="button" class="btn btn-social btn-round btn-facebook" style="color: white;"id="btn_update">
                              <i class="material-icons">save</i> Salvar
                      </a>
                      <a role="button" class="btn btn-danger btn-round" style="color: white;" id="btn_back">
                              <i class="material-icons">exit_to_app</i> voltar
                      </a>
                    </center>
                    <div class="clearfix"></div>
                  </form>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
  <script>

    $(document).ready(function() {

$(document).on('keydown', 'input[pattern]', function(e){
  var input = $(this);
  var oldVal = input.val();
  var regex = new RegExp(input.attr('pattern'), 'g');

  setTimeout(function(){
    var newVal = input.val();
    if(!regex.test(newVal)){
      input.val(oldVal); 
    }
  }, 0);
});

       $(".js-select2").select2();
      // Variable to hold request
      $("#btn_update").click(function(){
        var nome= $("input[type=text][name=id_field_nome]" ).val();
        var descricao=$("input[type=text][name=id_field_descricao]" ).val();
        var idCategoria=$("select#Select1 option:checked" ).val();
        var valor=$("input[type=number][name=id_field_valor]" ).val();
        var estoque=$("input[type=number][name=id_field_estoque]" ).val();
        var idProduto=$("input[type=hidden][name=id_field_idProduto]" ).val();
        if(!nome || !descricao){
            swal.fire({ title:"Verifique os Campos Obrigratórios!", icon: "error", buttonsStyling: false, customClass: {confirmButton: 'btn btn-success'},});
        }else{
          $.ajax({
              url: "ajax.php",
              type: "POST",
              data: "aplicacao=produtos&acao=update&nome="+nome+"&descricao="+descricao+"&categoria="+idCategoria+"&valor="+valor+"&estoque="+estoque+"&id="+idProduto+"",
              dataType: "html"

          }).done(function(resposta) {
              if(resposta="update"){
                swal.fire({ title:"Registro atualizado!", icon: "success", buttonsStyling: false, customClass: {confirmButton: 'btn btn-success'},}).then((result) => {
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
      });
      $("#btn_back").click(function(){

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