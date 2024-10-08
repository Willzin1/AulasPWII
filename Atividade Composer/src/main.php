<?php

require '../vendor/autoload.php';
include 'index.php';


use App\model\Usuario;

// Verificando se os dados do formulário foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuarioObj = new Usuario($usuario, $senha);

    // Verificando se o usuário é o admin
    if ($usuarioObj->verificaAdmin()) {
        echo '<p class="sucesso">Login realizado com <strong>sucesso!</strong></p>';
    } else {
        echo '<p class="incorreto">Usuário ou senha <strong>incorretos!</strong></p>';
    }
} else {
    echo '<p>Método inválido.</p>';
}
?>
