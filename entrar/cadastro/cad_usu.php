<?php

    include_once('../../class/conexao.php');

    $tipo_usu = $_POST['tipo_usu'];

    if($tipo_usu == 'cliente'){
        
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $data_nasc = $_POST['data_nasc'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $senha = $_POST['senha'];
        $endereco= $_POST['endereco'];

        $sql = "Insert into cliente (id_usuario, nome, cpf, data_nasc, rg, tel, endereco, email, senha) values (2, '$nome', '$cpf', '$data_nasc', '$rg', '$tel', '$endereco', '$email', '$senha')";
        $_cad_cliente = mysqli_query($conn, $sql);

        header('Location:../login/login.php');

    }

    if($tipo_usu == 'provedor'){
        
        $cnpj = $_POST['cnpj'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $senha = $_POST['senha'];
        $especializacao = $_POST['especializacao'];
        $endereco= $_POST['endereco'];


        $sql = "Insert into fornecedor (tel, cnpj, nome, senha, id_especializacao, email, id_usuario, endereco) values ('$tel', $cnpj, '$nome', '$senha', '$especializacao', '$email', 1, '$endereco')";

        $_cad_provedor = mysqli_query($conn, $sql);
        
        header('Location:../login/login.php');

    }

?>