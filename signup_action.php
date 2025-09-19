<?php 
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

$sql = "INSERT INTO users (email, password) VALUES (?,?)";
$stmt = $pdo->prepare($sql);
if ($stmt->execute([$email, $password])) {
    header("Location: cadastro-sucesso.php");
} else {
    echo "Erro ao cadastrar, tente mais tarde!";
}
?>