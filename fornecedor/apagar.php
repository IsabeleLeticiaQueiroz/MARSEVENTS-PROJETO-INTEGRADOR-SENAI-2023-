<?php
    include_once("../class/conexao.php"); 
    session_start();
    $id = $_GET["id"];
    $dadosUsu = $_SESSION["dadosUsu"];

    $sql = "DELETE FROM feitos WHERE id = $id"; 
    $result = $conn->query($sql);

    header('Location: perfil_fornecedor.php');
?>