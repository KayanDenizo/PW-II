<?php
class Aluno{
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;
    private $pdo;

    public function conectar(){
        $dns    = "mysql:dbname=etimpwiiAluno;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getId(){
        return $this->id;
    }
    public function getRm(){
        return $this->rm;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;
    }

    public function setRm($rm){
        $this->rm = $rm ;
    }
    public function setNome($nome){
        $this->nome = $nome ;
    }
    public function setEmail($email){
        $this->email = $email ;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf ;
    }

    public function cadastrar($rm, $nome, $email, $cpf){
        # criar uma variavel com a conulta SQL
        $sql = "INSERT INTO aluno set rm = :r, nome = :n, email = :e, cpf = :c";
        
        # se o metodo tem parametros, temos que usar o apelido para passar os valores 
        # e chamar o metodo prepare do PDO
        $sql = $this->pdo->prepare($sql);

        #para cada apelido, ligar com o valor do parametro passado
        $sql-> bindValue(":r", $rm);
        $sql-> bindValue(":n", $nome);
        $sql-> bindValue(":e", $email);
        $sql-> bindValue(":c", $cpf);

        #executar o comando
        return $sql->execute();
    }

    public function consultar($email){
        $sql = "SELECT *FROM aluno WHERE email = :e";
        $sql = $this->pdo->prepare($sql);
        $sql-> bindValue(":e", $email);
        $sql->execute();

        return $sql->rowCount() > 0;
        
    }

    public function login($email, $senha){
        $sql = "SELECT * FROM aluno WHERE email = :e";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":e", $email);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            if(password_verify($senha, $dados['senha'])){
                // Preencher os atributos da classe com os dados do usuário
                $this->id = $dados['id'];
                $this->rm = $dados['rm'];
                $this->nome = $dados['nome'];
                $this->email = $dados['email'];
                $this->cpf = $dados['cpf'];
                return true;
            }
        }
        return false;
    }

    public function verificarEmail($email){
        return $this->consultar($email);
    }

    public function cadastrarComSenha($rm, $nome, $email, $cpf, $senha){
        // Verificar se o email já existe
        if($this->verificarEmail($email)){
            return false; // Email já cadastrado
        }
        
        $sql = "INSERT INTO aluno SET rm = :r, nome = :n, email = :e, cpf = :c, senha = :s";
        $sql = $this->pdo->prepare($sql);
        
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        
        $sql->bindValue(":r", $rm);
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":c", $cpf);
        $sql->bindValue(":s", $senhaHash);
        
        return $sql->execute();
    }


}

