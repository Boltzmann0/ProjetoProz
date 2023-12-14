<?php
session_start();

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $_SESSION['usuario_id'] = $usuario['id'];
        header("Location: dashboard.php"); // Redireciona para a página do painel após o login
    } else {
        echo "Credenciais inválidas. Tente novamente.";
    }
}
?>
