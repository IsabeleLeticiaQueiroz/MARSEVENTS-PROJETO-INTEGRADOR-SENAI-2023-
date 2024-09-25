<?php
include_once("../class/conexao.php");
session_start();
$dados = $_SESSION['dadosUsu'];

if (isset($_POST['salvar'])) {
    $pasta = "./imagens_cliente/";
    $extensao = strtolower(substr($_FILES['img_perfilnovo']['name'], -5));
    $nome_img = md5(time()) . $extensao;
    move_uploaded_file($_FILES['img_perfilnovo']['tmp_name'], $pasta . $nome_img);

    $cadastro_eve = mysqli_query($conn, "UPDATE cliente set foto = '$nome_img' WHERE email = '$dados[email]'");

    $result3 = mysqli_query($conn, "SELECT * FROM cliente WHERE email = '$dados[email]'");
    $dadosAtu = mysqli_fetch_array($result3);
    $_SESSION['dadosUsu'] = $dadosAtu; 
}
header("Location:./perfil_cliente.php");

?>