<?php
include_once('../class/conexao.php');
$sql = "SELECT * FROM solicitacoes ";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
<link rel="shortcut icon" href="../images/logosemletra.png" type="image/x-icon">
<link rel="stylesheet" href="css/notificacoes.css">
    <title>Notificações</title> 
</head>

<body>
<header>
    <nav>
        <ul class="nav-list">
                <li><a href="./perfil_adm.php"><button>Voltar</button></a></li>
        </ul>
    </nav>
</header>       
<div class="limiter">
  <div class="container-fluid teste">
    <div class="bloco">
    <h1 class="texto">Minhas notificações</h1>
    <br>
    <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col" >...</th>
            </tr>
        </thead>
        <tbody>


            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><a href="<?php echo './vermais.php?id='.$row['id']?>" style="color:blueviolet"><?php echo  $row['nome_evento']; ?></a></td>
                    <td class="d-flex justify-content-around">
                        <a href="<?php echo './aceitar.php?id='.$row['id']?>" class="bi bi-check text-success"></a>
                        <a href="<?php echo './recusar.php?id='.$row['id']?>" class="bi bi-trash text-danger"></a>
                    
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
            </div>
            </div>
            </div>
</body>

</html>