<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Use password_hash() para criar um hash seguro da senha
    $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

    // SQL para inserir dados na tabela de usuários
    $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$hashedSenha')";

    // Executa a consulta no banco de dados
    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $conn->error;
    }
}
?>
