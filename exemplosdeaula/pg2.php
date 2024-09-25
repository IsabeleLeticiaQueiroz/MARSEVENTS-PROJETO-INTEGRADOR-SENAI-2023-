<?php
$tipo_usuario = isset($_POST['tipo_usuario']) ? $_POST['tipo_usuario'] : '';
?>

<form method="post" action="">
    <?php if ($tipo_usuario == '1'): ?>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
    <?php endif; ?>

    <?php if ($tipo_usuario == '2' || $tipo_usuario == '3'): ?>
        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco"><br>
    <?php endif; ?>

    <?php if ($tipo_usuario == '3'): ?>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"><br>
    <?php endif; ?>

    <input type="submit" value="Enviar">
</form>
