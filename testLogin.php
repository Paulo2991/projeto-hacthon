<?php

session_start();

// Verifica se o formulário foi submetido e se os campos de e-mail e senha não estão vazios
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    // Inclui o arquivo de configuração do banco de dados
    include_once('config.php');
    
    // Obtém os valores dos campos do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Prepara a consulta SQL para buscar o usuário pelo e-mail e senha
    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    // Verifica se a consulta retornou algum resultado
    if($result->num_rows < 1)
    {
         // Se não houver resultados, limpa as variáveis de sessão e redireciona para a página de login
         unset($_SESSION['email']);
         unset($_SESSION['senha']);
         header('Location: login.php');
    }
    else
    { 
        // Se houver resultados, define as variáveis de sessão e redireciona para a página do sistema
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }
}
else
{
    // Se o formulário não foi submetido ou se os campos estão vazios, redireciona para a página de login
    header('Location: login.php');
}
?>
