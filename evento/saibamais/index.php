<?php
include_once "../../class/conexao.php";
session_start();
$dadosUsu = $_SESSION['dadosUsu'];
$tipo = $dadosUsu['id_usuario'];
//echo $tipo; 
$id = $_GET['idEvent'];
$sql = "SELECT * FROM eventos WHERE id = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$sql2 = "SELECT * FROM categoria_evento WHERE id = '$row[id_categoria]'";
$result2 = $conn->query($sql2);
$row2 = mysqli_fetch_array($result2);



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
    <link rel="stylesheet" href="../log/css/saibamais.css">
    <link rel="shortcut icon" href="../../images/logosemletra.png" type="image/x-icon">
    <title>Saiba mais</title>
</head>

<header>
    <nav>
        <a class="logo" href=""><img class="img" src="../log/img/logosemletra.png"></a>
        <ul class="nav-list">
            <?php if ($tipo == 2) { ?>
                <li><a href="../../cliente/index.php"><button>Voltar</button></a></li>
            <?php } else { ?>
                <li><a href="../../fornecedor/index.php"><button>Voltar</button></a></li>
            <?php }


            ?>
        </ul>
    </nav>
</header>

<body>


    <div class="container">
        <div class="col-md">
            <div class="text-center">
                <div class="row">
                    <img class="img2" src='../imagens_evento/<?php echo $row['foto'] ?>' alt='...' />
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">
                            <?php echo $row['nome'] ?>
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">
                            <?php echo $row2['desc'] ?>
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">
                            <?php echo $row['descricao'] ?>
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">Data do evento:
                            <?php echo $row['data_evento'] ?>
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">Horário:
                            <?php echo $row['horario'] ?>
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">Local:
                            <?php echo $row['local_evento'] ?>
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">Serviço necessário:
                            <?php $sql3 = "SELECT * FROM especializacao where id = $row[servico]";
                            $result3 = $conn->query($sql3);
                            if (mysqli_num_rows($result3) > 0) {
                                $row3 = mysqli_fetch_assoc($result3);
                                $servico = $row3['desc'];
                                echo $servico;
                            } ?>
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">Quantidade de ingressos:
                            <?php echo $row['qtd_ingressos'] ?> unidades
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">Valor do ingresso: R$
                            <?php echo $row['valor_ingresso'] ?>
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">Organizador:
                            <?php echo $row['nome_dono'] ?>
                        </td>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <td class="tab-text">Contato do organizador:
                            <?php echo $row['email_dono'] ?>
                        </td>
                    </h4>
                </div>
                <br>

                <?php if ($tipo == 2) { ?>
                    <a class="botao" href="<?php echo '../../ingresso/index.php?idEvento=' . $id ?>">Adquirir ingresso</a>
                <?php } else { ?>
                    <a class="botao" href="<?php echo '../participar/index.php?idEvento=' . $id ?>">Desejo participar do
                        evento</a>
                <?php } ?>
                <br>

            </div>
        </div>

    </div>

</body>

</html>