<?php

session_start(); //Inicia uma sessão

//Verificar se houve uma ação dentro da página entrar.php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
//não está vazio
// conectar o banco de dados

include_once('conectar.php');

//criar as variáveis de armazenamento

$email = $_POST['email'];
$senha = $_POST['senha'];

//Verificar a tabela do banco de dados

$sql = "SELECT * FROM cadastro_clientes WHERE email_cliente = '$email' and senha_cliente = '$senha' ";
$verificar = $conexao -> query($sql);

//verificar o registro é válido

if(mysqli_num_rows($verificar)<1)
{
    //Destruir as variáveis
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location:entrar.php');
}else{
    //Cria as variáveis da sessão
    $_SESSION['email_cliente'] = $email;
    $_SESSION['senha_cliente'] = $senha;

    if(($email=="administrador@gmail.com") && ($senha=="13579")){
        header('Location:administrador.php');

    }else{
        header('Location:usuario.php');
    }    
    
}


}

else{
    // o campo está vazio
    header('Location:entrar.php');
}

?>