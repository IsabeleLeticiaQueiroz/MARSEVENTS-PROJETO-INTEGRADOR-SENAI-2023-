<?php
    include_once("../class/conexao.php");
    session_start();
    $id = $_GET["id"];
    $dadosUsu = $_SESSION["dadosUsu"];

    $sql = "SELECT * from notificacao_cliente WHERE id = '$id'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    $msg = $row["msg"];

    $sql2 = "SELECT * FROM especializacao WHERE id = '$row[servico]'";
    $result2 = $conn->query($sql2);
    if(mysqli_num_rows($result2) > 0){
    $row2 = mysqli_fetch_array($result2);
    $desc = $row2['desc'];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/detalhes.css">
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
                <li><a href="../cliente/notificacoes.php"><button>Voltar</button></a></li>
        </ul>
    </nav>
</header>      
<div class="limiter">
  <div class="container">
    <div class="col-12">
    <div class="row">
    <div class="bloco">
    <?php if ($msg == "Sua solicitação foi recusada!") { ?>

        <h1>Seu evento não foi aprovado pela equipe administradora da plataforma.</h1>
        <h2>Nome do evento: <?php echo "$row[nome_evento]";?></h2>

        <a class="botao" href="./perfil_cliente.php">Voltar</a>
        

    <?php } else if ($msg == "Sua solicitação foi aceita!"){ ?>

        <h1>Seu evento foi aprovado pela equipe administradora da plataforma.</h1>
        <h2>Nome do evento: <?php echo "$row[nome_evento]";?></h2>

    <?php } else if ($msg == "O fornecedor marcou um serviço no seu evento como feito"){?>
        <h1>O fornecedor marcou como feito o serviço de <?php echo $desc;?> realizado em seu evento: <?php echo $row['nome_evento'];?>.</h1>
        <h2>Deseja dar nota ao serviço dele?</h2> <br> <a class="botao" href="<?php echo './darnota.php?id='.$row['id'];?>">Sim</a> 
    <?php }else {
        $sql2 = "SELECT * from especializacao where id = '$row[servico]'";
        $result2 = $conn->query($sql2);
        $row2 = mysqli_fetch_assoc($result2);
        $servico = $row2["desc"];
        ?>
        
        <p>O provedor de serviços de <?php echo "$servico";?> cancelou o compromisso de trabalhar no seu evento <?php echo "$row[nome_evento]";?></p>

    <?php }?>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>