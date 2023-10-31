<?php
session_start();
include('config/conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['type']) && $_POST['type'] == 'register') {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

    // Verifica se o usuário já existe na tabela
    $verifica_usuario = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $resultado_verificacao = mysqli_query($conn, $verifica_usuario);

    if (mysqli_num_rows($resultado_verificacao) == 0) {
        $token = md5($usuario . $senha);

        // Insere o novo usuário na tabela
        $inserir_usuario = "INSERT INTO usuarios (nome, usuario, senha, token) VALUES ('$nome', '$usuario', '$senha', '$token')";
        $resultado_insercao = mysqli_query($conn, $inserir_usuario);

        if ($resultado_insercao) {
            $_SESSION['registroSucesso'] = "Registro realizado com sucesso! Faça o login.";
            header("Location: login.php");
        } else {
            $_SESSION['registroErro'] = "Erro no registro. Por favor, tente novamente.";
            header("Location: registro.php");
        }
    } else {
        $_SESSION['registroErro'] = "Usuário já existe. Escolha outro nome de usuário.";
        header("Location: registro.php");
    }
} else {
    $_SESSION['loginErro'] = "Usuário ou senha inválido";
    header("Location: login.php");
}
?>