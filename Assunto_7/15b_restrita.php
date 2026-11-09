<?php
session_start(); // Inicia a sessão para verificar se o usuário está logado
// Se não houver usuários autenticados, redireciona para autenticar
if (!isset($_SESSION['usuario'])) {
    header("Location: 15a_sistema.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página restrita</title>
</head>
<body>
    <!-- Mostra o nome do usuário logado -->
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>   
    <p>Esta é uma página restrita, apenas para usuários logados.</p>
    <!-- Sair (Deslogar) -->
    <a href="15c_logout.php">Logout</a>
    
</body>
</html>