<?php
    include_once("../class/conexao.php");
    session_start();
    $id = $_GET["id"];
    $dadosUsu = $_SESSION["dadosUsu"];

    $sql = "SELECT * from notificacao_fornecedor WHERE id = '$id'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $msg = $row["msg"];

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalhesforn.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Detalhes</title>
</head>
<body>
<header>
    <nav>
        <ul class="nav-list">
                <li><a href="../fornecedor/notificacoes.php"><button>Voltar</button></a></li>
        </ul>
    </nav>
</header> 
<div class="limiter">
  <div class="container">
  <div class="col-12">
    <div class="row">
    <div class="bloco">
    <?php if ($msg == "Seu serviço foi dispensado!") { ?>

        <h1>Seu serviço foi dispensado pelo organizador(a) do evento.</h1>
        <h2>Nome do evento: <?php echo "$row[nome_evento]";?></h2>
        

    <?php } if ($msg == "Seu serviço foi aceito!"){ ?>

        <h1>Seu serviço foi aceito pelo organizador(a) do evento.</h1> <br>
        <h2>Nome do evento: <?php echo "$row[nome_evento]";?></h2>
        <br>
    <?php }?>
    </div>
    </div>
    </div>
  </div>
    </div>
</body>
</html>