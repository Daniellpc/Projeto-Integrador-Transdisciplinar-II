<?php

if(isset($_POST['submit_1'])){

    include_once('conectar.php');

    $nomeBolo = $_POST['nomeBolo'];
    $valorBolo = $_POST['valorBolo'];    

    $produtos = mysqli_query($conexao, "UPDATE produtos SET nome_produto = '$nomeBolo', valor_produto = '$valorBolo' WHERE id= '1'");    

    header('Location:administrador.php');

}

if(isset($_POST['submit_2'])){

    include_once('conectar.php');

    $nomeAlfajor = $_POST['nomeAlfajor'];
    $valorAlfajor = $_POST['valorAlfajor'];    

    $produtos = mysqli_query($conexao, "UPDATE produtos SET nome_produto = '$nomeAlfajor', valor_produto = '$valorAlfajor' WHERE id= '2'");    

    header('Location:administrador.php');

}

if(isset($_POST['submit_3'])){

    include_once('conectar.php');

    $nomeTorta = $_POST['nomeTorta'];
    $valorTorta = $_POST['valorTorta'];    

    $produtos = mysqli_query($conexao, "UPDATE produtos SET nome_produto = '$nomeTorta', valor_produto = '$valorTorta' WHERE id= '3'");    

    header('Location:administrador.php');

}

if(isset($_POST['submit_4'])){

    include_once('conectar.php');

    $nomeBebida = $_POST['nomeBebida'];
    $valorBebida = $_POST['valorBebida'];    

    $produtos = mysqli_query($conexao, "UPDATE produtos SET nome_produto = '$nomeBebida', valor_produto = '$valorBebida' WHERE id= '4'");    

    header('Location:administrador.php');

}



?>

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

    <!--Inicio da Página de Cardápio-->

    <div class="container">
        <form action="administrador.php" method = 'post'>
        <div class="linha-produtos">
            
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="img/bolo.png" alt="" class= "produtoMiniatura">                        
                </div>
                <div class="titulo">
                    <p><input type="text" name= "nomeBolo" placeholder=" Digite o Nome"></p>
                    <h2>R$ <input type="text" name= "valorBolo" placeholder="Valor"></h2>                    
                    <button type="submit" class="button" name="submit_1"  >Atualizar</button>
                </div>
            </div>
            

            
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="img/alfajor.png" alt="" class= "produtoMiniatura">                        
                </div>
                <div class="titulo">
                <p><input type="text" name= "nomeAlfajor" placeholder=" Digite o Nome"></p>
                    <h2>R$ <input type="text" name= "valorAlfajor" placeholder="Valor"></h2>                    
                    <button type="submit" class="button" name="submit_2"  >Atualizar</button>
                </div>
            </div>
            

            
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="img/torta.png" alt="" class= "produtoMiniatura">                        
                </div>
                <div class="titulo">
                <p><input type="text" name= "nomeTorta" placeholder=" Digite o Nome"></p>
                    <h2>R$ <input type="text" name= "valorTorta" placeholder="Valor"></h2>                    
                    <button type="submit" class="button" name="submit_3"  >Atualizar</button>
                </div>
            </div>
            

            
            <div class="corpoProduto">
                <div class="imgProduto">
                    <img src="img/capuccino.png"alt="" class= "produtoMiniatura">                        
                </div>
                <div class="titulo">
                <p><input type="text" name= "nomeBebida" placeholder=" Digite o Nome"></p>
                    <h2>R$ <input type="text" name= "valorBebida" placeholder="Valor"></h2>                    
                    <button type="submit" class="button" name="submit_4"  >Atualizar</button>
                </div>
            </div>
            
        </div>
        </form>

    </div>

    
<!------Início do Rodapé------->

    

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


    
</body>
</html>