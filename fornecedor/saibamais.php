<?php
    include_once("../class/conexao.php");
    session_start();
    $id = $_GET['id'];
    $dadosUsu= $_SESSION['dadosUsu'];

    $sql = "SELECT * from servicos WHERE id = $id";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);

    $sql2 = "SELECT * from especializacao where id = $row[especializacao]";
    $result2 = $conn->query($sql2);
    $row2 = mysqli_fetch_assoc($result2);
    $servico = $row2['desc'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu serviço</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
      <!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="..\evento\log\css\saibamais2.css">
    <link rel="stylesheet" href="..\evento\log\css\style.css">
</head>
<body>
    <div class="limiter">
    <div class="container-fluid teste">
    <div class="bloco">
        <div class="descer"></div>
    <h4 class="centroTxt"><?php echo" $row[nome_evento]";?></h4>
    <br><br>
    <h4>data: <?php echo "$row[data_evento]";?></h4>
    <h4>Horário: <?php echo "$row[horario]";?></h4>
    <h4>Meu serviço no evento: <?php echo "$servico";?></h4>
    <h4>Local do evento: <?php echo "$row[local_evento]";?></h4>
    <h4>Nome do(a) organizador(a) do evento: <?php echo"$row[nome_dono]";?></h4>
    <h4>Contato via email: <?php echo "$row[email_dono]";?></h4>
    <br><br>
    <a class ="botao" href="./perfil_fornecedor.php">Voltar</a>
    </div>
</div>
</div>
</body>
</html>