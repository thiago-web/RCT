<?php

session_start();

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

    <script src="jquery/JQuery.min.js"></script>

    <script src="js/esconde_mostra.js"></script>

    <link rel="stylesheet" href="css/estilo.css">

    <script type="text/javascript">

        function input_on ()

        {

            var data_can = getElementById('dt_cancelamento').value;



            if (data_can == "") 

            {

                alert("INFORME A DATA DE CANCELAMENTO !");

            }

            else

            {

                alert("TESTE");

            }

        }



    </script>



    <script language="JavaScript">

        function protegercodigo() {

        if (event.button==2||event.button==3){

            alert('Codigo protegido!');}

        }

        document.onmousedown=protegercodigo

    </script>

    </head>

<body >

    

    <script language="JavaScript">

            function protegercodigo()

            {

                if (event.button==2||event.button==3)

                {

                    alert('CÓDIGO PROTEGIDO !');

                }

            }

            document.onmousedown=protegercodigo

        </script>


    <div class = "  justify-content-center">
        <div class = "container-centered d-flex justify-content-center ">
            <div class = "container-centered d-flex justify-content-center  ">
                <h3 class = "display-4">
                    Cálculo de Cancelamento Normal
                </h3>
            </div> 
        </div>
            <!-- <div class = form-row>
                    <div class="container container-centered">
                        <div class = "form-group col-md-12">
                            <label for="radio_or_fibra"> Seleciona a Tecnologia</label>
                            <select class = "form-control"  name="radio_ou_fibra" id="radio_or_fibra" onclick="RF(this.value);" >
                                <option value=" " selected>Escolha </option>
                                <option value="RADIO">Radio</option>
                                <option value="FIBRA">Fibra</option>
                            </select>
                        </div>
                    </div>
                </div> -->
        
</body>

</html>