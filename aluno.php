<?php 
require 'Aluno.class.php';
$aluno = new Aluno();

$con = $aluno->conectar();


if($con) {
    $al = $aluno->consulta("kayan.denizo@gmail.com");
    if(!$al) {
        $aluno->cadastrar("1233", "Kayan Denizo", "kayan.denizo@gmail.com", "z-456-198-232");
    } else {
        echo "Aluno ja cadastrado";
    }
} else {
    echo "Sem conexao com o BD";
}
?>