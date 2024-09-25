<?php
include_once("../class/conexao.php");
session_start();

$sql = "SELECT * from fornecedor ";
$result = $conn->query($sql);

while ($row = mysqli_fetch_array($result)) {
    $sql2 = "SELECT * FROM avaliacoes where email_fornecedor = '$row[email]'";
    $result2 = $conn->query($sql2);
    $num = mysqli_num_rows($result2);
    $aval = 0;
    if ($num > 0) {
        while ($row2 = mysqli_fetch_array($result2)) {
            $aval = $aval + $row2['nota'];
        }

        $media = $aval / $num; 
        $sql3 = "UPDATE fornecedor SET nota = $media where email= '$row[email]'";
        $result3 = $conn->query($sql3);
    }

}

header('Location:../cliente/notificacoes.php');