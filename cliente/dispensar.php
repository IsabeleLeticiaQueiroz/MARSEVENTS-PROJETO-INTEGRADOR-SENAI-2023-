<?php
include_once('../class/conexao.php');
session_start();
$dadosUsu = $_SESSION['dadosUsu'];

$id = $_GET['id'];


$sql = "SELECT * FROM participar WHERE id = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$sqlNot = "INSERT INTO notificacao_fornecedor (msg, email, nome_evento, servico) VALUES ('Seu serviço foi dispensado!', '$row[email_fornecedor]', '$row[nome_evento]', '$row[especializacao]')";
$resultNot = $conn->query($sqlNot);

$sqlRemove = "DELETE FROM participar WHERE id= $id";
$resultRemove = $conn->query($sqlRemove);



header('Location: ./notificacoes.php');
?>