<?php

session_start();

// Criacao de uma sessao
$_SESSION["nome"] = "Kayan";

header("location:pagina2.php");