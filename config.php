<?php

class Banco {
    public function conectar()
    {
        try {
            $dbname = "mysql:dbname=caixaeletronico; host=localhost";
            $dbUser = "root";
            $dbPass = "";

            $pdo = new PDO($dbname, $dbUser, $dbPass);
            return true;
        } catch (PDOException $e) {
            return false;
            exit;
        }
    }
    public function localizarTitular($id) {
        $sql = "SELECT * FROM contas WHERE id = $id";
    }
}
