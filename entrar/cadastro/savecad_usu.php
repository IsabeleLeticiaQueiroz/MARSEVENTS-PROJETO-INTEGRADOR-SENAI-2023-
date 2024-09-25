<?php
include_once "../../class/conexao.php";
    if(isset($_POST['tipo'])){

    $tipo_usu = $_POST['tipo'];
    
   //echo $tipo_usu;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="log/css/util.css">
	<link rel="stylesheet" type="text/css" href="log/css/main.css">
  <title>Cadastro de usuários</title>
</head>
<body>  
<form action="cad_usu.php" method="POST" enctype="multipart/form-data">
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						CADASTRO
					</span>
                    <input type="hidden" name="tipo_usu" value="<?php echo $tipo_usu ?>">
         <!-- Os dois-->
         <?php if ($tipo_usu == 'cliente' || $tipo_usu == 'provedor'): ?>

            <div class="wrap-input100 validate-input" data-validate = "Digite seu nome">
              <input class="input100" type="text" name="nome">
              <span class="focus-input100" data-placeholder="Nome completo"></span>
            </div>

          <div class="wrap-input100 validate-input" data-validate="Digite seu telefone">
              <input class="input100" type="tel" name="tel">
              <span class="focus-input100" data-placeholder="Telefone"></span>
          </div>

          
            <div class="wrap-input100 validate-input" data-validate = "Digite seu email">
                <input class="input100" type="text" name="email">
                <span class="focus-input100" data-placeholder="Email"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Digite seu endereço">
                <input class="input100" type="text" name="endereco">
                <span class="focus-input100" data-placeholder="Endereço"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate="Digite sua senha">
              <span class="btn-show-pass">
                  <i class="zmdi zmdi-eye"></i>
              </span>
              <input class="input100" type="password" name="senha">
              <span class="focus-input100" data-placeholder="Senha"></span>
           </div>

          
          <?php endif; ?>
       
        <!--cliente comum -->
        <?php if ($tipo_usu == 'cliente'): ?>
            <div class="wrap-input100 validate-input" data-validate = "Digite sua data de nascimento">
						<input class="input100" type="date" name="data_nasc">
						<span class="focus-input100"></span>
					</div>
            
            <div class="wrap-input100 validate-input" data-validate="Digite seu CPF">
						<input class="input100" type="number" name="cpf">
						<span class="focus-input100" data-placeholder="CPF"></span>
			</div>

            <div class="wrap-input100 validate-input" data-validate = "Digite seu RG">
            <input class="input100" type="number" name="rg">
            <span class="focus-input100" data-placeholder="RG"></span>
        </div>
        <?php endif; ?>
        
        <!--provedor -->
        <?php if ($tipo_usu == 'provedor'): ?>


		<div class="wrap-input100 validate-input" data-validate = "Digite seu CNPJ">
            <input class="input100" type="number" name="cnpj">
            <span class="focus-input100" data-placeholder="CNPJ"></span>
        </div>
		
		
        <select name="especializacao" id="especializacao" class="opcao">
                <?php
                    $sql = "SELECT * FROM especializacao order by id";
                    $result=mysqli_query($conn, $sql);
                    while ($vreg = mysqli_fetch_assoc($result)) {
                        $vid = $vreg['id'];
                        $vdesc = $vreg['desc'];
                        echo "<option selected>especialização</option>";
                        echo "<option value=$vid>$vdesc</option>";
                    }
                ?>
            </select>

      
        <?php endif; ?>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Cadastrar
							</button>
                            
						</div>
					</div>

					<div class="text-center p-t-15">
						<span class="txt1">
							Já possui uma conta?
						</span>

						<a class="txt2" href="../login/login.php">
							Faça login.
						</a>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	



</form>

<script src="log/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/bootstrap/js/popper.js"></script>
	<script src="log/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/daterangepicker/moment.min.js"></script>
	<script src="log/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="log/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="log/js/main.js"></script>
</body>
</html>
