<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['aluno_id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta do Aluno</title>
    <link rel="stylesheet" href="css/index.css">
    <style>
        .account-info {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .account-info h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }
        .info-item {
            margin-bottom: 15px;
            padding: 10px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        .info-label {
            font-weight: bold;
            color: #555;
        }
        .info-value {
            color: #333;
        }
        .logout-btn {
            display: block;
            width: 100%;
            padding: 12px;
            background: #dc3545;
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            margin-top: 20px;
            transition: background 0.3s;
        }
        .logout-btn:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <div class="account-info">
        <h1>Informações da Conta</h1>
        
        <div class="info-item">
            <span class="info-label">ID:</span>
            <span class="info-value"><?php echo $_SESSION['aluno_id']; ?></span>
        </div>
        
        <div class="info-item">
            <span class="info-label">RM:</span>
            <span class="info-value"><?php echo $_SESSION['aluno_rm']; ?></span>
        </div>
        
        <div class="info-item">
            <span class="info-label">Nome:</span>
            <span class="info-value"><?php echo $_SESSION['aluno_nome']; ?></span>
        </div>
        
        <div class="info-item">
            <span class="info-label">Email:</span>
            <span class="info-value"><?php echo $_SESSION['aluno_email']; ?></span>
        </div>
        
        <div class="info-item">
            <span class="info-label">CPF:</span>
            <span class="info-value"><?php echo $_SESSION['aluno_cpf']; ?></span>
        </div>
        
        <a href="logout.php" class="logout-btn">Sair</a>
    </div>
</body>
</html>
