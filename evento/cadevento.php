<?php
include_once('../class/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="log/css/util.css">
    <link rel="stylesheet" type="text/css" href="log/css/cadEvee.css">
    

    <title>Cadastro de eventos</title>
</head>

<body>
    <form action="savecad_evento.php" method="POST" enctype="multipart/form-data" >
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-26">
                            CRIE SEU EVENTO
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Digite o nome do organizador">
                            <input class="input100" type="text" name="nome_dono" id="nome_dono" required>
                            <span class="focus-input100" data-placeholder="Insira o seu nome completo"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Digite o email do organizador">
                            <input class="input100" type="email" name="email_dono" id="email_dono" required>
                            <span class="focus-input100" data-placeholder="Insira o seu email"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Digite o nome do evento">
                            <input class="input100" type="text" name="nome_evento" id="nome_evento" required>
                            <span class="focus-input100" data-placeholder="Insira o nome do evento"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Digite data de evento">
                            <input class="input100" type="date" name="data" id="data" required>
                            <span class="focus-input100"></span>
                        </div>

                        <select name="categoria" id="categoria" class="opcao" required>
                        <option selected>Categoria</option>
                         <?php
                            $sql1 = "SELECT * FROM categoria_evento order by id";
                            $result1=mysqli_query($conn, $sql1);
                            while ($vreg1 = mysqli_fetch_assoc($result1)) {
                             $vid1 = $vreg1['id'];
                             $vdesc1 = $vreg1['desc'];
                            echo "<option value=$vid1>$vdesc1</option>";
                            }
                        ?>
                        </select>


                        <div class="wrap-input100 validate-input" data-validate="Digite o local do evento">
                            <input class="input100" type="text" name="local" id="local" required>
                            <span class="focus-input100" data-placeholder="Local do evento"></span>
                        </div>

                        <select name="forma_pagamento" id="forma_pagamento" class="opcao" required>
                            <option selected value="forma_pagamento">Evento gratuito ou pago?</option>
                         <option value="gratuito" id="gratuito">Gratuito</option>
                         <option value="pago" id="pago">Pago</option>
                        </select>


                        <div class="wrap-input100 validate-input" data-validate="Digite numero de ingressos">
                            <input class="input100" type="number" name="qtd_ingressos" id="qtd_ingressos" required>
                            <span class="focus-input100" data-placeholder="Número de ingressos"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Digite o valor dos ingressos">
                            <input class="input100" type="number" name="valor_ingresso" id="valor_ingresso" required>
                            <span class="focus-input100" data-placeholder="Valor dos ingressos"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Digite o limite de pessoas">
                            <input class="input100" type="number" name="qtd_pessoas" id="qtd_pessoas" required>
                            <span class="focus-input100" data-placeholder="Número de pessoas suportadas"></span>
                        </div>


                        <div class="wrap-input100 validate-input" data-validate="Digite o Horário do evento">
                            <input class="input100" type="time" name="horario" id="horario" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Limite de idade">
                            <input class="input100" type="number" name="rest_idade" id="rest_idade" required>
                            <span class="focus-input100" data-placeholder="Restrição de idade"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Descrição do evento">
                            <input class="input100" type="text" name="desc" id="desc" required>
                            <span class="focus-input100" data-placeholder="Descrição de evento "></span>
                        </div>

                        <select name="especializacao" id="especializacao" class="opcao" required>
                        <option selected>Serviço necessário</option>
                         <?php
                            $sql2 = "SELECT * FROM especializacao order by id";
                            $result2=mysqli_query($conn, $sql2);
                            while ($vreg2 = mysqli_fetch_assoc($result2)) {
                             $vid2 = $vreg2['id'];
                             $vdesc2 = $vreg2['desc'];
                            echo "<option value=$vid2>$vdesc2</option>";
                            }
                        ?>
                        </select>

                        <input type="file" name="foto_evento" id="foto_evento" class="inputfile" required>
                        <label for="foto_evento">Selecione uma foto do evento</label>   
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn" id="criar_event" name="criar_event">
                                    Criar Evento
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   



    </form>
    <script src="log/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="log/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="log/vendor/bootstrap/js/popper.js"></script>
    <script src="log/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="log/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="log/vendor/daterangepicker/moment.min.js"></script>
    <script src="log/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="log/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="log/js/main.js"></script>
</body>

</html>