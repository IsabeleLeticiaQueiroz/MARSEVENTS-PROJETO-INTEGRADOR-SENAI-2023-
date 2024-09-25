<?php
include_once("../class/conexao.php");
session_start();
$id = $_GET["id"];


$sql = "SELECT * from solicitacoes where id = '$id'";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
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

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/vermais.css">
    <link rel="shortcut icon" href="imagens_adm/logosemletra.png" type="image/x-icon">
    <title>Ver mais</title>
</head>

<body>

<header>
    <nav>
        <a class="logo" href=""><img class="img" src="imagens_adm/logosemletra.png"></a>
        <ul class="nav-list">
                <li><a href="./perfil_adm.php"><button>Voltar</button></a></li>
        </ul>
    </nav>
</header>
    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <h1>Ver mais sobre solicitação</h1>
            </div>
            <br>
            <div class="row">
                <?php if (mysqli_num_rows($result)) { 
                    $row = mysqli_fetch_array($result);
                    $sql2 = "SELECT * from categoria_evento where id = $row[id_categoria]";
                    $result2 = $conn->query($sql2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $categoria = $row2['desc'];
                    ?>
                    
                    <h4>Nome do evento: <?php echo $row['nome_evento'] ;?></h4>
                    <h4>Data do evento: <?php echo $row['data_evento'] ;?></h4>
                    <h4>Categoria do evento: <?php echo $row2['desc'] ;?></h4>
                    <h4>Horario do evento: <?php echo $row['horario_evento'] ;?></h4>
                    <h4>Local do evento: <?php echo $row['local_evento'] ;?></h4>
                    <h4>Restrição de idade do evento: <?php echo $row['rest_idade'] ;?> anos</h4>
                    <h4>Quantidade de ingressos do evento: <?php echo $row['qtd_ingressos'] ;?></h4>
                    <h4>Valor do ingresso: <?php echo $row['valor_ingresso'] ;?></h4>
                    <h4>Quantidade de pessoas suportadas no evento: <?php echo $row['qtd_pessoas'] ;?></h4>
                    <h4>Dono do evento: <?php echo $row['nome_dono'] ;?></h4>
                    <h4>Email do dono do evento: <?php echo $row['email_dono'] ;?></h4>
                <?php } ?>

            </div>
        </div>
    </div>
</body>

</html>