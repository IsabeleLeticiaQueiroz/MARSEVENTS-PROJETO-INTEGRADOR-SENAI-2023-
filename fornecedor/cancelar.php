<?php
include_once("../class/conexao.php");
session_start();
$dadosUsu = $_SESSION['dadosUsu'];
$id = $_GET['id'];

$sql = "SELECT * from servicos where id = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

$sqlNot = "INSERT INTO notificacao_cliente (msg, email, nome_evento, servico) VALUES ('O fornecedor cancelou o servico em seu evento !', '$row[email_dono]', '$row[nome_evento]', '$row[especializacao]')";
$resultNot = $conn->query($sqlNot);

$sqlRemove = "DELETE FROM servicos WHERE id= $id";
$resultRemove = $conn->query($sqlRemove);



header('Location: ./perfil_fornecedor.php');
?>