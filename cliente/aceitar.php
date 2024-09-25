<?php

include_once("../class/conexao.php");
session_start();
$dadosUsu = $_SESSION['dadosUsu'];

$id = $_GET['id'];

$sql = "SELECT * FROM participar WHERE id = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$sql2 = "SELECT * FROM eventos where nome = '$row[nome_evento]'";
$result2 = $conn->query($sql2);
$row2 = mysqli_fetch_assoc($result2);


$sqlNotf = "INSERT INTO notificacao_fornecedor (msg, email, nome_evento, servico) VALUES 
('Seu serviço foi aceito!', '$row[email_fornecedor]', '$row[nome_evento]', '$row[especializacao]')";
$resultNotf = $conn->query($sqlNotf);

$sqlServ = "INSERT INTO servicos (email_fornecedor, nome_evento, especializacao, data_evento, horario, local_evento, nome_dono, email_dono ) VALUES ('$row[email_fornecedor]', '$row[nome_evento]', '$row[especializacao]', '$row2[data_evento]', '$row2[horario]', '$row2[local_evento]', '$row2[nome_dono]','$row2[email_dono]' )";
$resultServ = $conn->query($sqlServ);

$sqlRemove = "DELETE FROM participar WHERE id= $id";
$resultRemove = $conn->query($sqlRemove);


header('Location: ./notificacoes.php');

?>