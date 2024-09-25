<?php

include_once("../class/conexao.php");
session_start();

$id = $_GET['id'];

$sql = "SELECT * FROM solicitacoes WHERE id = $id";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

$sqlEvento = "INSERT INTO eventos (nome, id_categoria, data_evento, horario, local_evento, servico, formas_pagamento, email_dono, nome_dono, foto, descricao, rest_idade, qtd_pessoas, valor_ingresso, qtd_ingressos) VALUES 
    ('$row[nome_evento]', '$row[id_categoria]', '$row[data_evento]', '$row[horario_evento]', '$row[local_evento]', '$row[especializacao]','$row[forma_pagamento]','$row[email_dono]','$row[nome_dono]', '$row[foto]', '$row[descricao]', $row[rest_idade], $row[qtd_pessoas], $row[valor_ingresso], $row[qtd_ingressos])";
$resultEvento = $conn->query($sqlEvento);

$sqlNot = "INSERT INTO notificacao_cliente (msg, email, nome_evento) VALUES ('Sua solicitação foi aceita!', '$row[email_dono]', '$row[nome_evento]')";
$resultNot = $conn->query($sqlNot);

$sqlRemove = "DELETE FROM solicitacoes WHERE id= $id";
$resultRemove = $conn->query($sqlRemove);


header('Location: ./index.php');

?>