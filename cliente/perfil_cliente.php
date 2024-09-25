<?php
include_once("../class/conexao.php");
session_start();
$dados = $_SESSION['dadosUsu'];

//print_r($dados);


?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
<link href="css/style.css" rel="stylesheet">
    <title>Perfil</title>
</head>
</head>
</head>

<body>
<header>
    <nav>
        <a class="logo" href=""><img class="img" src="images/logosemletra.png"></a>

        <ul class="nav-list">
            <li><a href="../cliente/index.php"><button>Voltar</button></a></li>
            <li><a href="../cliente/notificacoes.php"><button>Notificações</button></a></li>
        </ul>
    </nav>
</header>
<br>
<div class="container-fluid bg-light d-flex align-items-center mb-5 py-5" id="home" style="min-height: 90vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">

    <?php
    if ($dados['foto'] == "") {

        echo "<img class='img-fluid w-100 rounded-circle shadow-sm' src='./imagens_cliente/img_perfil.jpg'>";
    } else {
        echo "<img class='img-fluid w-100 rounded-circle shadow-sm' src='./imagens_cliente/$dados[foto]'>";
    }

    ?>
    <br>
    </div>
    <div class="col-lg-7 text-center text-lg-left">
    <br>
    <a href="./addfoto.php" class="bi bi-pencil-square pr-2 cor"></a>
    <a href="sairConta.php" class="cor3">Sair</a>
    <a href="sair.php" class="cor3">Excluir conta</a>
    <a href="editardados.php" class="cor3">Editar dados</a>
                <h1 class="display-3 text-uppercase mb-2"><?php echo $dados['nome']; ?></h1>
                <h6 class="mb-2"><?php echo $dados['email']; ?></h6>
                <h6 class="mb-4"><?php echo $dados['tel']; ?></p>
</div>
</div>
</div>
</div>


    <?php
    $email = $dados['email'];
    $sql = "SELECT * FROM eventos WHERE email_dono = '$email'";
    $result = $conn->query($sql);
   
    if (mysqli_num_rows($result)) {
    ?>
      <div class="container-fluid py-2" id="qualification">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">

        </div>

        <div class="row align-items-center">
        <h3 class="pb-3">Eventos criados por mim:</h3>
        <div class="testandohead">
            <span class="item cor2">Nome do evento</span>
            <span class="item cor2">Data</span>
            <span class="item cor2">Horario</span>
            <span class="item cor2">Local</span>
            <span class="item cor2">Categoria</span>
            <span class="item cor2">Editar</span>
            <span class="item cor2">Excluir</span>
        </div>
        <table class="">
            

            <?php
            while ($row = mysqli_fetch_array($result)) {
                $sql2 = "SELECT * FROM categoria_evento WHERE id = '$row[id_categoria]'";
                $result2 = $conn->query($sql2);
                $row2 = mysqli_fetch_array($result2);

            ?>

                <tr class="testando">
                    <td class="item">
                        <span class="item"><?php echo $row['nome']; ?></span>
                    </td>
                    <td class="item">
                        <span class="item"><?php echo $row['data_evento']; ?></span>
                    </td>
                    <td class="item">
                        <span class="item"><?php echo $row['horario']; ?></span>
                    </td>
                    <td class="item">
                        <span class="item"><?php echo $row['local_evento']; ?></span>
                    </td>
                    <td class="item">
                        <span class="item"><?php echo $row2['desc']; ?></span>
                    </td>
                    <td class="item">
                        <a href="<?php echo '../evento/editarevento.php?idEv='.$row['id'] ?>" class="bi bi-pencil-fill"></a>
                    </td>
                    <td class="item">
                        <a href="<?php echo '../evento/excluirevento.php?idEv='.$row['id'] ?>" class="bi bi-trash"></a>  
                    </td>
                    
                </tr>


        <?php 
        }
        ?>
        </table>
        <?php
        }
        ?>
        <br><br><br><br>
        <?php 
            $sql3 = "SELECT * FROM ingresso WHERE email_usuario = '$email'";
            $result3 = $conn->query($sql3);
            if(mysqli_num_rows($result3)){
                ?>
                <h3 class="textocar">Carrinho</h3>
                <?php
                while($row3 = mysqli_fetch_array($result3)){
                    $id_evento= $row3['id_evento'];
                    $sql4 = "SELECT * FROM eventos WHERE id = '$id_evento'";
                    $result4 = $conn->query($sql4);
                    $row4 = mysqli_fetch_array($result4);
                ?>
                <div class="card" style="width: 18rem;">
                    <img src="../evento/imagens_evento/<?php echo $row4['foto']?>" class="card-img-top marg-1px" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row4['nome']?></h5>
                        <p class="card-text">N° do evento: <?php echo $row3['id_evento']?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">N° do ingresso: <?php echo $row3['id']?></li>
                        <li class="list-group-item">Valor: R$<?php echo $row4['valor_ingresso']?>,00</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Pagar</a>
                        <a href="<?php echo '../ingresso/retiraringresso.php?idIngresso='.$row3['id'] ?>" class="card-link">Retirar do carrinho</a>
                    </div>
                </div>
                <br>
             <?php
            }}
        ?>

        

</body>

</html>