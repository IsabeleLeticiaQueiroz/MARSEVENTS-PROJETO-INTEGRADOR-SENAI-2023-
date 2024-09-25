<?php
include_once ('../class/conexao.php');
session_start();

$email_dono=$_POST['email_dono'];
$result = mysqli_query($conn, "SELECT * FROM cliente WHERE email = '$email_dono'");

if (mysqli_num_rows($result) > 0){

    if(isset($_POST['criar_event']) && (isset($_FILES['foto_evento']))){
    $pasta = "./imagens_evento/";
    $extensao = strtolower(substr($_FILES['foto_evento']['name'],-4));
    $nome_img=md5(time()).$extensao;
    move_uploaded_file($_FILES['foto_evento']['tmp_name'],$pasta.$nome_img);
   
    $nome_evento= $_POST['nome_evento'];
    $categoria = $_POST['categoria'];
    $data_evento = $_POST['data'];
    $horario = $_POST['horario'];
    $local_evento = $_POST['local'];
    $especializacao = $_POST['especializacao'];
    $forma_pagamento= $_POST['forma_pagamento'];
    $email_dono = $_POST['email_dono'];
    $nome_dono = $_POST['nome_dono'];
    $descricao = $_POST['desc'];
    $rest_idade = $_POST['rest_idade'];
    $qtd_pessoas = $_POST['qtd_pessoas'];
    $valor_ingresso = $_POST['valor_ingresso'];
    $qtd_ingressos = $_POST['qtd_ingressos'];
    
   
    $cadastro_eve = mysqli_query($conn, "INSERT INTO solicitacoes ( nome_dono, email_dono, nome_evento, data_evento, id_categoria, local_evento, forma_pagamento, qtd_ingressos, valor_ingresso, qtd_pessoas, horario_evento, rest_idade, descricao, especializacao, foto) VALUES 
    ('$nome_dono', '$email_dono', '$nome_evento', '$data_evento', '$categoria', '$local_evento','$forma_pagamento', $qtd_ingressos, $valor_ingresso, $qtd_pessoas, '$horario', $rest_idade, '$descricao', '$especializacao', '$nome_img')");
 
    echo "<script>alert('Seu evento foi solicitado!');
    window.location.href = '../cliente/index.php';</script>";   

} else{
    echo "<script>alert('Nao foi possivel solicitar seu evento, tente novamente!');
    window.location.href = './cadevento.php';</script>";
}
} else{
    echo "<script>alert('Seu email deve ser o mesmo do seu perfil na plataforma, tente novamente!');
    window.location.href = './cadevento.php';</script>";
}

?>