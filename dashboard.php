<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do Usuário - Aventura Global Viagens</title>
    <!-- Adicione aqui os seus estilos CSS, links para Bootstrap, etc. -->
</head>

<body>
    <header style="background-color: #4C4B16; height: 80px; color: #333; display: flex; justify-content: space-between; align-items: center; padding: 20px;">
        <div class="logo">
            <a href="main.html">
                <img src="img/logo.png" alt="Aventura Global Viagens">
            </a>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="main.html"><i class="fas fa-home"></i> Página Inicial</a></li>
                    <!-- Adicione mais links conforme necessário -->
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
                </ul>
            </nav>
        </div>
        <div class="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <section id="painel" class="painel-section" style="background-color: #f7f1e5; color: #333; text-align: center; padding: 40px;">
        <div class="container">
            <h2>Bem-vindo ao Painel do Usuário</h2>
            <!-- Conteúdo do painel aqui -->
        </div>
    </section>

    <footer style="background-color: #fff; color: #333; padding: 20px;">
        <div class="footer-content" style="display: flex; justify-content: space-between;">
            <div class="footer-info">
                <h3>Informações Adicionais</h3>
                <p>Whatsapp: 021-988776655</p>
                <p>Email: contato@aventuraglobal.com</p>
                <p>Endereço: Rua Visconde de Pirajá 2025, loja 5, Ipanema, Rio de Janeiro.</p>
            </div>
            <div class="footer-links" style="margin-left: auto;">
                <h3>Links Adicionais</h3>
                <ul>
                    <li><a href="sobre.html"><i class="fas fa-info-circle"></i> Sobre</a></li>
                    <li><a href="compras.html"><i class="fas fa-globe"></i> Destinos</a></li>
                    <li><a href="blog.html"><i class="fas fa-book"></i> Blog</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Redes Sociais</h3>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>
        </div>
        <p>&copy; 2023 Aventura Global Viagens</p>
    </footer>

    <!-- Adicione aqui os seus scripts JavaScript, links para jQuery, etc. -->

</body>

</html>
