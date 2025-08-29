<?php

class Aluno {
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;
    private $pdo;

    public function conectar() {
        $dsn = "mysql:dbname=etimpwiialuno;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dsn, $dbUser, $dbPass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (\PDOException $e) {
            return false;
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getRm() {
        return $this->rm;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setRm($rm) {
        $this->rm = $rm;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function cadastrar($rm, $nome, $email, $cpf) {
        $sql = "INSERT INTO aluno (rm, nome, email, cpf) VALUES (:r, :n, :e, :c)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":r", $rm);
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":c", $cpf);

        return $sql->execute();
    }

    public function consulta($email) {
        $sql="SELECT * FROM where email = :e";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":e", $email);
        return $sql->rowCount() > 0;
    }
}
