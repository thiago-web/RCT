<?php
session_start();
include('dist/banco/control-login.php');
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'rct_teleson';
$conect = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

function render($date = null)
{
    $current = is_null($date)
        ? date('w')     
        : date('w', strtotime($date));

    $now = is_null($date)
        ? strtotime('now')
        : strtotime($date);

    $week = [
        'dom' => '',
        'sab' => '',
        'sex' => '',
        'qui' => '',
        'qua' => '',
        'ter' => '',
        'seg' => ''];   

    $keys = array_keys($week);

    if ($current > 0)
    { 
        $now = strtotime('-'.($current).' day', $now);      
    }

    for($i = 0; $i < 7; $i++)
    {
        $week[$keys[$i]] = date('w', 
            strtotime("-$i day", $now));  

        if($week[$keys[$i]] == 0){
          $week[$keys[$i]] = 'Domingo';
        }
        if($week[$keys[$i]] == 1){
          $week[$keys[$i]] = 'Segunda-Feira';
        }
        if($week[$keys[$i]] == 2){
          $week[$keys[$i]] = 'Terça-Feira';
        }
        if($week[$keys[$i]] == 3){
          $week[$keys[$i]] = 'Quarta-Feira';
        }
        if($week[$keys[$i]] == 4){
          $week[$keys[$i]] = 'Quinta-Feira';
        }
        if($week[$keys[$i]] == 5){
          $week[$keys[$i]] = 'Sexta-Feira';
        }
        if($week[$keys[$i]] == 6){
          $week[$keys[$i]] = 'Sábado';
        }
           
    }
    $week = array_reverse($week);
    return $week;
}

$semana = render(date('Y-m-d'));

// foreach ($semana as $key => $value) { 
  
//    echo '"'.implode('","' , $semana).'"';
// }

$data_atual = date('Y-m-d');

// Segunda Feira
$sql_seg = "SELECT SUM(xadesao) as xadesao FROM grafico_semanal WHERE data_dado BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() AND semana_dado = '1'";
$result_seg = mysqli_query($conect, $sql_seg);
$segunda = '';
//loop through the returned data
while ($row = mysqli_fetch_array($result_seg)) {
  $segunda = $segunda . '"'. $row['xadesao'].'",';
  // $data4 = $data4 . '"'. $row['data'];
}
$segunda = trim($segunda,",");


// Terça - Feira
$sql_ter = "SELECT SUM(xadesao) as xadesao FROM grafico_semanal WHERE data_dado BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() AND semana_dado = '1'";
$result_ter = mysqli_query($conect, $sql_ter);
$terca = '';
//loop through the returned data
while ($row = mysqli_fetch_array($result_ter)) {
  $terca = $terca . '"'. $row['xadesao'].'",';
  // $data4 = $data4 . '"'. $row['data'];
}
$terca = trim($terca,",");



// Quarta-Feira
$sql_qua = "SELECT SUM(xadesao) as xadesao FROM grafico_semanal WHERE data_dado BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() AND semana_dado = '3'";
$result_qua = mysqli_query($conect, $sql_qua);
$quarta = '';
//loop through the returned data
while ($row = mysqli_fetch_array($result_qua)) {
  $quarta = $quarta . '"'. $row['xadesao'].'",';
  // $data4 = $data4 . '"'. $row['data'];
}
$quarta = trim($quarta,",");


// Quinta-Feira
$sql_qui = "SELECT SUM(xadesao) as xadesao FROM grafico_semanal WHERE data_dado BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() AND semana_dado = '4'";
$result_qui = mysqli_query($conect, $sql_qui);
$quinta = '';
//loop through the returned data
while ($row = mysqli_fetch_array($result_qui)) {
  $quinta = $quinta . '"'. $row['xadesao'].'",';
  // $data4 = $data4 . '"'. $row['data'];
}
$quinta = trim($quinta,",");

// Sexta-Feira
$sql_sex = "SELECT SUM(xadesao) as xadesao FROM grafico_semanal WHERE data_dado BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() AND semana_dado = '4'";
$result_sex = mysqli_query($conect, $sql_sex);
$sexta = '';
//loop through the returned data
while ($row = mysqli_fetch_array($result_sex)) {
  $sexta = $sexta . '"'. $row['xadesao'].'",';
  // $data4 = $data4 . '"'. $row['data'];
}
$sexta = trim($sexta,",");

