<?php
session_start();
include('../../dist/banco/control-login.php');
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'rct_teleson';
$conect = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
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
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Icone do Site -->
  <link rel = "shortcut icon" type = "imagem/x-icon" href = "../../dist/img/icones/r.ico"/>
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
        <a href="../../grafico_semanal.php" class="nav-link">Página Inicial</a>
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
    <a href="painel.php" class="brand-link">
      <img src="../../dist/img/r.png" alt="RCT Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">RCT</span>
    </a>  
    <a href="../../dist/banco/logout.php" class="brand-link">
      <span class=" font-weight-light">Sair</span>
    </a>
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/r.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="dist/banco/logout.php" class="brand-link">Sair</a>
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Cancelamento
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="painel.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Painel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../grafico_semanal.php" class="nav-link">   
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
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
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
            <h1 class="m-0">Painel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"></a> Página Inicial</li>
              <li class="breadcrumb-item active">Painel</li>
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
                  <!-- <h3 class="card-title">Realizar ca</h3> -->
                  <!-- <a href="javascript:void(0);">Ver gráfico ampliado</a> -->
                </div>
              </div>
              <div class="card-body">
                <?php 
                    $proto = "SELECT id, protocolo FROM atendimentos ORDER BY ID DESC LIMIT 1 ";
                    $result_pro = mysqli_query($conect, $proto);
                    $dado = mysqli_fetch_assoc($result_pro);
                    $id = $dado['id'] + 1;
                    // $id = number_format($id,2);
                    $protocolo = $dado['protocolo'].'.'.$id;
                    ?>
                <div class="d-flex">
                  <h3 class="d-flex flex-column">
                    <!-- <span class="text-right text-lg">Protocolo: </span> -->
                    <span> Protocolo: <?php echo($protocolo); ?></span>
                  </h3>
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
                    <span class="text-muted">Dia na semana</span>
                  </p>
                </div>
                    <form action="control.php" method="POST" id = "f1">   
                      <div class = "form-row" id = "fibra" name = "fibra">
                        <div class="container container-centered">
                            <div class = "form-group col-md-12">
                                <div class = "RadioFibra" style="display:;">
                                    <div class = "form-group col-md-12">
                                        <div class = "form-row">
                                          <div class="form-group col-md-6">
                                            <?php $clientes = 'SELECT nome, cpf FROM clientes ';
                                                  $result_clientes = mysqli_query($conect, $clientes);
                                                  while($dado = mysqli_fetch_assoc($result_clientes)){
                                            ?>
                                            <label>Cliente</label>
                                            <input autocomplete="off" class="form-control" list="clientes" name="cliente" placeholder="Buscar">
                                            <datalist id="clientes">
                                              <option value="<?php echo($dado['cpf'])?>"> <?php echo($dado['nome']);?>
                                              </option>
                                            </datalist>
                                          <?php } ?>
                                          </div>
                                          <div class ="form-group col-md-6">
                                              <label for="seleciona_plano"> Selecione o Plano do Cliente: </label>
                                              <select name="planos" id="seleciona_plano" onclick="selected1(this.value);" class = "form-control" required="required">
                                                  <option value="" selected> Escolha:</option>
                                                  <option value="1"> Ligth 5      - R$ 79,00 </option>
                                                  <option value="2"> Master 20    - R$ 84,00 </option>
                                                  <option value="3"> Super 35     - R$ 109,00</option>
                                                  <option value="4"> Ultra 50     - R$ 149,00 </option>
                                                  <option value="5"> Hiper 100    - R$ 199,00</option>
                                                  <option value="al_planos" > Outro Plano</option>
                                              </select>
                                          </div>
                                        </div>
                                        <div class = "form-row">
                                            <div class = "form-group col-md-6 center" >
                                                <div class = "Outher" style = "display:none;">
                                                    <div class = "form-group col-md-12">
                                                        <label for="nome_outro_plano">Nome do Plano: </label>
                                                        <input type="text" name = "name_outher_plan" id = "nome_outro_plano" class = "form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "form-group col-md-6 " >
                                                <div class = "Outher" style = "display:none;">
                                                    <div class = "form-group col-md-12">
                                                        <label for="outro_plano">Digite o valor do plano:</label>
                                                        <input type="number" name = "valor_outher_plan" id = "valor_outro_plano" class = "form-control"  step="0.01">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "form-row">
                                            <div class = "form-group col-md-6">
                                                <label for="adesao_migra"> Data de Ativação / Adesão do Contrato</label>
                                                <input type="date" name = "dt_adesao_migra" id = "adesao_migra" class = "form-control" required="required" 
                                                onclick="">
                                            </div>
                                             <div class = " form-group col-md-6">
                                                <label for="dt_cancelamento"> Data de Cancelamento </label>
                                                <input type="date" name = "data_cancelamento_fibra" id = "dt_cancelamento" class = "form-control" required="required">
                                            </div>    
                                        </div>
                                        <div class = "form-row">
                                            <div class = "form-group col-md-6">
                                                    <label for="dt_pg"> Data da Ultima Mensalidade Paga  </label>
                                                    <input type="date" name="dt_pag" id="dt_pg" class = "form-control" >
                                            </div>
                                            <div class = "form-group col-md-6" id = "ip_fixo_adm">
                                                <label for="ip_fixo"> Adquiriu IP Fixo ?</label>
                                                <select name="select_ip_fix" class = "form-control" id = "ip_fixo" onclick="selected(this.value); " required="required">
                                                    <option value=" " selected>Escolha:</option> 
                                                    <option value="SIM">Sim </option>
                                                    <option value="NAO">Não</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class = "form-row">
                                            <div class = "form-group col-md-12">
                                                <div class = "IpFixo" style = "display:none;">
                                                    <label for="adesao_ip">Adesão do IP Fixo</label>
                                                    <input type="date" name = "dt_adesao_ipfixo" id = "req_ip_ade" class = "form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "form-row">
                                            <div class = "form-group col-md-12">
                                                <button class="btn btn-primary btn-block" type = "submit" onclick = "">CALCULAR</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class = "RadioFibra" style="display:none;" id = "R"  name= "radio">
                    <div class = "form-group col-md-12">
                        <div class = "form-row">
                            <div class = "form-group col-md-12">
                                <div class = "form-row">
                                    <div class ="form-group col-md-12">
                                        <label for="seleciona_plano"> Escolha o plano</label>
                                        <select name="planos_radio" id="seleciona_plano" class = "form-control">
                                            <option value=" " selected> Escolha:</option>
                                            <option value="1"> Radio 1 Mega</option>
                                            <option value="2"> Radio 2 Megas </option>
                                            <option value="3"> Radio 3 Megas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class = "form-row">  
                                    <div class = "form-group col-md-6">
                                        <label for="adesao_migra_radio">Adesão / Migração</label>
                                        <input type="date" name = "dt_adesao_migra_radio" id = "adesao_migra_radio" class = "form-control" >
                                    </div>    
                                    <div class = " form-group col-md-6">
                                        <label for="dt_cancelamento_radio"> Data do Cancelamento </label>
                                        <input type="date" name = "data_cancelamento" id = "dt_cancelamento_radio" class = "form-control" >
                                    </div>
                                </div>
                                <div class = "form-row">
                                    <div class = "form-group col-md-6">
                                        <label for="dt_pg_radio"> Ultima Mensalidade Paga  </label>
                                        <input type="date" name="dt_pag_radio" id="dt_pg_radio" class = "form-control" >
                                    </div>
                                    <div class = "form-group col-md-6" id = "ip_fixo_adm">
                                        <label for="ip_fixo_radio"> Adquiriu IP Fixo ?</label>
                                        <select name="select_ip_fix_radio" class = "form-control" id = "ip_fixo_radio" onclick="selected3(this.value);">
                                            <option value=" " selected>Escolha:</option> 
                                            <option value="SIM" >Sim </option>
                                            <option value="NAO">Não</option>
                                        </select>
                                    </div>
                                </div>
                                <div class = "form-row">
                                    <div class = "form-group col-md-12">
                                        <div class = "IpFixoRadio" style = "display:none;">
                                            <div class = "form-group col-md-12">
                                                <label for="req_ip_ade">Adesão do IP Fixo</label>
                                                <input type="date" name = "dt_adesao_ipfixo_radio" id = "req_ip_ade" class = "form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class = "form-row">
                                    <div class = "form-group col-md-12">
                                        <button class="btn btn-primary btn-block" type = "submit" onclick = "">CALCULAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Script do banco -->
