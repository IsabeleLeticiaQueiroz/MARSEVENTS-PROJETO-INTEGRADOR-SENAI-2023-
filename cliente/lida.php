<?php

include_once("../class/conexao.php");
session_start();
$id = $_GET['id'];

$sqlRemove = "DELETE FROM notificacao_cliente WHERE id= $id";
$resultRemove = $conn->query($sqlRemove);

header('Location: ./notificacoes.php')
?>