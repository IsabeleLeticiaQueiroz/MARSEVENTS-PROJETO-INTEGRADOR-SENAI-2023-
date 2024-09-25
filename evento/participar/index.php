<?php
    include_once "../../class/conexao.php";
    session_start();
    $idEvento = $_GET['idEvento'];
    $dados = $_SESSION['dadosUsu'];

    $email = $dados['email'];
    $nome = $dados['nome'];
    $tel = $dados['tel'];
    $especializacao = $dados['id_especializacao'];
 

    $sql = "SELECT * from eventos WHERE id = $idEvento"; 
    $result = $conn->query($sql);
    $row= mysqli_fetch_array($result);

    
    $participar = mysqli_query($conn, "INSERT INTO participar (nome_fornecedor , email_fornecedor , nome_evento, data_evento, email_dono, tel_fornecedor, especializacao) VALUES ('$nome', '$email', '$row[nome]', '$row[data_evento]', '$row[email_dono]', $tel, $especializacao)");
    
    echo "<script>
    alert('Você solicitou sua participação no evento!');
    window.location.href='../../fornecedor/index.php';
</script>";


?>
