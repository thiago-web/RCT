<?php

    session_start();


    // $mes = '02';      // Mês desejado, pode ser por ser obtido por POST, GET, etc.
    // $ano = date("Y"); // Ano atual
    // $ultimo_dia = date("t", mktime(0,0,0,$mes,'01',$ano)); // Mágica, plim!

    //FORMTAÇÃO DE DATAS

    function formata_data_br($data)
    {
        return date("d/m/Y", strtotime($data));
    }
        function days_360($fecha1,$fecha2,$europeo=true) {
      //try switch dates: min to max
      if( $fecha1 > $fecha2 ) {
        $temf = $fecha1;
        $fecha1 = $fecha2;
        $fecha2 = $temf;
      }

      list($yy1, $mm1, $dd1) = explode('-', $fecha1);
      list($yy2, $mm2, $dd2) = explode('-', $fecha2);

      if( $dd1==31) { $dd1 = 30; }

      if(!$europeo) {
        if( ($dd1==30) and ($dd2==31) ) {
          $dd2=30;
        } else {
          if( $dd2==31 ) {
            $dd2=30;
          }
        }
      }

      if( ($dd1<1) or ($dd2<1) or ($dd1>30) or ($dd2>31) or
          ($mm1<1) or ($mm2<1) or ($mm1>12) or ($mm2>12) or
          ($yy1>$yy2) ) {
        return(-1);
      }
      if( ($yy1==$yy2) and ($mm1>$mm2) ) { return(-1); }
      if( ($yy1==$yy2) and ($mm1==$mm2) and ($dd1>$dd2) ) { return(-1); }
     
      //Calc
      $yy = $yy2-$yy1;
      $mm = $mm2-$mm1;
      $dd = $dd2-$dd1;
     
      return( ($yy*360)+($mm*30)+$dd );
    }

    $Radio_Fibra = $_POST['radio_ou_fibra'] = 'FIBRA';



    if(!empty($_POST['radio_ou_fibra']))

    {

        $Radio_Fibra = $_POST['radio_ou_fibra'] = 'FIBRA';

        if($Radio_Fibra == 'FIBRA')

        {

            //SE A VARIAVEL DA CIDADE NÃO ESTIVER VAZIA EU CONTINUO E ESTABELE UTRO VALOR A ELA

            if( !empty($_POST['data_cancelamento_fibra']) || !empty($_POST['dt_adesao_migra']) || !empty($_POST['planos']) || !empty($_POST['dt_pag']) || !empty($_POST['valor_outher_plan']) || !empty($_POST['name_outher_plan'])  )

            {

                //DECLARA AS VARIÁVEIS

                $dt_can = $_POST['data_cancelamento_fibra'];

                $dt_ade = $_POST['dt_adesao_migra'];

                $dt_ult = $_POST['dt_pag'];

                $plano_selected = $_POST['planos'];

                $ValueOutherPlan = $_POST['valor_outher_plan'];

                $NameOutherPlan = $_POST['name_outher_plan'];

                $multa_atr = 0.02;

                $dias_atr = 0.003;


                $dif = days_360($dt_can, $dt_ade);

                $dif = $dif / 30 ;

          
                $dif = floor($dif);

                

                // SE O CLIENTE NÃO COMPLETOU 12 MÊS DE FIDELIDADE
                if ($dif == 0) 
                {
                    // CLIENTE COMPLETOU NENHUM MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 0;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 12;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 580.00 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                // SE O CLIENTE NÃO COMPLETOU 11 MÊS DE FIDELIDADE
                if ($dif == 1) 
                {
                    // CLIENTE COMPLETOU 1 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 1;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 11;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 545.20 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                // SE O CLIENTE NÃO COMPLETOU 10 MÊS DE FIDELIDADE
                if ($dif == 2) 
                {
                    // CLIENTE COMPLETOU 1 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 2;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 10;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 510.40 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                // SE O CLIENTE NÃO COMPLETOU 09 MÊS DE FIDELIDADE
                if ($dif == 3) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 3;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 9;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 475.60 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                // SE O CLIENTE NÃO COMPLETOU 08 MÊS DE FIDELIDADE
                if ($dif == 4) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 4;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 8;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 440.80 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                // SE O CLIENTE NÃO COMPLETOU 07 MÊS DE FIDELIDADE
                if ($dif == 5) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 5;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 7;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 406.00 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                // SE O CLIENTE NÃO COMPLETOU 06 MÊS DE FIDELIDADE
                if ($dif == 6) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 6;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 6;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 371.20 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                    // SE O CLIENTE NÃO COMPLETOU 05 MÊS DE FIDELIDADE
                if ($dif == 7) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 7;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 5;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 336.40 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                    // SE O CLIENTE NÃO COMPLETOU 04 MÊS DE FIDELIDADE
                if ($dif == 8) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 8;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 4;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 301.60 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                    // SE O CLIENTE NÃO COMPLETOU 03 MÊS DE FIDELIDADE
                if ($dif == 9) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 9;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 3;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 266.80 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                    // SE O CLIENTE NÃO COMPLETOU 02 MÊS DE FIDELIDADE
                if ($dif == 10) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 10;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 2;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 232.00 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                    // SE O CLIENTE NÃO COMPLETOU 01 MÊS DE FIDELIDADE
                if ($dif == 11) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 11;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 1;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 197.20 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }
                
                if ($dif >= 12) 
                {
                    // CLIENTE COMPLETOU 2 MÊS DE FIDELIDADE
                    $meses_fidelidade_completados = 12;
                    // CLIENTE NÃO COMPLETOU 12 MESES DE FIDELIDADE
                    $meses_fidelidade_faltantes = 0;
                    // VALOR DA FIDELIDADE
                    $valor_fidelidade = 0.00 ;
                    // CRIA A VARIÁVEL NA SESSÃO
                    $_SESSION['fidelidade'] = $valor_fidelidade;

                }

                // echo("<br> FIDELIDADE COMPLETA(MESES)". $meses_fidelidade_completados);
                // echo("<br> FIDELIDADE FALTANTE(MESES)". $meses_fidelidade_faltantes);
                // echo("<br> VALOR FIDELIDADE: ". $valor_fidelidade);
    


                // VERIFICA PAGAMENTO 
                $dias = days_360($dt_can, $dt_ult);

                $dias_uso = $dias;

                if($dt_ult >= $dt_can){
                    $dias_uso = 0;
                    $dias_vencidos = 0;
                }

                //CALCULA DIAS DE USO

                if($plano_selected == '1')

                {

                    //VARIÁVEL QUE RECEBE O NOME DO PLANO

                    $nome_plano = "LIGHT 5";

                    //VARIAVEL QUE RECEBE O VALOR DO PLANO

                    $valor_plano = 79.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $multa_atr1 = 0.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dia_atr1 = 0.00;

                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dias_vencidos = 0;

                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $parcelas_aberto = 0;

                    // VARIÁVEL RECEBENDO O VALOR TOTAL DE PARCELARS EM ABERTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $valor_parcela_aberto = 0.00;

                    //VARIAVEL $d_30 RECEBEDO O VALOR IGUAL A 0(EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    //ESSA VARIAVEL SERÁ UTILIZADA PAA VALIDAR OS DIAS DE USO DA PARCELA MAIS ANTIGA

                    $d_30 = 0;

                    //SE O DIAS DE USP FOI INFERIOR OU IGUAL A 30

                    if($dias_uso <= 30)

                    {    

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                        $valor_dias_uso = $dias_uso * $valor_dia ;

                        //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                        $mostra_dias = $dias_uso;

                        //ATRIBUI O VALOR DA PARCELA 

                        $valor_parcela_aberto30 = $valor_dias_uso;   

                    }

                    //SE OS DIAS DE USO FOR MAIOR QUE 30

                    elseif($dias_uso > 30) 

                    {

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIÁVEL DE PARCELAS EM ABERTO RECEBE O VALOR DE 1 ;

                        $parcelas_aberto = 1;

                        //VALOR DA MULTA (VALOR DO PLANO * 2%) * O NÚMERO DE PARCELAS ;

                        $multa_atr1 = ($valor_plano * 0.02) * $parcelas_aberto;

                        //VALOR DE DIAS VENCIDOS É IGUAL DIAS DE USO - 30 ;

                        $dias_vencidos1 = $dias_uso - 30;

                        //MOSTRA DIAS VENCIDOS

                        $dias_vencidos = $dias_vencidos1;

                        //VALOR DO EM REAIS DOS DIAS VENCIDOS

                        $dia_atr1 = $dias_vencidos1 * 0.033;

                        //VARIÁVEL ALTERNATIVA DE MOSTRAR OS DIAS RECEBE IGUAL AOS DIAS VENCIDOS ;

                        $mostra_dias1 = $dias_uso - 30;

                        //VALOR DOS DIAS VENCIDOS

                        $valor_dven = $mostra_dias1 * $valor_dia;

                        //VALOR DOS DIAS DE USO EQUIVALENTE AOS DIAS UTILIZADOS

                        $valor_dias_uso = $mostra_dias1 * $valor_dia;

                        //VALOR DA PARCELA É IGUAL AO DIAS USO + MULTA POR ATRASO + DIAS EM ATRASO ; 

                        $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                        //VARIAVEL PARAMOSTRA OS DIAS RECEBENDOE O VALOR DE DIAS VENCIDOS

                        $mostra_dias = $dias_uso;

                        //POSSIBILIDADE DE VENCIMENTO // 1 - DOMINGO

                        // DOM - VALOR DO PLANO

                        // SE CLIENTE LIGA DIA 10 

                        if($DIA_DT_CAN_PAG == 10 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            elseif($SEMANA_DT_CAN_PAG == 1)

                            {   

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                        }

                        // SE O CLIENTE LIGA DIA 11 

                        if ($DIA_DT_CAN_PAG == 11) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {            

                                if($DIA_DT_CAN_PAG - 1 == 10)

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 10) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }  

                        // SE CLIENTE LIGA DIA 20 

                        if($DIA_DT_CAN_PAG == 20 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ; 

                            }

                        }

                        // SE O CLIENTE LIGA DIA 21 

                        if ($DIA_DT_CAN_PAG == 21) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {     

                                if($DIA_DT_CAN_PAG - 1 == 20)

                                {

                                    // $dias_uso = $dias_uso + 1;

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 20) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                    }     

                }



                elseif($plano_selected == '2')

                {   

                    //VÁRIÁVEL RECEBENDO O NOME DO PLANO ;

                    $nome_plano = "MASTER 20";

                    //VARIÁVEL RECEBENDO O VALOR DO PLANO ;

                    $valor_plano = 84.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $multa_atr1 = 0.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dia_atr1 = 0.00;

                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dias_vencidos = 0;

                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $parcelas_aberto = 0;

                    // VARIÁVEL RECEBENDO O VALOR TOTAL DE PARCELARS EM ABERTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $valor_parcela_aberto = 0.00;

                    //VARIAVEL $d_30 RECEBEDO O VALOR IGUAL A 0(EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    //ESSA VARIAVEL SERÁ UTILIZADA PAA VALIDAR OS DIAS DE USO DA PARCELA MAIS ANTIGA

                    $d_30 = 0;

                    //VARIAVEL RECEBENDO O DIA DA SEMANA DA DATA DE CANCELAMENTO ;

                    $SEMANA_DT_CAN_PAG = date('w', $dtt_can);

                    //VARIAVEL RECEBENDO O DIA DA DATA DE CANCELAMENTO ;

                    $DIA_DT_CAN_PAG = date('d',$dtt_can);

                    //SE O DIAS DE USP FOI INFERIOR OU IGUAL A 30

                    if($dias_uso <= 30)

                    {    

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                        $valor_dias_uso = $dias_uso * $valor_dia ;

                        //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                        $mostra_dias = $dias_uso;

                        //ATRIBUI O VALOR DA PARCELA 

                        $valor_parcela_aberto30 = $valor_dias_uso;   

                    }

                    //SE OS DIAS DE USO FOR MAIOR QUE 30

                    elseif($dias_uso > 30) 

                    {

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIÁVEL DE PARCELAS EM ABERTO RECEBE O VALOR DE 1 ;

                        $parcelas_aberto = 1;

                        //VALOR DA MULTA (VALOR DO PLANO * 2%) * O NÚMERO DE PARCELAS ;

                        $multa_atr1 = ($valor_plano * 0.02) * $parcelas_aberto;

                        //VALOR DE DIAS VENCIDOS É IGUAL DIAS DE USO - 30 ;

                        $dias_vencidos1 = $dias_uso - 30;

                        //MOSTRA DIAS VENCIDOS

                        $dias_vencidos = $dias_vencidos1;

                        //VALOR DO EM REAIS DOS DIAS VENCIDOS

                        $dia_atr1 = $dias_vencidos1 * 0.033;

                        //VARIÁVEL ALTERNATIVA DE MOSTRAR OS DIAS RECEBE IGUAL AOS DIAS VENCIDOS ;

                        $mostra_dias1 = $dias_uso - 30;

                        //VALOR DOS DIAS VENCIDOS

                        $valor_dven = $mostra_dias1 * $valor_dia;

                        //VALOR DOS DIAS DE USO EQUIVALENTE AOS DIAS UTILIZADOS

                        $valor_dias_uso = $mostra_dias1 * $valor_dia;

                        //VALOR DA PARCELA É IGUAL AO DIAS USO + MULTA POR ATRASO + DIAS EM ATRASO ; 

                        $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                        //VARIAVEL PARAMOSTRA OS DIAS RECEBENDOE O VALOR DE DIAS VENCIDOS

                        $mostra_dias = $dias_uso;

                        //POSSIBILIDADE DE VENCIMENTO // 1 - DOMINGO

                        // DOM - VALOR DO PLANO

                        // SE CLIENTE LIGA DIA 10 

                        if($DIA_DT_CAN_PAG == 10 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            elseif($SEMANA_DT_CAN_PAG == 1)

                            {   

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                        }

                        // SE O CLIENTE LIGA DIA 11 

                        if ($DIA_DT_CAN_PAG == 11) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {            

                                if($DIA_DT_CAN_PAG - 1 == 10)

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 10) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                      

                        // SE CLIENTE LIGA DIA 20 

                        if($DIA_DT_CAN_PAG == 20 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ; 

                            }

                        }

                        // SE O CLIENTE LIGA DIA 21 

                        if ($DIA_DT_CAN_PAG == 21) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {     

                                if($DIA_DT_CAN_PAG - 1 == 20)

                                {

                                    // $dias_uso = $dias_uso + 1;

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 20) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                    }

                }

                

                elseif($plano_selected == '3')

                {

                    //VÁRIÁVEL QUE RECEBE O NOME DO PLANO

                    $nome_plano = "SUPER 35";

                    //VARÁVEL QUE RECEBE O VALOR DO PLANO

                    $valor_plano = 109.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $multa_atr1 = 0.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dia_atr1 = 0.00;

                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dias_vencidos = 0;

                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $parcelas_aberto = 0;

                    // VARIÁVEL RECEBENDO O VALOR TOTAL DE PARCELARS EM ABERTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $valor_parcela_aberto = 0.00;

                    //VARIAVEL $d_30 RECEBEDO O VALOR IGUAL A 0(EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    //ESSA VARIAVEL SERÁ UTILIZADA PAA VALIDAR OS DIAS DE USO DA PARCELA MAIS ANTIGA

                    $d_30 = 0;

                    //VARIAVEL RECEBENDO O DIA DA SEMANA DA DATA DE CANCELAMENTO ;

                    $SEMANA_DT_CAN_PAG = date('w', $dtt_can);

                    //VARIAVEL RECEBENDO O DIA DA DATA DE CANCELAMENTO ;

                    $DIA_DT_CAN_PAG = date('d',$dtt_can);

                    //SE O DIAS DE USP FOI INFERIOR OU IGUAL A 30

                    if($dias_uso <= 30)

                    {    

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                        $valor_dias_uso = $dias_uso * $valor_dia ;

                        //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                        $mostra_dias = $dias_uso;

                        //ATRIBUI O VALOR DA PARCELA 

                        $valor_parcela_aberto30 = $valor_dias_uso;   

                    }

                    //SE OS DIAS DE USO FOR MAIOR QUE 30

                    elseif($dias_uso > 30) 

                    {

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIÁVEL DE PARCELAS EM ABERTO RECEBE O VALOR DE 1 ;

                        $parcelas_aberto = 1;

                        //VALOR DA MULTA (VALOR DO PLANO * 2%) * O NÚMERO DE PARCELAS ;

                        $multa_atr1 = ($valor_plano * 0.02) * $parcelas_aberto;

                        //VALOR DE DIAS VENCIDOS É IGUAL DIAS DE USO - 30 ;

                        $dias_vencidos1 = $dias_uso - 30;

                        //MOSTRA DIAS VENCIDOS

                        $dias_vencidos = $dias_vencidos1;

                        //VALOR DO EM REAIS DOS DIAS VENCIDOS

                        $dia_atr1 = $dias_vencidos1 * 0.033;

                        //VARIÁVEL ALTERNATIVA DE MOSTRAR OS DIAS RECEBE IGUAL AOS DIAS VENCIDOS ;

                        $mostra_dias1 = $dias_uso - 30;

                        //VALOR DOS DIAS VENCIDOS

                        $valor_dven = $mostra_dias1 * $valor_dia;

                        //VALOR DOS DIAS DE USO EQUIVALENTE AOS DIAS UTILIZADOS

                        $valor_dias_uso = $mostra_dias1 * $valor_dia;

                        //VALOR DA PARCELA É IGUAL AO DIAS USO + MULTA POR ATRASO + DIAS EM ATRASO ; 

                        $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                        //VARIAVEL PARAMOSTRA OS DIAS RECEBENDOE O VALOR DE DIAS VENCIDOS

                        $mostra_dias = $dias_uso;

                        //POSSIBILIDADE DE VENCIMENTO // 1 - DOMINGO

                        // DOM - VALOR DO PLANO

                        // SE CLIENTE LIGA DIA 10 

                        if($DIA_DT_CAN_PAG == 10 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            elseif($SEMANA_DT_CAN_PAG == 1)

                            {   

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                        }

                        // SE O CLIENTE LIGA DIA 11 

                        if ($DIA_DT_CAN_PAG == 11) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {            

                                if($DIA_DT_CAN_PAG - 1 == 10)

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 10) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                      

                        // SE CLIENTE LIGA DIA 20 

                        if($DIA_DT_CAN_PAG == 20 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ; 

                            }

                        }

                        // SE O CLIENTE LIGA DIA 21 

                        if ($DIA_DT_CAN_PAG == 21) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {     

                                if($DIA_DT_CAN_PAG - 1 == 20)

                                {

                                    // $dias_uso = $dias_uso + 1;

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 20) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                    }

                }

                elseif($plano_selected == '4')

                {

                    //VARIÁVEL QUE RECEBE O NOME DO PLANO

                    $nome_plano = "ULTRA 50";

                    //VARIÁVEL QUE RECEBE O VALOR DO PLANO

                    $valor_plano = 149.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $multa_atr1 = 0.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dia_atr1 = 0.00;

                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dias_vencidos = 0;

                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $parcelas_aberto = 0;

                    // VARIÁVEL RECEBENDO O VALOR TOTAL DE PARCELARS EM ABERTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $valor_parcela_aberto = 0.00;

                    //VARIAVEL $d_30 RECEBEDO O VALOR IGUAL A 0(EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    //ESSA VARIAVEL SERÁ UTILIZADA PAA VALIDAR OS DIAS DE USO DA PARCELA MAIS ANTIGA

                    $d_30 = 0;

                    //VARIAVEL RECEBENDO O DIA DA SEMANA DA DATA DE CANCELAMENTO ;

                    $SEMANA_DT_CAN_PAG = date('w', $dtt_can);

                    //VARIAVEL RECEBENDO O DIA DA DATA DE CANCELAMENTO ;

                    $DIA_DT_CAN_PAG = date('d',$dtt_can);

                    //SE O DIAS DE USP FOI INFERIOR OU IGUAL A 30

                    if($dias_uso <= 30)

                    {    

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                        $valor_dias_uso = $dias_uso * $valor_dia ;

                        //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                        $mostra_dias = $dias_uso;

                        //ATRIBUI O VALOR DA PARCELA 

                        $valor_parcela_aberto30 = $valor_dias_uso;   

                    }

                    //SE OS DIAS DE USO FOR MAIOR QUE 30

                    elseif($dias_uso > 30) 

                    {

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIÁVEL DE PARCELAS EM ABERTO RECEBE O VALOR DE 1 ;

                        $parcelas_aberto = 1;

                        //VALOR DA MULTA (VALOR DO PLANO * 2%) * O NÚMERO DE PARCELAS ;

                        $multa_atr1 = ($valor_plano * 0.02) * $parcelas_aberto;

                        //VALOR DE DIAS VENCIDOS É IGUAL DIAS DE USO - 30 ;

                        $dias_vencidos1 = $dias_uso - 30;

                        //MOSTRA DIAS VENCIDOS

                        $dias_vencidos = $dias_vencidos1;

                        //VALOR DO EM REAIS DOS DIAS VENCIDOS

                        $dia_atr1 = $dias_vencidos1 * 0.033;

                        //VARIÁVEL ALTERNATIVA DE MOSTRAR OS DIAS RECEBE IGUAL AOS DIAS VENCIDOS ;

                        $mostra_dias1 = $dias_uso - 30;

                        //VALOR DOS DIAS VENCIDOS

                        $valor_dven = $mostra_dias1 * $valor_dia;

                        //VALOR DOS DIAS DE USO EQUIVALENTE AOS DIAS UTILIZADOS

                        $valor_dias_uso = $mostra_dias1 * $valor_dia;

                        //VALOR DA PARCELA É IGUAL AO DIAS USO + MULTA POR ATRASO + DIAS EM ATRASO ; 

                        $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                        //VARIAVEL PARAMOSTRA OS DIAS RECEBENDOE O VALOR DE DIAS VENCIDOS

                        $mostra_dias = $dias_uso;

                        //POSSIBILIDADE DE VENCIMENTO // 1 - DOMINGO

                        // DOM - VALOR DO PLANO

                        // SE CLIENTE LIGA DIA 10 

                        if($DIA_DT_CAN_PAG == 10 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            elseif($SEMANA_DT_CAN_PAG == 1)

                            {   

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                        }

                        // SE O CLIENTE LIGA DIA 11 

                        if ($DIA_DT_CAN_PAG == 11) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {            

                                if($DIA_DT_CAN_PAG - 1 == 10)

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 10) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                      

                        // SE CLIENTE LIGA DIA 20 

                        if($DIA_DT_CAN_PAG == 20 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ; 

                            }

                        }

                        // SE O CLIENTE LIGA DIA 21 

                        if ($DIA_DT_CAN_PAG == 21) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {     

                                if($DIA_DT_CAN_PAG - 1 == 20)

                                {

                                    // $dias_uso = $dias_uso + 1;

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 20) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                    }

                }

                elseif($plano_selected == '5')

                {

                    //VARIÁVEL QUE RECEBE O NOME DO PLANO

                    $nome_plano = "HIPER 100";

                    //VARIÁVEL QUE RECEBE O VALOR DO PLANO

                    $valor_plano = 199.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $multa_atr1 = 0.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dia_atr1 = 0.00;

                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dias_vencidos = 0;

                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $parcelas_aberto = 0;

                    // VARIÁVEL RECEBENDO O VALOR TOTAL DE PARCELARS EM ABERTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $valor_parcela_aberto = 0.00;

                    //VARIAVEL $d_30 RECEBEDO O VALOR IGUAL A 0(EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    //ESSA VARIAVEL SERÁ UTILIZADA PAA VALIDAR OS DIAS DE USO DA PARCELA MAIS ANTIGA

                    $d_30 = 0;

                    //VARIAVEL RECEBENDO O DIA DA SEMANA DA DATA DE CANCELAMENTO ;

                    $SEMANA_DT_CAN_PAG = date('w', $dtt_can);

                    //VARIAVEL RECEBENDO O DIA DA DATA DE CANCELAMENTO ;

                    $DIA_DT_CAN_PAG = date('d',$dtt_can);

                    //SE O DIAS DE USP FOI INFERIOR OU IGUAL A 30

                    if($dias_uso <= 30)

                    {    

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                        $valor_dias_uso = $dias_uso * $valor_dia ;

                        //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                        $mostra_dias = $dias_uso;

                        //ATRIBUI O VALOR DA PARCELA 

                        $valor_parcela_aberto30 = $valor_dias_uso;   

                    }

                    //SE OS DIAS DE USO FOR MAIOR QUE 30

                    elseif($dias_uso > 30) 

                    {

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIÁVEL DE PARCELAS EM ABERTO RECEBE O VALOR DE 1 ;

                        $parcelas_aberto = 1;

                        //VALOR DA MULTA (VALOR DO PLANO * 2%) * O NÚMERO DE PARCELAS ;

                        $multa_atr1 = ($valor_plano * 0.02) * $parcelas_aberto;

                        //VALOR DE DIAS VENCIDOS É IGUAL DIAS DE USO - 30 ;

                        $dias_vencidos1 = $dias_uso - 30;

                        //MOSTRA DIAS VENCIDOS

                        $dias_vencidos = $dias_vencidos1;

                        //VALOR DO EM REAIS DOS DIAS VENCIDOS

                        $dia_atr1 = $dias_vencidos1 * 0.033;

                        //VARIÁVEL ALTERNATIVA DE MOSTRAR OS DIAS RECEBE IGUAL AOS DIAS VENCIDOS ;

                        $mostra_dias1 = $dias_uso - 30;

                        //VALOR DOS DIAS VENCIDOS

                        $valor_dven = $mostra_dias1 * $valor_dia;

                        //VALOR DOS DIAS DE USO EQUIVALENTE AOS DIAS UTILIZADOS

                        $valor_dias_uso = $mostra_dias1 * $valor_dia;

                        //VALOR DA PARCELA É IGUAL AO DIAS USO + MULTA POR ATRASO + DIAS EM ATRASO ; 

                        $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                        //VARIAVEL PARAMOSTRA OS DIAS RECEBENDOE O VALOR DE DIAS VENCIDOS

                        $mostra_dias = $dias_uso;

                        //POSSIBILIDADE DE VENCIMENTO // 1 - DOMINGO

                        // DOM - VALOR DO PLANO

                        // SE CLIENTE LIGA DIA 10 

                        if($DIA_DT_CAN_PAG == 10 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            elseif($SEMANA_DT_CAN_PAG == 1)

                            {   

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                        }

                        // SE O CLIENTE LIGA DIA 11 

                        if ($DIA_DT_CAN_PAG == 11) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {            

                                if($DIA_DT_CAN_PAG - 1 == 10)

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 10) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                      

                        // SE CLIENTE LIGA DIA 20 

                        if($DIA_DT_CAN_PAG == 20 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ; 

                            }

                        }

                        // SE O CLIENTE LIGA DIA 21 

                        if ($DIA_DT_CAN_PAG == 21) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {     

                                if($DIA_DT_CAN_PAG - 1 == 20)

                                {

                                    // $dias_uso = $dias_uso + 1;

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 20) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                    }

                } 

                else

                {

                    //SE O VALOR DE OUTRO PLANO NULO

                    if($ValueOutherPlan == NULL )

                    {  

                        //VALOR DE OUTRO PLANO É A 0 ;

                        $ValueOutherPlan = 0.00;

                    }



                    //VARIAVEL QUE RECEBE O NOME DO PLANO
                    $NameOutherPlan = strtoupper($NameOutherPlan);
                    $nome_plano = $NameOutherPlan;


                    //VARIÁVEL QUE RECEBE O VALOR DO PLANO

                    $valor_plano = $ValueOutherPlan;

                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $multa_atr1 = 0.00;

                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dia_atr1 = 0.00;

                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $dias_vencidos = 0;

                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $parcelas_aberto = 0;

                    // VARIÁVEL RECEBENDO O VALOR TOTAL DE PARCELARS EM ABERTO = 0.00 (EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    $valor_parcela_aberto = 0.00;

                    //VARIAVEL $d_30 RECEBEDO O VALOR IGUAL A 0(EM ALGUNS CASOS A VARIÁVEL VAZIA PODE RECEBER O VALOR DA MEMÓRIA E CAUSAR ALGUM ERRO) ;

                    //ESSA VARIAVEL SERÁ UTILIZADA PAA VALIDAR OS DIAS DE USO DA PARCELA MAIS ANTIGA

                    $d_30 = 0;

                    //VARIAVEL RECEBENDO O DIA DA SEMANA DA DATA DE CANCELAMENTO ;

                    $SEMANA_DT_CAN_PAG = date('w', $dtt_can);

                    //VARIAVEL RECEBENDO O DIA DA DATA DE CANCELAMENTO ;

                    $DIA_DT_CAN_PAG = date('d',$dtt_can);

                    //SE O DIAS DE USP FOI INFERIOR OU IGUAL A 30

                    if($dias_uso <= 30)

                    {    

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;



                        //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                        $valor_dias_uso = $dias_uso * $valor_dia ;

                        

                        //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                        $mostra_dias = $dias_uso;



                        //ATRIBUI O VALOR DA PARCELA 

                        $valor_parcela_aberto30 = $valor_dias_uso;   

                    }

                    //SE OS DIAS DE USO FOR MAIOR QUE 30

                    elseif($dias_uso > 30) 

                    {

                        //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                        $valor_dia = $valor_plano / 30 ;

                        //VARIÁVEL DE PARCELAS EM ABERTO RECEBE O VALOR DE 1 ;

                        $parcelas_aberto = 1;

                        //VALOR DA MULTA (VALOR DO PLANO * 2%) * O NÚMERO DE PARCELAS ;

                        $multa_atr1 = ($valor_plano * 0.02) * $parcelas_aberto;

                        //VALOR DE DIAS VENCIDOS É IGUAL DIAS DE USO - 30 ;

                        $dias_vencidos1 = $dias_uso - 30;

                        //MOSTRA DIAS VENCIDOS

                        $dias_vencidos = $dias_vencidos1;

                        //VALOR DO EM REAIS DOS DIAS VENCIDOS

                        $dia_atr1 = $dias_vencidos1 * 0.033;

                        //VARIÁVEL ALTERNATIVA DE MOSTRAR OS DIAS RECEBE IGUAL AOS DIAS VENCIDOS ;

                        $mostra_dias1 = $dias_uso - 30;

                        //VALOR DOS DIAS VENCIDOS

                        $valor_dven = $mostra_dias1 * $valor_dia;

                        //VALOR DOS DIAS DE USO EQUIVALENTE AOS DIAS UTILIZADOS

                        $valor_dias_uso = $dias_uso * $valor_dia;

                        //VALOR DA PARCELA É IGUAL AO DIAS USO + MULTA POR ATRASO + DIAS EM ATRASO ; 

                        $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                        //VARIAVEL PARAMOSTRA OS DIAS RECEBENDOE O VALOR DE DIAS VENCIDOS

                        $mostra_dias = $dias_uso;

                        //POSSIBILIDADE DE VENCIMENTO // 1 - DOMINGO

                        // DOM - VALOR DO PLANO

                        // SE CLIENTE LIGA DIA 10 

                        if($DIA_DT_CAN_PAG == 10 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {                     

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;            

                            }

                            elseif($SEMANA_DT_CAN_PAG == 1)

                            {   

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                        }

                        // SE O CLIENTE LIGA DIA 11 

                        if ($DIA_DT_CAN_PAG == 11) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {       

                                if($DIA_DT_CAN_PAG - 1 == 10)

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }



                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 10) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                      

                        // SE CLIENTE LIGA DIA 20 

                        if($DIA_DT_CAN_PAG == 20 ) 

                        {   

                            // SE FOR SÁBADO ;

                            if($SEMANA_DT_CAN_PAG == 6)

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                            

                            // SE FOR DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 0 ) 

                            {

                                //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                $d_30 = 30;

                                //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                $valor_dia = $valor_plano / 30 ;

                                //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                $valor_dias_uso = $d_30 * $valor_dia ;

                                //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                $multa_atr1 = 0.00;

                                //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                $dia_atr1 = 0.00;

                                // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                $dias_vencidos = 0;

                                // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                $parcelas_aberto = 0;

                                //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                $mostra_dias = $d_30;

                                //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                            }

                        }

                        // SE O CLIENTE LIGA DIA 21 

                        if ($DIA_DT_CAN_PAG == 21) 

                        {   

                            // O VENCIMENTO É SÁBADO

                            // SE O DIA ANTERIOR É SÁBADO

                            if($SEMANA_DT_CAN_PAG == 0)

                            {

                                if($DIA_DT_CAN_PAG - 1 == 20)

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;

                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;

                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;

                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;

                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;

                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;

                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;

                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                            // E O VENCIMENTO É DOMINGO

                            // E O DIA ANTERIOR É DOMINGO

                            elseif ($SEMANA_DT_CAN_PAG == 1) 

                            {

                                if ($DIA_DT_CAN_PAG - 1 == 20) 

                                {

                                    //VARIAVEL $d_30 RECEBE O VALOR DE 30 DIAS ;

                                    $d_30 = 30;



                                    //VÁRIAVEL RECEBENDO O VALOR DO DIA (VALOR DO PLANO / 30) ;

                                    $valor_dia = $valor_plano / 30 ;

                            

                                    //VARIAVEL RECEBENDO O VALOR TOTAL DOS DIAS DE USO EM REAIS (DIAS * VALOR DO DIA) ;

                                    $valor_dias_uso = $d_30 * $valor_dia ;



                                    //VARIÁVEL RECEBENDO O VALOR DA MULTA POR VENCIMENTO = 0.00  ;

                                    $multa_atr1 = 0.00;



                                    //VARIÁVEL RECEBENDO O VALOR DA MORA DIÁRIA = 0.00 ;

                                    $dia_atr1 = 0.00;



                                    // VARIÁVEL RECEBENDO OS DIAS VENCIDOS = 0.00 ;

                                    $dias_vencidos = 0;



                                    // VARIÁVEL RECEBENDO AS PARCELAS EM ABERTO = 0 ;

                                    $parcelas_aberto = 0;



                                    //VARIAVEL QUE MOSTRA OS DIAS DE USO RECEBENDO O VALOR IGUAL AOS DIAS DE USO ;

                                    $mostra_dias = $d_30;



                                    //VALOR DA PARCELA MAIS ANTIGA RECEBE O VALOR DO DIAS + MULTA POR ATRASO + MORA DIÁRIA ;

                                    $valor_parcela_aberto30 = $valor_plano + $multa_atr1 + $dia_atr1 ;

                                }

                            }

                        }

                    } 

                }



                if(!empty($_POST['select_ip_fix']))

                {

                    $possui_ip = $_POST['select_ip_fix'];

                    if($possui_ip == "SIM")

                    {

                           

                        if( !empty($_POST['dt_adesao_ipfixo']))

                        {   

                            $dt_ip_fixo = $_POST['dt_adesao_ipfixo'];



                            //CALCULA DIAS DU USO DO IP FIXO

                            $diferença_dias_ip = strtotime($dt_can) - strtotime($dt_ult); 

                            $dias_uso_ip = floor($diferença_dias_ip / (60 * 60 * 24)); 



                            $valor_ip_fixo = 40.00 ; // 

                            $valor_dia_ip_fixo = 1.33  ; //

                            $valor_dias_uso_ip_fixo = $dias_uso_ip * $valor_dia_ip_fixo ;

                            $dias_30ip = 0;



                            // TOTAL DIAS DO MES DE PAGAMENTO



                            $dias_uso_ip = $mostra_dias;

                            $valor_dias_uso_ip_fixo = $dias_uso_ip * $valor_dia_ip_fixo ;   

                                

                            



                            //CALCULA FIDELIDADE DO IP FIXO

                            $diferença_fidelidade_ip_fixo = strtotime($dt_can) - strtotime($dt_ip_fixo);

                            $dias_fidelidade_ip_fixo = floor($diferença_fidelidade_ip_fixo / (60 * 60 * 24));

                            $meses_com_ip = floor($dias_fidelidade_ip_fixo / 30);

                            $meses_flt_ip =  3 - floor($dias_fidelidade_ip_fixo / 30);



                            if( $meses_flt_ip == 3)

                            {

                                $valor_fidelidade_ip = $meses_flt_ip * 40.00 ;

                            }

                            else  

                            {

                                if($meses_flt_ip == 2) 

                                {

                                    $valor_fidelidade_ip = $meses_flt_ip * 40.00 ;

                                }

                                else

                                {

                                    if($meses_flt_ip == 1)

                                    {

                                        $valor_fidelidade_ip = $meses_flt_ip * 40.00 ;

                                    }

                                    else

                                    {

                                        $meses_flt_ip = 0;

                                        $meses_com_ip = 3;

                                        $valor_fidelidade_ip = $meses_flt_ip * 40.00 ;

                                    }       

                                }

                            }    

                        }

                    }

                    else

                    {

                        $meses_flt_ip = 0;

                        $meses_com_ip = 0;

                        $valor_fidelidade_ip = $meses_flt_ip * 40.00 ; 

                        $dt_ip_fixo = NULL;

                        $valor_dias_uso_ip_fixo = 0.00;

                        $dias_uso_ip = 0;



                        $sem_ip =  "<br> CLIENTE NÃO ADQUIRIU O IP FIXO";

                    }                     

                }

                    

                

                if($dias_uso < 0){ $dias_uso = 0; $valor_dias_uso = 0.00; $dias_uso_ip = 0; $valor_dias_uso_ip_fixo = 0;}

                $multa_atr = $multa_atr1  ;

                $dia_atr = $dia_atr1;



                if ($parcelas_aberto == 0) 

                {

                    $valor_parcela_aberto30 = 0.00 ;

                }



                $total  = $valor_fidelidade + $valor_dias_uso + $valor_fidelidade_ip + $valor_dias_uso_ip_fixo + 

                $valor_parcela_aberto30 ;

                $valor_parcela_aberto = $valor_parcela_aberto30 ;

                $dt_ade = formata_data_br($dt_ade);

                $dt_can = formata_data_br($dt_can);

                $dt_ult = formata_data_br($dt_ult);

                $dt_ip_fixo = formata_data_br($dt_ip_fixo);

                if($dt_ade == '31/12/1969')

                {

                    $dt_ade = '____';

                }

                if($dt_can != $dt_can)

                {

                    $dt_can = '____';

                    $meses_fidelidade_completados = 0;

                    $meses_fidelidade_faltantes = 0;

                    $valor_fidelidade = 0.00;

                    $dias_uso = 0;

                }

                if($dt_ult == '31/12/1969')

                {

                    $dt_ult = '____';

                    $parcelas_aberto = 0;

                    $valor_parcela_aberto = 0;

                    $dias_uso = 0;

                    $valor_dias_uso = 0.00;

                    $d_45 = 0 ;

                    $valor_parcela_aberto30 = 0.00;

                    $valor_parcela_aberto60 = 0.00;

                }

                if($dt_ip_fixo == '31/12/1969')

                {

                    $dt_ip_fixo = '____';

                }



                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'rct_teleson';
                $conect = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
                $proto = "SELECT id, protocolo FROM atendimentos ORDER BY ID DESC LIMIT 1 ";
                $result_pro = mysqli_query($conect, $proto);
                $dado = mysqli_fetch_assoc($result_pro);
                $id = $dado['id'] + 1;
                // $id = number_format($id,2);
                $protocolo = 'RCT.'.$id;
                    
                // Guarda no banco
                $cpf_cliente = $_POST['cliente'];

                $dt_ade = implode('-', array_reverse(explode('/', $dt_ade)));
                $dt_can = implode('-', array_reverse(explode('/', $dt_can)));
                $dt_ult = implode('-', array_reverse(explode('/', $dt_ult)));
                $dt_ip_fixo = implode('-', array_reverse(explode('/', $dt_ip_fixo)));   

                $adc = "INSERT INTO cancelamentos 
                (protocolo, cpf_cliente, plano, valor, dt_ativacao, dt_cancelamento, dt_ultimapaga, dt_adesaoip, fidelidade, valor_fidelidade, dias_uso, valor_diasuso, total_fatura)
                VALUES 
                ('$protocolo', '$cpf_cliente','$nome_plano', '$valor_plano', '$dt_ade', '$dt_can', '$dt_ult', '$dt_ip_fixo', 
                 '$meses_fidelidade_faltantes', '$valor_fidelidade', '$dias_uso', '$valor_dias_uso', '$total'  )";

                $result_adc = mysqli_query($conect, $adc);
                if($result_adc){


                    $guarda_proto = "INSERT INTO atendimentos (protocolo )  VALUES('$protocolo')";
                    $result_proto = mysqli_query($conect, $guarda_proto);

                    $selec_adesao  = "SELECT SUM(xadesao) as soma_ade FROM grafico_semanal";
                    $result_adesao = mysqli_query($conect, $selec_adesao);

                    $dado = mysqli_fetch_assoc($result_adesao);

                    echo $dado['soma_ade'];

                   

                    $insert_grafico = "INSERT INTO grafico_semanal (protocolo, semana_dado, xcancelamento, dif_diaria) 
                    VALUES ('$protocolo', '1') ";
                    $result_grafico = mysqli_query($conect, $insert_grafico);

                }
                else{
                    echo "Erro:" .mysqli_error($conect);
                }

               

                //ENVIANDO AS VARIÁVEIS PARA A SESSÃO

                //PLANO DO CLIENTE

                $_SESSION['plano_cliente'] = $nome_plano ;

                //VALOR DO PLANO

                $_SESSION['valor_plano_cliente'] = $valor_plano;

                //DATA DE ADESÃO/MIGRAÇÃO

                $_SESSION['dt_adesao_cliente'] = $dt_ade;

                //DATA DE CANCELAMENTO

                $_SESSION['dt_cancelamento_cliente'] = $dt_can;

                //MESES DE FIDELIDADE COMPLETADOS

                $_SESSION['meses_faltantes_fidelidade_cliente'] = $meses_fidelidade_faltantes;

                //MESES DE FIDELIDADE FALTANTES

                $_SESSION['meses_completados_fidelidade_cliente'] = $meses_fidelidade_completados;

                //VALOR DE FIDELIDADE A COBRAR

                $_SESSION['valor_fidelidade_cliente'] = $valor_fidelidade;

                //DATA DA ULTIMA MENSALIDADE PAGA

                $_SESSION['dt_ult_cliente'] = $dt_ult;

                //DIAS DE USO

                $_SESSION['dias_uso_cliente'] = $dias_uso;

                //MOSTRA DIAS

                $_SESSION['mostra_dias_cliente'] = $mostra_dias;

                //VALOR EM DIAS DE USO

                $_SESSION['valor_dias_uso_cliente'] = $valor_dias_uso;

                //DIAS DE USO DO CLIENTE

                $_SESSION['mostra_diasvencidos_cliente'] = $dias_vencidos;

                //VALOR PARCELA 1

                $_SESSION['valor_parcela1_cliente'] = $valor_parcela_aberto30;

                //MULTA POR ATRASO 2% - 0,02.

                $_SESSION['multa_atr_cliente'] = $multa_atr;

                //MORA DIARIA 0.003% - 0,033.

                $_SESSION['dias_atr_cliente'] = $dia_atr;

                //DATA DO IP FIXO

                $_SESSION['dt_ip_fixo_cliente'] = $dt_ip_fixo;

                //MESES DE FIDELIDADE DO IP FIXO COMPLETADOS

                $_SESSION['$meses_com_ip_cliente'] = $meses_com_ip;

                //MESES DE FIDELIDADE DO IP FIXO FALTANTES

                $_SESSION['$meses_flt_ip_cliente'] = $meses_flt_ip ;

                //VALOR DE FIDELIDADE DO IP FIXO

                $_SESSION['valor_fidelidade_ip_clinete'] = $valor_fidelidade_ip;

                //DIAS DE USO DO IP FIXO

                $_SESSION['dias_uso_ip_cliente'] = $dias_uso_ip;

                //VALOR DOS DIAS DE USO DO IP FIXO

                $_SESSION['valor_dias_uso_ip_fixo_cliente'] = $valor_dias_uso_ip_fixo;

                //NÚMERO DE PARCELAS EM ABERTO

                $_SESSION['parcelas_aberto_cliente'] = $parcelas_aberto;

                //CALOR PARCELA EM ABERTO

                $_SESSION['valor_parcela_aberto_cliente'] = $valor_parcela_aberto;

                //TOTAL

                $_SESSION['total_cliente'] = $total;

                
                $_SESSION['enviou'] = 0;


                // header('location:resultado.php');  

                ?>

                <!-- <script type="text/javascript"> window.location.href = "resultado.php" ;</script> -->

                <?php 
                

            } 

        }

    }  

?>