<?php
include_once("../class/conexao.php");
session_start();
$dadosUsu = $_SESSION['dadosUsu'];


$sql = "SELECT * FROM adm where email = '$dadosUsu[email]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
if(isset($_POST['submit'])){
    $dados = [];
    $dados = $_POST ; 
    $sql2 = "UPDATE adm SET nome = '$dados[nome]', email = '$dados[email]' WHERE  email = '$dadosUsu[email]'";
    $result2 = $conn->query($sql2);

    $sql3 = "SELECT * FROM  adm WHERE email = '$dados[email]'";
    $result3 = $conn->query($sql3);
    $novodado = mysqli_fetch_array($result3);
    $_SESSION['dadosUsu'] = $novodado ; 
    echo "<script> alert ('Seus dados foram editados com sucesso!');
    window.location.href= '../adm/perfil_adm.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="log/fonts/iconic/css/material-design-iconic-font.min.css">
	  <link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">	
	  <link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">
	  <link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">	
	  <link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="css/editardados.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/logosemletra.png" type="image/x-icon">
    <title>Edite seus dados</title>
</head>
<body>
<header>
    <nav>
        <ul class="nav-list">
                <li><a href="../adm/perfil_adm.php"><button>Voltar</button></a></li>
        </ul>
    </nav>
</header>
    <h1>Edite seus dados aqui</h1>
    <div class="limiter">
  <div class="container">
  <div class="col-12">
        <div class="row">
    <div class="bloco">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<h1 class="login100-form-title p-b-26">
						EDITE SEUS DADOS
</h1>
<br>
<br>
            <tr class="table-light">
                <h2 class="table-light">
                    Nome:
</h2>
                <td class="table-light">
                    <input type="text" id="nome" name="nome" placeholder="<?php echo $row['nome'];?>">
                </td>
            </tr>
            <br>
            <br>
            <tr class="table-light">
                <h2 class="table-light">
                    Email:
</h2>
                <td class="table-light">
                    <input type="email" id="email" name="email" placeholder="<?php echo $row['email'];?>">
                </td>
            </tr>
            <br><br><br>
            <input type="submit" value="Salvar" id="submit" name="submit" class="btn">
    </form>
</div>
</div>
</div>
</div>
        </div>
  </div>
</div>
</div>
</div>
</body>
</html>