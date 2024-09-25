<?php
include_once('../class/conexao.php');
session_start();
$dadosUsu = $_SESSION['dadosUsu'];
$sql = "SELECT * FROM notificacao_cliente WHERE email = '$dadosUsu[email]'";
$result = $conn->query($sql);
//$row = mysqli_fetch_assoc($result);
//echo $row;
$sql2 = "SELECT * FROM participar WHERE email_dono = '$dadosUsu[email]'";
$result2 = $conn->query($sql2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/notificacoescl.css">    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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

    <title>Minhas notificações</title>
</head>

<body>
<header>
    <nav>
        <ul class="nav-list">
                <li><a href="./perfil_cliente.php"><button>Voltar</button></a></li>
        </ul>
    </nav>
</header>       
    <div class="limiter">
        <div class="container-fluid teste">
            <div class="col-3"> </div>
            <div class="col-6">
                <div class="row">
                    <div class="bloco">
                        <h1 class="texto">Minhas notificações</h1>
                        <br>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th class="textobase" scope="col">Notificação</th>
                                    <th class="textobase" scope="col">Detalhes</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td><?php echo  $row['msg']; ?></td>
                                        <td class="d-flex justify-content-around">
                                            <a href="<?php echo './lida.php?id=' . $row['id'] ?>" class="bi bi-check text-success"></a>
                                        </td>
                                        <td class="d-flex justify-content-around">
                                            <a href="<?php echo './detalhes.php?id=' . $row['id'] ?>" class="bi bi-eye"></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <br>
                        <h1 class="texto4">Fornecedores que <br>
                            desejam trabalhar no seu evento</h1>
                        <br>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th class="textobase" scope="col">Fornecedor</th>
                                    <th class="textobase" scope="col">Serviço</th>
                                    <th class="textobase" scope="col">Email</th>
                                    <th class="textobase" scope="col">Telefone</th>
                                    <th class="textobase" scope="col">Evento</th>
                                    <th class="textobase" scope="col">Data</th>
                                    <th class="textobase" scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php while ($row2 = mysqli_fetch_assoc($result2)) {

                                    $sql3 = "SELECT * from especializacao where id = $row2[especializacao]";
                                    $result3 = $conn->query($sql3);
                                    $row3 = mysqli_fetch_assoc($result3);
                                    $servico = $row3['desc'];

                                    $sql4 = "SELECT * FROM fornecedor where nome = '$row2[nome_fornecedor]'";
                                    $result4 = $conn->query($sql4);
                                    $row4 = mysqli_fetch_array($result4);

                                ?>

                                    <tr>
                                        <td>
                                            <a href="<?php echo './vermais.php?id=' . $row4['id'] ?>" style="color:blueviolet">
                                                <?php echo  $row2['nome_fornecedor']; ?>
                                            </a>
                                        </td>
                                        <td><?php echo  "$servico"; ?></td>
                                        <td><?php echo  $row2['email_fornecedor']; ?></td>
                                        <td><?php echo  $row2['tel_fornecedor']; ?></td>
                                        <td><?php echo  $row2['nome_evento']; ?></td>
                                        <td><?php echo  $row2['data_evento']; ?></td>
                                        <td class="d-flex justify-content-around">
                                            <a href="<?php echo './aceitar.php?id=' . $row2['id'] ?>" class="bi bi-check text-success"></a>
                                        </td>
                                        <td class="d-flex justify-content-around">
                                            <a href="<?php echo './dispensar.php?id=' . $row2['id'] ?>" class="bi bi-trash-fill text-success"></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>

        </div>
    </div>
</body>

</html>