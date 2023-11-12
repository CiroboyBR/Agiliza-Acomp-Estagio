<?php
$servidor = "localhost";
$usuario = "root";
$banco = "eeep";
$senha = "";
 

//cria conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

mysqli_character_set_name($conn);

/* change character set to utf8mb4 */
mysqli_set_charset($conn, "utf8mb4");
mysqli_character_set_name($conn);
?>