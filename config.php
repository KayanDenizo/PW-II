<?php

class Banco {
    public function conectar()
    {
        try {
            $dbname = "mysql:dbname=caixaeletronico;host=localhost";
            $dbUser = "root";
            $dbPass = "";

            $pdo = new PDO($dbname, $dbUser, $dbPass);
            return true;
        } catch (Exception $e) {
            return false;
            exit;
        }
    }
    public function localizarTitular($id) {
        $sql = "SELECT * FROM contas WHERE id = :id";
        $cmd = $pdo->prepare($sql);
        $cmd-> bindValue(":id", $id);
        
        $cmd->execute();

        if ($cmd->rowCount() > 0) {
            $dados = $cmd->fetch();
            return $dados;

        } else {
            return array();
        }

    }
}
