<?php
$servername = "127.0.0.1";
$username = "root";
$password = "8g8e7Y2j@";
$dbname = "projeto_integrador";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
 die("Conexão falhou: " . $conn->connect_error);
}
?>