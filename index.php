<?php

require 'Banco.class.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sstyle.css">
</head>

<body>
    <h1>Banco XYZ</h1>
    <h3>Correntista</h3>

    <?php 
    $banco = new Banco();
    $con = $banco->conectar();

    if ($con) {
        $dados = $banco->localizarTitular(1);

        if (!empty ($dados)) {
            ?>
            Titular: <?php echo $dados['titular'];?> <br>
            Agencia: <?php echo $dados['agencia'];?> <br>
            Conta: <?php echo $dados['conta'];?> <br>
            Agencia: <?php echo $dados['agencia'];?> <br>
            <?php      
        } else {
            echo "<script>alert('Titular nao encontrado!')</script>";
        }
    } else {
        echo"<script>alert('Banco Indispovivek')</script>";
        exit;
    }
    ?>


    <a href="sair.php">Sair</a> <br>
    <hr>
    <h3>Movimentação/Extrato</h3>
    <a href="ad_transacao.php">Adicionar transação</a> <br> <br>
</body>

</html>