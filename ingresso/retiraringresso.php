<?php

include_once("../class/conexao.php");

session_start();
    $dados = $_SESSION['dadosUsu'];
    $idIngresso = $_GET['idIngresso'];
   

    $remove = "SELECT * FROM ingresso WHERE id=$idIngresso";
    $remove_result = mysqli_query($conn, $remove);
    $evento_data = mysqli_fetch_array($remove_result);
    $sql = "DELETE FROM ingresso WHERE id=$idIngresso";
    $result = mysqli_query($conn, $sql);

    echo "<script>alert('Excluido com sucesso!');
    window.location.href = '../cliente/index.php';</script>";

?>