<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Café</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="img/logo1.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo1.png" alt="Logotipo Tasty Café">
        </div>

        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="cardapio.html">CARDAPIO</a></li>                
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                
                
            </ul>
        </nav>
    </header>

    <!--Inicio da Construção do Formulário de Cadastro-->

    <div class="cadastro">
        <div class="cad" id="cadastro">
            <h1>Cadastro de Clientes</h1>
            <form action="cadastro.php" method="post">
                <input type="text" id= "nome" name = "nome" placeholder= "Digite seu nome completo"> <br>

                <input type="text" id= "email" name = "email" placeholder="Digite sem e-mail"> <br>

                <input type="password" id="senha" name="senha" placeholder="Digite uma senha segura"> <br>

                <input type="radio" id="feminino" value="F" name="sexo">Feminino 

                <input type="radio" id="masculino" value="M" name="sexo">Masculino <br>

                <input type="submit" name="submit" id="button" value="CADASTRAR">
            </form>
        </div>

        <div class="cad">
            <img src="img/capuccino.png" alt="Tasty Café">
        </div>


    </div>

    <footer>

        <div class="rodape">
        <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="cardapio.html">CARDAPIO</a></li>                
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                
                
            </ul>
        </div>

        <div class="rodape">
            <p>Rua da Liberdade n 22 - Bairro Livre</p>
            <p>Diadema - Sp - 09870 - 189</p>
        </div>

        <div class="rodape">
            <p>Siga as nossas Redes Sociais</p>
            <a href="#"><img src="img/facebook.png" alt="Facebook Tasty Café"></a>
            <a href="#"><img src="img/instagram.png" alt="Instagram Tasty Café"></a>
            <a href="#"><img src="img/youtube.png" alt="Youtube Tasty Café"></a>

        </div>
    </footer>

<!----------Configurações do Javascript-------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/cycle.js"></script>

<!-------------Configurações do PHP---------->

<?php

if(isset($_POST['submit'])){

    include_once('conectar.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sexo = $_POST['sexo'];

    $clientes = mysqli_query($conexao, "INSERT INTO cadastro_clientes(nome_cliente, email_cliente, senha_cliente, sexo_cliente) VALUES
    ('$nome', '$email', '$senha', '$sexo')");

    header('Location:entrar.php');

}

?>
    
</body>
</html>