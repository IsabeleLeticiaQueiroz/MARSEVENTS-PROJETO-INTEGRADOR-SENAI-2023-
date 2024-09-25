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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
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
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/logosemletra.png" type="image/x-icon">
    <title>Perfil</title>
</head>

<body>
    <header>
    <nav>
        <a class="logo" href=""><img class="img" src="images/logosemletra.png"></a>

        <ul class="nav-list">
            <li><a href="../fornecedor/index.php"><button>Voltar</button></a></li>
            <li><a href="../fornecedor/notificacoes.php"><button>Notificações</button></a></li>
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

                        echo "<img class='img-fluid w-100 rounded-circle shadow-sm' src='./imagens_fornecedor/img_perfil.jpg'>";
                    } else {
                        echo "<img class='img-fluid w-100 rounded-circle shadow-sm' src='./imagens_fornecedor/$dados[foto]'>";
                    }

                    ?>
                    <br>
                    <br>
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <br>
                    <a href="./addfoto.php" class="bi bi-pencil-square pr-2 cor"></a>
                    <a href="sairConta.php" class="cor3">Sair</a>
                    <a href="sair.php" class="cor3">Excluir conta</a>
                    <a href="editardados.php" class="cor3">Editar dados</a>
                    <h1 class="display-3 text-uppercase mb-2">
                        <?php echo $dados['nome']; ?>
                    </h1>
                    <h6 class="mb-2">
                        <?php echo $dados['email']; ?>
                    </h6>
                    <h6 class="mb-4">
                        <?php echo $dados['tel']; ?>
                        </p>
                </div>
            </div>
        </div>
    </div>
    
        <?php
        $sql = "SELECT * from  servicos where email_fornecedor = '$dados[email]'";
        $result = $conn->query($sql);

         if (mysqli_num_rows($result)){ ?>
        <div class="container">
        <h3 class="vaiMeMatar">Serviços agendados</h3>
        <?php while ($row = mysqli_fetch_array($result)) {
            $sql2 = "SELECT * from especializacao where id = $row[especializacao]";
            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $servico = $row2['desc'];
            ?>

            <div class="testandohead">
                <!-- AQUI -->
                <div class="card item" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo "$row[nome_evento]"; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Data:
                            <?php echo "$row[data_evento]"; ?>
                        </h6>
                        <p class="card-text">Serviço a prestar:
                            <?php echo "$servico"; ?>
                        </p>
                        <a href="<?php echo './cancelar.php?id=' . $row['id'] ?>" class="card-link">Cancelar</a>
                        <a href="<?php echo './saibamais.php?id=' . $row['id'] ?>" class="card-link">Saber Mais</a>
                        <a href="<?php echo './feito.php?id=' . $row['id'] ?>" class="card-link">Marcar como feito</a>
                    </div>
                </div>
            </div>

        <?php }} ?>
    </div>
    <div class="container vaiMeMatar2">
        <hr>
    </div>
    

        <?php
        $sql3 = "SELECT * FROM feitos WHERE email_fornecedor = '$dados[email]'";
        $result3 = $conn->query($sql3);
        
        if (mysqli_num_rows($result3)){ ?>
        <div class="container">
        <h3 class="vaiMeMatar">Meu histórico de serviços</h3>
        <?php while ($row3 = mysqli_fetch_array($result3)) {
            $sql4 = "SELECT * from especializacao where id = $row3[especializacao]";
            $result4 = $conn->query($sql4);
            $row4 = mysqli_fetch_assoc($result4);
            $servico2 = $row4['desc'];
            ?>


            <div class="testandohead ">
                <div class="card item" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo "$row3[nome_evento]"; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Data:
                            <?php echo "$row3[data_evento]"; ?>
                        </h6>
                        <p class="card-text">Serviço a prestar:
                            <?php echo "$servico2"; ?>
                        </p>
                        <a href="<?php echo './apagar.php?id=' . $row3['id'] ?>" class="card-link">Apagar</a>
                    </div>
                </div>
            </div>
        <?php }} ?>

    </div>
    </div>


</body>

</html>