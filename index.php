<?php

require 'config.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Banco XYZ</h1>
    <h3>Correntista</h3>
    Titular: <?php 
    echo $dados['titular']; ?> <br>
    Agência: <?php echo $dados['agencia'] ?> <br>
    Conta: <?php echo $dados['conta']; ?> <br>
    Saldo: <?php echo $dados['saldo']; ?> <br>

    <a href="sair.php">Sair</a> <br>
    <hr>
    <h3>Movimentação/Extrato</h3>
    <a href="ad_transacao.php">Adicionar transação</a> <br> <br>
</body>

</html>