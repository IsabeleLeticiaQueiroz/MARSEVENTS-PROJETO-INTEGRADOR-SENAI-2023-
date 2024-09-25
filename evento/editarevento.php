<?php
include_once("../class/conexao.php");
session_start();
$dadosUsu = $_SESSION['dadosUsu'];
$idEv = $_GET['idEv'];
$sql = "SELECT * from eventos where id = $idEv";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['att_event'])) {
    $dados = [];
    $dados = $_POST;

    print_r($dados);

    if ($_FILES['foto_evento']['size'] > 0) {
        echo "Funfou";

        $pasta = "./imagens_evento/";
        $fotoAntiga = $row['foto'];
        unlink($pasta . $fotoAntiga);

        $extensao = strtolower(substr($_FILES['foto_evento']['name'], -5));
        $nome_img = md5(time()) . $extensao;
        move_uploaded_file($_FILES['foto_evento']['tmp_name'], $pasta . $nome_img);

        $sql2 = "UPDATE eventos SET nome = '$dados[nome_evento]', id_categoria = $dados[categoria], data_evento = '$dados[data]', horario = '$dados[horario]', local_evento = '$dados[local]', servico = '$dados[especializacao]', formas_pagamento = '$dados[forma_pagamento]', foto= '$nome_img', descricao = '$dados[desc]', rest_idade= '$dados[rest_idade]', qtd_pessoas = '$dados[qtd_pessoas]', valor_ingresso = '$dados[valor_ingresso]', qtd_ingressos = $dados[qtd_ingressos] WHERE id = $idEv";
        $result2 = $conn->query($sql2);

        echo "<script>alert('Seus dados foram editados com sucesso!');
    window.location.href = '../cliente/perfil_cliente.php';</script>";

     } else{
        $sql2 = "UPDATE eventos SET nome = '$dados[nome_evento]', id_categoria = $dados[categoria], data_evento = '$dados[data]', horario = '$dados[horario]', local_evento = '$dados[local]', servico = '$dados[especializacao]', formas_pagamento = '$dados[forma_pagamento]', descricao = '$dados[desc]', rest_idade= '$dados[rest_idade]', qtd_pessoas = '$dados[qtd_pessoas]', valor_ingresso = '$dados[valor_ingresso]', qtd_ingressos = $dados[qtd_ingressos] WHERE id = $idEv";
        $result2 = $conn->query($sql2);

        echo "<script>alert('Seus dados foram editados com sucesso!');
        window.location.href = '../cliente/perfil_cliente.php';</script>";
    }

  


}

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
    <link rel="stylesheet" type="text/css" href="log/css/cadEve.css">


    <title>Cadastro de eventos</title>
</head>

<body>     
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-26">
                            CRIE SEU EVENTO
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Digite o nome do evento">
                            <input class="input100" type="text" name="nome_evento" id="nome_evento"  value="<?php echo $row['nome']; ?>">

                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Digite data de evento">
                            <input class="input100" type="date" name="data" id="data"  value="<?php echo $row['data_evento']; ?>">

                        </div>

                        <select name="categoria" id="categoria" class="opcao" >
                            <?php
                                $sqlCat = "SELECT * FROM categoria_evento WHERE id = $row[id_categoria]";
                                $resultCat = mysqli_query($conn, $sqlCat);
                                $rowCat = mysqli_fetch_array($resultCat);
                            ?>
                            <option selected value="<?php echo $rowCat['id'] ?>"><?php echo $rowCat['desc'] ?></option>
                            <?php
                            $sql1 = "SELECT * FROM categoria_evento order by id";
                            $result1 = mysqli_query($conn, $sql1);
                            while ($vreg1 = mysqli_fetch_assoc($result1)) {
                                $vid1 = $vreg1['id'];
                                $vdesc1 = $vreg1['desc'];
                                echo "<option value=$vid1>$vdesc1</option>";
                            }
                            ?>
                        </select>


                        <div class="wrap-input100 validate-input" data-validate="Digite o local do evento">
                            <input class="input100" type="text" name="local" id="local"  value="<?php echo $row['local_evento']; ?>">

                        </div>

                        <select name="forma_pagamento" id="forma_pagamento" class="opcao" >
                            <option selected value="<?php echo $row['formas_pagamento'] ?>"><?php echo $row['formas_pagamento'] ?></option>
                            <option value="gratuito" id="gratuito">Gratuito</option>
                            <option value="pago" id="pago">Pago</option>
                        </select>


                        <div class="wrap-input100 validate-input" data-validate="Digite numero de ingressos">
                            <input class="input100" type="number" name="qtd_ingressos" id="qtd_ingressos"  value="<?php echo $row['qtd_ingressos']; ?>">

                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Digite o valor dos ingressos">
                            <input class="input100" type="number" name="valor_ingresso" id="valor_ingresso"  value="<?php echo $row['valor_ingresso']; ?>">

                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Digite o limite de pessoas">
                            <input class="input100" type="number" name="qtd_pessoas" id="qtd_pessoas"  value="<?php echo $row['qtd_pessoas']; ?>">

                        </div>


                        <div class="wrap-input100 validate-input" data-validate="Digite o Horário do evento">
                            <input class="input100" type="time" name="horario" id="horario"  value="<?php echo $row['horario']; ?>">

                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Limite de idade">
                            <input class="input100" type="number" name="rest_idade" id="rest_idade"  value="<?php echo $row['rest_idade']; ?>">

                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Descrição do evento">
                            <input class="input100" type="text" name="desc" id="desc"  value="<?php echo $row['descricao']; ?>">

                        </div>

                        <select name="especializacao" id="especializacao" class="opcao" >
                            <?php
                                $sqlEsp = "SELECT * FROM especializacao where id  = $row[servico];";
                                $resultEsp = mysqli_query($conn, $sqlEsp);
                                $rowEsp = mysqli_fetch_array($resultEsp);
                            ?>
                            <option selected value="<?php echo $rowEsp['id'] ?>"><?php echo $rowEsp['desc'] ?></option>
                            <?php
                            $sql2 = "SELECT * FROM especializacao order by id";
                            $result2 = mysqli_query($conn, $sql2);
                            while ($vreg2 = mysqli_fetch_assoc($result2)) {
                                $vid2 = $vreg2['id'];
                                $vdesc2 = $vreg2['desc'];
                                echo "<option value=$vid2>$vdesc2</option>";
                            }
                            ?>
                        </select>

                        <input type="file" name="foto_evento" id="foto_evento" class="inputfile"  value="">
                        <label for="foto_evento">Selecione uma foto do evento</label>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn" id="criar_event" name="att_event">
                                    atualizar
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