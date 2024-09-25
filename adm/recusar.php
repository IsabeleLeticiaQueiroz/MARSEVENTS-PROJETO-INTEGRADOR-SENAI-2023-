<?php
include_once('../class/conexao.php');
session_start();
$dadosUsu = $_SESSION['dadosUsu'];

$id = $_GET['id'];


$sql = "SELECT * FROM solicitacoes WHERE id = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$sqlNot = "INSERT INTO notificacao_cliente (msg, email, nome_evento) VALUES ('Sua solicitação foi recusada!', '$row[email_dono]', '$row[nome_evento]')";
$resultNot = $conn->query($sqlNot);

$sqlRemove = "DELETE FROM solicitacoes WHERE id= $id";
$resultRemove = $conn->query($sqlRemove);



header('Location: ./index.php');
?>