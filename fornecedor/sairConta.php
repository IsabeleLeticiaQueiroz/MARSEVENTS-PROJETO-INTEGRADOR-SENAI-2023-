<?php
    include_once("../class/conexao.php");
    session_start();
    $_SESSION['dadosUsu'] = "";
    header("Location:../index.php");
?>