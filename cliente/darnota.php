<?php
include_once("../class/conexao.php");
session_start();
$id = $_GET['id'];
//echo $id ; 

$sql = "SELECT * from notificacao_cliente WHERE id = '$id'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

$sql2 = "SELECT * FROM feitos where nome_evento = '$row[nome_evento]' AND email_dono = '$row[email]' ";
$result2 = $conn->query($sql2);
$row2 = mysqli_fetch_array($result2);

$sql3 = "SELECT * FROM  fornecedor where email = '$row2[email_fornecedor]' and id_especializacao =$row2[especializacao]";
$result3 = $conn->query($sql3);
$row3 = mysqli_fetch_array($result3);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/darnota.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar Profissional</title>

</head>

<body>
<header>
    <nav>
        <ul class="nav-list">
                <li><a href="../cliente/perfil_cliente.php"><button>Voltar</button></a></li>
        </ul>
    </nav>
</header>
<div class="limiter">
    <div class="col-12">
        <div class="row">
  <div class="container">
    <div class="bloco">
    <h1>Dê sua avaliação!</h1> <br> 
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="estrelas">
            <input type="radio" id="vazio" name="estrela" value="" checked>

            <label for="estrela_um"><i class="fa"></i></label>
            <input type="radio" id="estrela_um" name="estrela" value="1">

            <label for="estrela_dois"><i class="fa"></i></label>
            <input type="radio" id="estrela_dois" name="estrela" value="2">

            <label for="estrela_tres"><i class="fa"></i></label>
            <input type="radio" id="estrela_tres" name="estrela" value="3">

            <label for="estrela_quatro"><i class="fa"></i></label>
            <input type="radio" id="estrela_quatro" name="estrela" value="4">

            <label for="estrela_cinco"><i class="fa"></i></label>
            <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>

            <input type="submit" class="custom-btn3" value="Avaliar">

        </div>
        </div>
  </div>
        </div>
        </div>
    </div>
    </form>
</body>

</html>
<?php

include_once("../class/conexao.php");

if (!empty($_POST['estrela'])) {
    $estrela = $_POST['estrela'];

    //Salvar no banco de dados
    $result_avaliacos = "INSERT INTO avaliacoes (nota, email_fornecedor) VALUES ($estrela, '$row2[email_fornecedor]')";
    $resultado_avaliacos = mysqli_query($conn, $result_avaliacos);

    echo "<script>
    alert('Mars Events agradece sua avaliação!');
    window.location.href='../fornecedor/notafinal.php';
</script>";
}
?>