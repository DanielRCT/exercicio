<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $usuario_esperado = "usuario";
    $senha_esperada = "senha";

    
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario === $usuario_esperado && $senha === $senha_esperada) {
    
        header("Location: sucesso.php");
        exit;
    } else {
    
        header("Location: falha.php");
        exit;
    }
} else {
   
    header("Location: login.php");
    exit;
}
?>