// Sábado
$sql_sab = "SELECT SUM(xadesao) as xadesao FROM grafico_semanal WHERE data_dado BETWEEN CURRENT_DATE()-7 AND CURRENT_DATE() AND semana_dado = '4'";
$result_sab = mysqli_query($conect, $sql_sab);
$sabado = '';
//loop through the returned data
while ($row = mysqli_fetch_array($result_sab)) {
  $sabado = $sabado . '"'. $row['xadesao'].'",';
  // $data4 = $data4 . '"'. $row['data'];
}
$sabado = trim($sabado,",");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Painel | RCT </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Icone do Site -->
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "dist/img/icones/r.ico"/>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="grafico_semanal.php" class="nav-link">Página Inicial</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Sugestões</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Procurar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li> -->

      <!-- Messages Dropdown Menu 
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"> Message Start
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
           Message End 
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
             Message Start 
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
             Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
             Message Start             
             <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
             Message End 
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div> -->
      </li>
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="dist/img/r.png" alt="RCT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RCT</span>
    </a>  
    <a href="dist/banco/logout.php" class="brand-link text-center">
      <span class=" font-weight-light">Sair</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->
      <hr>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Procurar" aria-label="Procurar">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Adesões
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Adicionar consulta</p>
                    </a>
                  </li>
              </li>
            </ul>
        
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Cancelamentos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/cancelamento/painel.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Painel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="grafico_semanal.php" class="nav-link active">   
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gráfico Semanal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gráfico Mensal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gráfico Anual</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Gráfico Semanal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a> Página Inicial</li>
              <li class="breadcrumb-item active">Gráfico Semanal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <!-- <h3 class="card-title">Cancelamentos na semana</h3> -->
                  <!-- <a href="javascript:void(0);">Ver gráfico ampliado</a> -->
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <div class="form-inline">
                      <div class="input-group col-md-8" >
                        <input readonly="" value="Atualizar" class="form-control form-control-sidebar" type="search" placeholder="Procurar" aria-label="Procurar">
                        <div class="input-group-append">
                          <button  class="btn btn-primary" 
                          onclick="window.location.reload();">
                            <!-- <i class="fas fa-refresh fa-fw"></i> -->
                            <i class="fa fa-redo-alt" aria-hidden="true"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </p>
                  <hr>
                  <p class="ml-auto d-flex flex-column text-left">
                    <span class="text-primary">
                        <i class="fas fa-calendar" aria-hidden="true"></i>
                        <?php
                        echo (date('d/m/Y'));
                        ?>
                    </span>
                    <span class="text-muted">Data Atual</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-primary">
                      <i class="fas fa-calendar-week" aria-hidden="true"></i> 
                      <?php 

                        $sem = date('w'); 
                        if($sem == '1'){
                            $sem = 'Segunda-Feira';
                        }

                        if($sem == '2'){
                            $sem = 'Terça-Feira';   
                        }

                        if($sem == '3'){
                            $sem = 'Quarta-Feira';
                        }

                        if($sem == '4'){
                            $sem = 'Quinta-Feira';
                        }

                        if($sem == '5'){
                            $sem = 'Sexta-Feira';
                        }

                        if($sem == '6'){
                            $sem = 'Sábado';
                        }

                        if($sem == '0'){
                            $sem = 'Domingo';
                        }

                       echo($sem); 
                    ?>
                    </span>
                    <span class="text-muted"> Dia na semana </span>
                  </p>
                </div>
                
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="myChart" height="140" ></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <!-- <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> Esta Semana
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Semana Anterior
                  </span> -->
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div><!-- /.col-md-6 -->
        </div><!-- /row -->
      </div><!-- /container fluid -->
    </div>
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo(date('Y')); ?></strong>. Desenvolvido por <a href="#">Thiago Henrique</a>.
    Todos os direitos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versão</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Script do banco -->
<script>
        var ctx = document.getElementById("myChart").getContext('2d');
          
          var xValues = [<?php echo '"'.implode('","' , $semana).'"';?>];
          var yCan = ['34'];
          var yAde = [
          <?php echo ($segunda);?>,
          <?php echo ($terca);  ?>,
          <?php echo ($quarta); ?>,
          <?php echo ($quinta); ?>,
          <?php echo ($sexta); ?>,
          <?php echo ($sabado); ?>
           ];
          var yDif = ["8"];
          var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: xValues,
              datasets: 
              [
              {
                label: 'Cancelamentos',
                backgroundColor: 'red',
                data: yCan

              },
              {
                label: 'Adesões',
                backgroundColor: 'green',
                data: yAde
              },
              {

                label: 'Meta',
                backgroundColor: '#4169E1',
                data: yDif
              },
              {

                label: 'Média',
                backgroundColor: '#00FF7F',
                data: yDif
              }
              
              ]
            },

            options: {
                scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 5}]}},
                tooltips:{mode: 'index'},
                legend: {
                  display: true, 
                  labels: {fontColor: 'rgb()', fontSize: 16, position: 'bottom'}
                },
                  title: {
                    display: true,
                    text: "Cancelamentos na Semana"
                  } 
                
            }
        });
      </script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard3.js"></script> -->
</body>
</html>