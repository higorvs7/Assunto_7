<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required><br>


        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>


        <button type="submit">Entrar</button>
    </form>


    <?php
   
   session_start(); // Inicia a sessão para armazenar informações do usuário


   
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];


        // Conecta ao banco de dados
        $servername="localhost";
         $username="root";
         $password="Senai@118";
         $dbname="exercico";


        $conn = new mysqli($servername, $username, $password, $dbname);


        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
    }


    
    // Insere o regidtro no BD
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = $conn->query($sql);
   
    // Mansagem (feedback para usuários)
    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;


        header("Location: 15a_sistema.php");
        exit();
    } else {
        echo "<p style='color: red;'>Usuário ou senha inválidos!</p>";
    }
    // Fecha a conexão
    $conn->close();
   }






    ?>
</body>
</html>