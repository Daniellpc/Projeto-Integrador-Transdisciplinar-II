<?php

//criar uma sessão
session_start();
//destruir as variáveis

unset($_SESSION['email_cliente']);
unset($_SESSION['senha_cliente']);

//direcionamento para outra página

header('Location:index.html');


?>