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
            $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show text-center mb-0' role='alert'>
            <strong> USUÁRIO CRIADO COM SUCESSO &nbsp; <i class='far fa-smile-wink fa-2x'></i> </strong> 
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
            header('Location: login.php'); // Redireciona para a página de listagem de usuários
        } else {
            $_SESSION['error'] = "<div class='alert alert-danger alert-dismissible fade show text-center mb-0' role='alert'>
            <strong> NÃO FOI POSSÍVEL CRIAR O USUÁRIO &nbsp; <i class='fas fa-grin-squint-tears fa-2x'></i> </strong> 
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
            header('Location: register.php'); // Redireciona para a página de listagem de usuários
        }
    }
}
?>