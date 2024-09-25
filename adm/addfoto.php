
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/alteraradm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/logosemletra.png" type="image/x-icon">
    <title>Adicionar imagem de perfil</title>
</head>
<body>
<header>
    <nav>
        <ul class="nav-list">
                <li><a href="../adm/perfil_adm.php"><button>Voltar</button></a></li>
        </ul>
    </nav>
</header>
<div class="limiter">
  <div class="container">
    <div class="col-12">
        <div class="row">
    <div class="bloco">
                <form action="savefoto.php" enctype="multipart/form-data" method="POST">
                <h1><label for="img_perfilnovo">Clique para adicionar sua nova imagem de perfil</label></h1>
                <br><br>
              <input type="file" name="img_perfilnovo" id="img_perfilnovo" required value="Selecione uma foto" class="btn btn-gradient display-4">
                    <br><br><br>
                    <input type="submit" value="Salvar" name="salvar" class="btn btn-gradient display-4">
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
</body>
</html>