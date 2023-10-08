<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    
    // Validar os dados (você pode adicionar validações mais avançadas aqui)

    // Salvar os dados em um arquivo CSV (por exemplo, clientes.csv)
    $dadosCliente = array($nome, $email, $telefone);
    $linha = implode(',', $dadosCliente) . "\n";
    file_put_contents('clientes.csv', $linha, FILE_APPEND | LOCK_EX);

    // Redirecionar para uma página de sucesso
    header("Location: cadastro_sucesso.html");
    exit();
}
?>
