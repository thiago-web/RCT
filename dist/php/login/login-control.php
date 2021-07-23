<?php
session_start();
$conect = include("../../banco/conection.php");

//RESGATA O USUÁRIO E SENHA COM O MÉODO POST E GUARDA NAS VARIÁVEIS
$usuario = 'teleson';
$senha   = $_POST['senha'];

// QUERY DO LOGIN
$query_login = "SELECT usuario, senha FROM usuarios WHERE usuario = '{$usuario}' AND senha = md5('{$senha}')";
//RESGATA O RESULTADO DA QUERY NA VARIAVEL
$result_login = mysqli_query($conect, $query_login);
//CRIAMOS UMA VARIAVEL LINHA QUE RECEBE VALOR BOOLEAN
$row_login = mysqli_num_rows($result_login);


// REDIRECIONAMENTO DO USUÁRIO
if ($row_login == 1) {

	if ($usuario == 'admin@sws.com.br') {
		header('location:../sws-admin/index.php');
		exit();
	} else {
		$_SESSION['usuario'] = $usuario;
		$_SESSION['logado']      = true;
		header('location: ../../../pages/cancelamento/painel.php');
		exit();
	}
}
// SE FOR FALSE(0)RETORNA PARA O INDEX
else {
	unset($_SESSION['erro_values']);
	$_SESSION['nao_autenticado'] = true;
	header('location: ../../../index.php');
	exit();
}
?>