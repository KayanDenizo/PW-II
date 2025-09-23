<?php 
session_start();
require 'Aluno.class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Criar instância da classe Aluno
    $aluno = new Aluno();
    
    // Conectar ao banco
    if ($aluno->conectar()) {
        // Tentar fazer login
        if ($aluno->login($email, $password)) {
            // Login bem-sucedido - armazenar dados na sessão
            $_SESSION['aluno_id'] = $aluno->getId();
            $_SESSION['aluno_rm'] = $aluno->getRm();
            $_SESSION['aluno_nome'] = $aluno->getNome();
            $_SESSION['aluno_email'] = $aluno->getEmail();
            $_SESSION['aluno_cpf'] = $aluno->getCpf();
            
            header('Location: account.php');
            exit();
        } else {
            echo "Email ou senha incorretos!";
        }
    } else {
        echo "Erro de conexão com o banco de dados!";
    }
}
?>