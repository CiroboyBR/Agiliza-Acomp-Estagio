<?php

require_once("conexaoMysql.php");
print_r($_POST);

$nome = $_POST['nome'];
$foto = $_POST['foto'];

$chave = str_shuffle("ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789");
$chave = substr($chave, 0, 10);

echo $chave;

// //Insere a variavel $nome na tabela do banco de dados
$resultado = mysqli_query($conn, "INSERT INTO notas_tre(nome, foto, chave, dt) VALUES('$nome', '$foto', '$chave', now())");

if ($resultado){
    echo "OK";
    header("Location: ../cadastraAluno.php");
}
else 
    echo "FAIL";
    
    mysqli_close($conn);
    exit();

?>
