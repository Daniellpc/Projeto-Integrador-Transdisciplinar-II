<!--Configurações do PHP-->
<?php

$resultado1 = 0;
$resultado2 = 0;
$resultado3 = 0;
$subtotal = 0;

if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];        
    $resultado1 = 30 * $num1;
    $resultado2 = 5 * $num2;
    $resultado3 = 10 * $num3;              
}





session_start();

if(!isset($_SESSION['email_cliente'])
==true) //and (!isset($_SESSION
//['senha_cliente'])==true)
{
    //destruir as variáveis
    unset($_SESSION['email_cliente']);
    unset($_SESSION['senha_cliente']);
    header('Location:entrar.php');
}
else{
    //criar uma variável de acesso
    $logado = $_SESSION['email_cliente'];
    
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <section class="barra_top">
        <div class="barra">
            <h1>Área do Usuário</h1>
        </div>

        <div class="barra">
            <a href="sair.php">SAIR</a>
        </div>
    </section>

    <section class="usuario">
        <?php 
        echo "<h2>Olá, $logado</h2>"
        ?>
        <p>Seja Bem-vindo a Tasty Café</p>      


    </section>

    <div class="carrinho">
        <table>
            <form action="usuario.php" method="post">
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>
                        <div class="info-carrinho">
                            <img src="img/bolo" alt="">

                            <div>
                                <p>Bolo de Chocolate</p>
                                <small>Valor: R$30</small>
                                <br>
                                <a href="" title="">Remover</a>
                            </div>

                        </div>
                    </td>
                    <td>
                        
                            <input type="number" name="num1" id="" value="0">
                            <br>
                            
                            
                        
                    </td>
                    <td>R$ <?php echo $resultado1?></td>
                </tr>

                
                <tr>
                    <td>
                        <div class="info-carrinho">
                            <img src="img/capuccino" alt="">

                            <div>
                                <p>Cappucino</p>
                                <small>Valor: R$ 5</small>
                                <br>
                                <a href="" title="">Remover</a>
                            </div>

                        </div>
                    </td>
                    <td>                   
                            <input type="number" name="num2" id="" value="0">
                            <input type="submit" name= "submit" id="btn_adicionar" value="+" >                                     
                            
                            
                                            
                    </td>
                    
                    <td>R$ <?php echo $resultado2?></td>
                </tr>

                
                <tr>
                    <td>
                        <div class="info-carrinho">
                            <img src="img/torta" alt="">

                            <div>
                                <p>Torta de Morango</p>
                                <small>Valor: R$ 10</small>
                                <br>
                                <a href="" title="">Remover</a>
                            </div>

                        </div>
                    </td>
                    <td>
                        
                            <input type="number" name="num3" id="" value="0">
                            <br>
                            
                                                    
                        
                    </td>
                    <td>R$ <?php echo $resultado3?></td>
                </tr>
                
            </form>

        </table>

        <div class="valor-total">
            <table>
                <tr>
                    <td>Sub-Total: </td>
                    <td>R$ <?php echo $resultado1 + $resultado2 + $resultado3?></td>
                </tr>

                <tr>
                    <td>Frete</td>
                    <td>R$ <?php echo (($resultado1 + $resultado2 + $resultado3) * 0.15)?></td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>R$ <?php echo (($resultado1 + $resultado2 + $resultado3) * 1.15)?></td>
                </tr>


            </table>
        </div>

        <div class="finalizar">
            
        <button type="submit" class="button" name="finalizarCompra" onclick="location.href = 'index.html'" >Finalizar Compra</button>

        </div>




    </div>

    


     <!--Inserir os dados do Rodapé-->

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


    
</body>
</html>