<script>
        var ctx = document.getElementById("myChart").getContext('2d');
          var xValues = ["Seg", "Ter", "Qua", "Qui", "Sex", "Sab"];
          var yCan = [<?php echo $data1 ?>];
          var yMet = [<?php echo $data2 ?>];
          var yDif = [<?php echo $data3 ?>];
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
                label: 'Meta',
                backgroundColor: 'green',
                data: yMet
              },
              {

                label: 'Total',
                backgroundColor: '#ff8000',
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
      <script>
        function selected(value)
        {
        var ip_fixo = document.getElementsByClassName('IpFixo');
            if(value == "SIM")
            {
                ip_fixo[0].style.display = 'block';
            }
            else
            {
                ip_fixo[0].style.display = 'none';
            }
        }
        function alerting()
        {
            alert("OBSERVAÇÃO: SE NÃO HOUVER DATA DE ATIVAÇÃO, USAR A DATA DE ADESÃO !\nFIDELIDADE É VALIDA PARA ADESÃO E MIGRAÇÃO.");
        }
        function selected1(value)
        {
            var outros_plan = document.getElementsByClassName('Outher');

            if(value == "al_planos")
            {
                outros_plan[0].style.display = 'block';
                outros_plan[1].style.display = 'block';
            }
            else
            {
                outros_plan[0].style.display = 'none';
                var nome_new_plan = document.getElementById('nome_outro_plano').value = " ";
                outros_plan[1].style.display = 'none';
                var value_new_plan = document.getElementById('valor_outro_plano').value = " ";
            }
        }
        function selected3(value)
        {
        var ip_fixo_radio = document.getElementsByClassName('IpFixoRadio');

            if(value == "SIM")
            {
                ip_fixo_radio[0].style.display = 'block';
            }
            else
            {
                ip_fixo_radio[0].style.display = 'none';
            }
        }
    </script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="dist/js/pages/dashboard3.js"></script> -->
</body>
</html>