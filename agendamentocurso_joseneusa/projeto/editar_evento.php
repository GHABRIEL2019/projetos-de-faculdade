<?php
$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/projeto2/";
session_save_path($serve_file . 'cache/temp');
session_start();
include_once($serve_file . 'projeto/php/conexao.php');
if (!isset($_SESSION['nome'])) {
  header('Location: login.html');
}

?>
<!DOCTYPE php>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Agendar! | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Bem-vindo!</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->


          <!-- sidebar menu -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bem-Vindo,</span>
              <h2>Agendar</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Agendamentos online</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.html">Painel</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Formulários <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="form.html">Agendar Evento </a></li>
                    <li><a href="form_validation.html">Cadastro</a></li>
                    <li><a href="form_wizards.html">Criar Lembrete</a></li>


                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Elementos de Interface do usuário<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="calendar.html">Calendário</a></li>
                    <li><a href="form_upload.html">Upload de Arquivos</a></li>
                    <li><a href="media_gallery.html"> Galeria de Media</a></li>


                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Listas <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="tables.html">Todos os eventos </a></li>
                    <li><a href="tables_dynamic.html">Todos os cadastros</a></li>
                  </ul>
                </li>


            </div>
            <div class="menu_section">
              <h3>Outros</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> financeiro <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="invoice.html">Boletos</a></li>
                    <li><a href="pricing_tables.html">Valores dos Planos</a></li>

                  </ul>
                </li>

                <li><a><i class="fa fa-sitemap"></i>Menu aulas online<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="projects.html">Aulas agendadas </a>


                    </li>
                    <li><a href="contacts.html">Contato Professores</a>
                    </li>
                  </ul>
                </li>

              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->

      <!-- /top navigation -->

      <!-- page content -->


      <div class="clearfix"></div>

      <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
          <div class="x_title">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div style="margin-left:15%;">
              <div class="card-header  " style="background-color:#4D4D4D; color:white;">
                <div class="table-responsive-sm">
                  <div class="row" style="position:relative;">
                    <div class="col-1">Id</div>
                    <div class="col-1">Nome do Evento</div>
                    <div class="col-1">Informação</div>
                    <div class="col-1">Data</div>
                    <div class="col-2">Endereco</div>
                    <div class="col-1">HORA</div>
                    <div class="col-1">cidade</div>
                    <div class="col-1">Tipo</div>
                    <div class="col-1">Status</div>
                    <div class="col-1">Editar</div>
                    <div class="col-1">Excluir</div>
                  </div>
                </div>
              </div>
              <?php
              $id = $_POST['id'];

              $sql = "SELECT * from agendamento where id = '$id'";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="card-header container " style="background-color:white; color:black;">
                <form action="php/atualiza_evento.php" method="POST">
                <div class="row">
                <div class="col-1"><input type="text" value="' . $row['id'] . '"name="id"></div>
                <div class="col-1"><input type="text" value="' . $row['nomeEvento'] . '" name="nome"></div>
                <div class="col-1"><input type="text" value="' . $row['informacoesevento'] . '" name="info"></div>
                <div class="col-1"><input type="text" value="' . $row['dataevento'] . '" name="dataevento"></div>
                <div class="col-2"><input type="text" value="' . $row['endereco'] . '" name="endereco"></div>
                <div class="col-1"><input type="text" value="' . $row['horaevento'] . '" name="horaevento"></div>
                <div class="col-1"><input type="text" value="' . $row['cidade'] . '" name="cidade"></div>
                <div class="col-1"><input type="text" value="' . $row['tipoevento'] . '" name="tipo"></div>
                <div class="col-1"><input type="text" value="' . $row['statusEvento'] . '" name="status"></div>
                <input type="hidden" name="idPegar" value="' . $row['id'] . '">
                <div class="col-2"><input type="submit" value="Editar"></div>
           </div>
           </form>
                      </div>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="pull-right">

    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
  </div>
  </div>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>