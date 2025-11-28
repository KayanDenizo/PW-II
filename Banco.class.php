<?php

class Banco
{
    private $pdo;

    public function conectar()
    {
        try {
            $dbname = "mysql:dbname=caixaeletronico; host=localhost";
            $dbUser = "root";
            $dbPass = "";

            $this->pdo = new PDO($dbname, $dbUser, $dbPass);
            return true;
        } catch (exception $e) {
            return false;
        }
    }

    public function localizarTitular($id)
    {
        $sql = "SELECT *FROM contas WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $id);

        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dados = $sql->fetch();
        } else {
            $dados = array();
        }
        return $dados;
    }
}
