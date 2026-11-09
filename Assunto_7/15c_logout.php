<?php
session_start(); // Inicia a sessão para verificar se o usuário está logado
// Encerrar a sessão
session_destroy();


// Redireciona para a página de logar
header("Location: 15a_sistema.php");
?>