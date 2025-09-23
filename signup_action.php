<?php 
require 'Aluno.class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rm = $_POST['rm'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    
    // Verificar se as senhas coincidem
    if ($password !== $password_confirm) {
        echo "As senhas não coincidem!";
        exit();
    }
    
    // Criar instância da classe Aluno
    $aluno = new Aluno();
    
    // Conectar ao banco
    if ($aluno->conectar()) {
        // Tentar cadastrar o aluno
        if ($aluno->cadastrarComSenha($rm, $nome, $email, $cpf, $password)) {
            echo "Cadastro realizado com sucesso!";
            echo "<br><a href='index.php'>Voltar ao login</a>";
        } else {
            echo "Erro ao cadastrar! Verifique se o email já não está em uso ou tente novamente.";
        }
    } else {
        echo "Erro de conexão com o banco de dados!";
    }
}
?>