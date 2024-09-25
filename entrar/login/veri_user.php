<?php
require_once '../../class/conexao.php';
session_start();



$email_log = $_POST['email_log'];
$password_log = $_POST['senha_log'];

$result = mysqli_query($conn, "SELECT * FROM cliente WHERE email = '$email_log'");
$result1 = mysqli_query($conn, "SELECT * FROM fornecedor WHERE email = '$email_log'");

if(mysqli_num_rows($result) > 0)
{
    $result2 = mysqli_query($conn, "SELECT * FROM cliente WHERE email = '$email_log' AND senha = '$password_log'");
    if(mysqli_num_rows($result2) > 0){
        
        $dados = mysqli_fetch_array($result2);
        print_r($dados);
        $_SESSION['dadosUsu'] = $dados;
        header('Location:../../cliente/index.php');
    }else{
        echo "<script>
        alert('Não foi possível realizar o login, email ou senha inválidos!');
        window.location.href='./login.php';
        </script>";
    }
}

elseif(mysqli_num_rows($result1) > 0){
    $result3 = mysqli_query($conn, "SELECT * FROM fornecedor WHERE email = '$email_log' AND senha = '$password_log'");
    if(mysqli_num_rows($result3) > 0){
        $dados = mysqli_fetch_array($result3);
        print_r($dados);
        $_SESSION['dadosUsu'] = $dados;
        header('Location:../../fornecedor/index.php');
    }else{
        echo "<script>
        alert('Não foi possível realizar o login, email ou senha inválidos!');
        window.location.href='./login.php';
        </script>";
    }
} else{
    $result4 = mysqli_query($conn, "SELECT * FROM adm WHERE email = '$email_log' AND senha = '$password_log'");
    if(mysqli_num_rows($result4) > 0){
        $dados = mysqli_fetch_array($result4);
        print_r($dados);
        $_SESSION['dadosUsu'] = $dados;
        header('Location:../../adm/index.php');
    }else{
        echo "<script>
        alert('Não foi possível realizar o login, email ou senha inválidos!');
        window.location.href='./login.php';
        </script>";
    }
}


?>