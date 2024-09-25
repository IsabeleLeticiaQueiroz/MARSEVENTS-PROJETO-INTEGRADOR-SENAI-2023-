<?php

include_once("../class/conexao.php");

session_start();
    $dados = $_SESSION['dadosUsu'];
    $id = $dados['id'];
   

    $remove = "SELECT * FROM adm WHERE id=$id";
    $remove_result = mysqli_query($conn, $remove);
    $user_data = mysqli_fetch_array($remove_result);
    $arquivo = $user_data['foto'];
    unlink('imagens_adm/'.$arquivo); 

    $sql = "DELETE FROM adm WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    echo "<script>alert('Excluido com sucesso!');
    window.location.href = '../index.php';</script>";

?>