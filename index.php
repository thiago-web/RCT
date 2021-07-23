<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RCT | Acesso </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="#"><b>RCT</b> Teleson Telecom</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name"> </div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="dist/img/r.png" alt="User Image">
    </div>
    <!-- lockscreen credentials (contains the form) -->
    <form action="dist/php/login/login-control.php" method="POST" class="lockscreen-credentials">
      <div class="input-group">
        <input type="password" name="senha" class="form-control" placeholder="Senha">
        <div class="input-group-append">
          <button type="submit" class="btn">
            <i class="fas fa-arrow-right text-muted"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-image -->
    
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    <?php
    if (!empty($_SESSION['erro_values']) && $_SESSION['erro_values'] == true) {

    }
    if (isset($_SESSION['nao_autenticado'])) {
    ?>
      <div class='alert alert-danger text-center' role='alert'>
        <p> <strong>Senha</strong> invalida !</p>
      </div>
    <?php
    unset($_SESSION['nao_autenticado']);
    // session_destroy();
    }
    ?>
    Entre com a senha padrão para iniciar a sessão.
  </div>
  <!-- <div class="text-center">
    <a href="login.html">Or sign in as a different user</a>
  </div> -->
  <div class="lockscreen-footer text-center">
    Copyright &copy; <?php echo (date('Y')); ?> por <b><a href="#" class="text-black">Thiago Henrique</a></b><br>
    Todos os direitos reservados.
  </div>
</div>
<!-- /.center -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
    });
}, 2000);
 
});
</script>
</body>
</html>
