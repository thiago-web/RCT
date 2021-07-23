<?php

session_start();

if(!empty($_SESSION['plano_cliente'])){

//RECEBENDO AS VARIÁVEIS DA SESSÃO.

//PLANO DO CLIENTE

$plano_cliente = $_SESSION['plano_cliente'] ;

//VALOR DO PLANO

$valor_plano = $_SESSION['valor_plano_cliente'];

//FORMATAÇÃO

$valor_plano = number_format($valor_plano,2);

//DATA DE ADESÃO/MIGRAÇÃO

$data_adesao = $_SESSION['dt_adesao_cliente'] ;

//DATA DE CANCELAMENTO 

$data_cancelamento = $_SESSION['dt_cancelamento_cliente'];

//MESES DE FIDELIDADE COMPLETADOS

$meses_faltantes_fidelidade = $_SESSION['meses_faltantes_fidelidade_cliente'];

//MESES DE FIDELIDADE FALTANTES

$meses_completados_fidelidade = $_SESSION['meses_completados_fidelidade_cliente'] ;

//VALOR DE FIDELIDADE A COBRAR

$valor_fidelidade = $_SESSION['valor_fidelidade_cliente'] ;

//FORMATAÇÃO

$valor_fidelidade = number_format($valor_fidelidade,2);

//DATA DA ULTIMA MENSALIDADE PAGA

$data_ultima_paga = $_SESSION['dt_ult_cliente'];

//DIAS DE USO

$dias_uso = $_SESSION['dias_uso_cliente'] ;

//MOSTRA DIAS

$mostra_dias = $_SESSION['mostra_dias_cliente'] ;

//VALOR EM DIAS DE USO

$valor_dias_uso = $_SESSION['valor_dias_uso_cliente'];

//FORMATAÇÃO

$valor_dias_uso = number_format($valor_dias_uso,2);

//MULTA POR ATRASO 2% - 0,02.

$multa_atr = $_SESSION['multa_atr_cliente'];

//FORMATAÇÃO

$multa_atr = number_format($multa_atr,2);

//MORA DIARIA 0.003% - 0,033.

$valor_atr = $_SESSION['dias_atr_cliente'];

//FORMATAÇÃO 

$valor_atr = number_format($valor_atr,2);

//DATA DO IP FIXO

$data_ip = $_SESSION['dt_ip_fixo_cliente'];

//MESES DE FIDELIDADE DO IP FIXO COMPLETADOS

$meses_ip_com = $_SESSION['$meses_com_ip_cliente'];

//MESES DE FIDELIDADE DO IP FIXO FALTANTES

$meses_ip_fal = $_SESSION['$meses_flt_ip_cliente'];

//VALOR DE FIDELIDADE DO IP FIXO

$valor_fidelidade_ip = $_SESSION['valor_fidelidade_ip_clinete'];

//FORMATAÇÃO

$valor_fidelidade_ip = number_format($valor_fidelidade_ip,2);

//DIAS DE USO DO IP FIXO

$dias_uso_ip = $_SESSION['dias_uso_ip_cliente']  ;

//VALOR DOS DIAS DE USO DO IP FIXO

$valor_dias_uso_ip_fixo = $_SESSION['valor_dias_uso_ip_fixo_cliente'];

//FORMATAÇÃO

$valor_dias_uso_ip_fixo = number_format($valor_dias_uso_ip_fixo,2);

//DIAS VENCIDOS

$mostra_diasvencidos = $_SESSION['mostra_diasvencidos_cliente'] ;

//PARCELAS EM ABERTO

$parcelas_aberto = $_SESSION['parcelas_aberto_cliente'];

//VALOR PARCELAS EM ABERTO

$valor_parcelas_aberto = $_SESSION['valor_parcela_aberto_cliente'];

//FORMATAÇÃO

$valor_parcelas_aberto = number_format($valor_parcelas_aberto,2);

//VALOR PARCELA 1 + MULTA + MORA DIÁRIA

$valor_parcelas_aberto30 = $_SESSION['valor_parcela1_cliente'];

//FORMATAÇÃO

$valor_parcelas_aberto30 = number_format($valor_parcelas_aberto30,2);

//VALOR PARCELA 2 + MULTA + MORA DIÁRIA

// $valor_parcelas_aberto60 = $_SESSION['valor_parcela2_cliente'];

//FORMATAÇÃO

// $valor_parcelas_aberto60 = number_format($valor_parcelas_aberto60,2);

//TOTAL

$total_pagar = $_SESSION['total_cliente'];

//FORMATAÇÃO

$total_pagar = number_format($total_pagar,2);





// echo "<p> SESSION ID " . session_id().  "</p>";

?>

<!DOCTYPE html>

<html>

<head>

	<title></title>

	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/bulma.min.css" />

        <link rel="stylesheet" type="text/css" href="estilo.css">

        <link rel="shortcut icon" href="images/tel_ico.ico" type="image/x-icon">

</head>

<body background="" >

	<script language="JavaScript">

    function protegercodigo() {

    if (event.button==2||event.button==3){

        alert('CÓDIGO PROTEGIDO !');}

    }

    document.onmousedown=protegercodigo

</script>

    

<script language="JavaScript">

    function protegercodigo() {

    if (event.button==2||event.button==3){

        alert('CÓDIGO PROTEGIDO !');}

    }

    document.onmousedown=protegercodigo

</script>

	<div class="justify-content-center">

		<div class="container-centered d-flex justify-content-center">

			<h1 class="display-4">

				RESULTADO

			</h1>

		</div>

			

	</div>

	<div class=" container container-fluid d-justify-content-center">

		

		

			<div class="justify-content-center">

				<!-- <div class="container-centered d-flex justify-content-center">

					<h1 class="">

						FIDELIDADE

					</h1>

				</div> -->	

		

			<table class="table table-striped table-sm table-bordered ">

				<thead>

					<tr>

						<td colspan="3" scope="1"> <p class="text-center font-weight-bold"> PLANO 		</p> </td>

						<td>			 <p class="text-center font-weight-bold"> MENSALIDADE 	</p></td>

						<td colspan="4"> <p class="text-center font-weight-bold"> ADESÃO 		</p> </td>

						<td> 			 <p class="text-center font-weight-bold"> CANCELAMENTO 	</p></td>

					</tr>	

				</thead>

				<tbody>

					<tr>

						<td colspan="3" scope="1">  <p class="text-center "> <?php echo"$plano_cliente" ?> 		</p> </td>

						<td> 			 <p class="text-center "> <?php echo"R$ $valor_plano" ?> 	</p> </td>

						<td colspan="4"> <p class="text-center "> <?php echo"$data_adesao" ?> 		</p> </td>

						<td>  			 <p class="text-center "> <?php echo"$data_cancelamento"?>	</p> </td>

					</tr>	

				</tbody>	

			</table>

		</div>



			<div class="d-flex justify-content-center">	

				<table class="table table-striped table-sm table-bordered">

					<thead class="thead-dark">

						<tr>

							<td colspan="4"scope="1">	<p class="text-center font-weight-bold">MESES <br>FIDELIDADE COMPLETADOS  </p></td>

							<td>				<p class="text-center font-weight-bold"> MESES <br>FIDELIDADE FALTANTES  </p></td>

							<td>				<p class="text-center font-weight-bold"> TOTAL VALOR<br>	 DE FIDELIDADE    </p></td>

						</tr>	

					</thead>

					<tbody>

						<tr>	

							<td colspan="4" scope="1"> 	<p class="text-center "> <?php echo"$meses_completados_fidelidade MESES" ?> </p></td>

							<td> 				<p class="text-center "> <?php echo"$meses_faltantes_fidelidade MESES" ?> 	 </p> </td>

							<td> 				<p class="text-center "> <?php echo"R$ $valor_fidelidade" ?> 			 </p></td>

						</tr>

					</tbody>

				</table>

				</div>

			<div class="d-flex justify-content-center" scope="1">	

				<table class="table table-striped table-sm table-bordered">

					<thead class="thead-light">

						<tr>

							<td colspan="4"> <p class="text-center font-weight-bold">  ULTIMA MENSALIDADE <br> PAGA </p> </td>

							<td>			 <p class="text-center font-weight-bold">  TOTAL DE<br>PARCELAS EM ABERTO  	  </p> </td>

							<td>			 <p class="text-center font-weight-bold">  TOTAL <br> DIAS DE USO  			  </p> </td>

							<td>			 <p class="text-center font-weight-bold">  VALOR TOTAL  EM<br> DIAS DE USO 	  </p> </td>

							<td>			 <p class="text-center font-weight-bold">  TOTAL <br> DIAS VENCIDOS		  </p> </td>

							<td>			 <p class="text-center font-weight-bold">  PARCELA<br> VENCIDA <br> (MAIS ANTIGA)</p> </td>

							<!-- <td>			 <p class="text-center font-weight-bold">  PARCELA<br> VENCIDA <br> (MAIS RECENTE)</p> </td> -->

							<!-- <td> 			 <p class="text-center font-weight-bold"> VALOR TOTAL <br> DE MULTA POR ATRASO</p></td>

							<td> 			 <p class="text-center font-weight-bold"> VALOR TOTAL <br> DE MORA DIÁRIA 			  </p></td> -->

						</tr>

					</thead>

					<tbody>

						<tr>

							<td colspan="4"> 	<p class="text-center "> <?php echo"$data_ultima_paga" ?> </p></td>

							<td> 				<p class="text-center "> <?php echo"$parcelas_aberto" ?></p></td>

							<td> 				<p class="text-center "> <?php echo"$mostra_dias DIAS" ?>		 </p></td>

							<td> 				<p class="text-center "> <?php echo"R$ $valor_dias_uso" ?>   </p></td>

							<td> 				<p class="text-center "> <?php echo"$mostra_diasvencidos DIAS" ?>		 </p></td>

							<td> 				<p class="text-center "> <?php echo"R$ $valor_parcelas_aberto30" ?>    </p></td>

							<!-- <td> 				<p class="text-center "> <?php echo"R$ $valor_parcelas_aberto60" ?>    </p></td> -->

							<!-- <td> 				<p class="text-center "> <?php echo"R$ $multa_atr" ?>		 </p></td>

							<td> 				<p class="text-center "> <?php echo"R$ $valor_atr" ?>		 </p></td> -->

						</tr>

					</tbody>

					

				</table>

			</div>

		

			<div class="d-flex justify-content-center">	

				<table class="table table-striped table-sm table-bordered">

					<thead class="thead-dark">

						<tr>	

							<td colspan="4"> <p class="text-center font-weight-bold">DATA DE ADESÃO DO IP      </p></td>

							<td> 			 <p class="text-center font-weight-bold">FIDELIDADE COMPLETA DO IP FIXO</p></td>

							<td> 			 <p class="text-center font-weight-bold">FIDELIDADE FALTANTE DO IP FIXO </p></td>

							<td> 			 <p class="text-center font-weight-bold">VALOR DE FIDELIDADE DO IP FIXO </p> </td>

							<td> 			 <p class="text-center font-weight-bold">DIAS DE USO DO IP FIXO </p> </td>

							<td> 			 <p class="text-center font-weight-bold">VALOR DE DIA DE USO DO IP FIXO </p> </td>

						</tr>	

					</thead>

					<tbody>

						<tr>

							<td colspan="4"> <p class="text-center "> <?php echo"$data_ip" ?>             </p></td>

							<td> 			 <p class="text-center"> <?php echo"$meses_ip_com MESES" ?>        </p></td>

							<td> 			 <p class="text-center"> <?php echo"$meses_ip_fal MESES" ?>        </p></td>

							<td> 			 <p class="text-center"> <?php echo"R$ $valor_fidelidade_ip" ?> </p></td>

							<td> 			 <p class="text-center"> <?php echo"$dias_uso_ip DIAS" ?> </p></td>

							<td> 			 <p class="text-center"> <?php echo"R$ $valor_dias_uso_ip_fixo" ?> </p></td>

						</tr>	

					</tbody>

				</table>

			</div>

				<div class="d-flex justify-content-center">	

				<table class="table table-striped table-sm table-bordered ">

					<thead class="thead-dark">

						<tr>

							<td colspan="4"> <p class="text-center font-weight-bold">TOTAL </p></td>	

						</tr>	

					</thead>

					<tbody>

						<tr>

							<td colspan="4"> <p class="text-center"> <?php echo"R$$total_pagar" ?></p></td>

						</tr>	

					</tbody>

					

					<caption>Desenvolvido por Thiago Henrique da Silva Pinto @ Teleson Telecom Internet.</caption>

				</table>

			</div>

		</div>

</body>

</html>





<?php

}

else{

	// header('location:cal_fibra.php');

	?>

	<script type="text/javascript"> window.location.href = "cal_fibra.php" ;</script>

	<?php

}

// session_destroy();

?>





