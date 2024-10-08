<?php
    require __DIR__ . "/../vendor/autoload.php";
    use App\model\Usuario;
    use App\persistence\ConnectionFactory;

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nome = $_POST['usuario'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];
    }
    
    $usu1 = new Usuario($nome, $senha, $email);


    $sqlInsert = "INSERT INTO usuarios (nome, senha, email) values ('" . $usu1->getNome() . "','" . $usu1->getSenha() . "','" . $usu1->getEmail() . "')";

    $conn = ConnectionFactory::getConnection();
    $conn->exec($sqlInsert);   
