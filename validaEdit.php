<?php
session_start();
include('config/conexao.php');
// Verifique se o usuário está logado e tem permissão para editar
// Substitua a lógica de verificação de permissão de acordo com suas necessidades
if (!isset($_SESSION['usuarioNome'])) {
    // Usuário não está logado, redirecione para a página de login
    header("Location: login.php");
    exit();
}

$id_usuario = mysqli_real_escape_string($conn, $_POST['id']);
$nome = mysqli_real_escape_string($conn, ucwords(strtolower($_POST['nome'])));
$usuario = mysqli_real_escape_string($conn, strtolower($_POST['usuario']));
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

// Realize a verificação se o usuário tem permissão para editar o usuário com o ID fornecido
// Você pode adicionar sua lógica de verificação aqui

// Atualize os dados do usuário na tabela
$altera_usuario = "UPDATE usuarios SET nome='$nome', usuario='$usuario', senha='$senha' WHERE id='$id_usuario'";
$resposta = mysqli_query($conn, $altera_usuario);

if($resposta){
    $_SESSION['success'] = "<div class='alert alert-success alert-dismissible fade show text-center mb-0' role='alert'>
        <strong> USUÁRIO EDITADO COM SUCESSO &nbsp; <i class='far fa-smile-wink fa-2x'></i> </strong> 
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
    header('Location: listar_usuarios.php'); // Redireciona para a página de listagem de usuários
} else {
    $_SESSION['error'] = "<div class='alert alert-danger alert-dismissible fade show text-center mb-0' role='alert'>
        <strong> NÃO FOI POSSÍVEL EDITAR O USUÁRIO &nbsp; <i class='fas fa-grin-squint-tears fa-2x'></i> </strong> 
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
    header('Location: listar_usuarios.php'); // Redireciona para a página de listagem de usuários
}
?>