<?php

class Aluno {
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;
    private $pdo;

    public function conectar() {
        private $dns = "mysql:dbname=etimpwiialuno,host=localhost";
        private $dbUser = "root";
        private $dbPass =  "";

        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getId() {
        return $this->id;
    }
    public function getRm() {
        return $this->rm;
    }
    public function getnome() {
        return $this->nome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getCpf() {
        return $this->cpf;
    }

    public function set($rm) {
        $this->rm = $rm;
    }
    public function set($nome) {
        $this->nome = $nome;
    }
    public function set($email) {
        $this->email = $email;
    }
    public function set($cpf) {
        $this->cpf = $cpf;
    }

    public function cadastrar($rm, $nome, $email, $cpf) {
        # criar uma variavel com consulta sql

        $sql = "INSERT INTO aluno set rm = :r, nome = :n, email = :e, cpf = :c";
        $sql = $this->pdo->prepare($sql);
        $sql-> bindValue(":r", $rm)
        $sql-> bindValue(":n", $nome)
        $sql-> bindValue(":e", $email)
        $sql-> bindValue(":c", $cpf)

        return->$sql->execute();


    }
    
}

