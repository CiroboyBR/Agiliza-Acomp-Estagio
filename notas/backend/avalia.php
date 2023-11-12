<?php
 ini_set ('display_errors', 1); ini_set ('display_startup_errors', 1); error_reporting (E_ALL);

require_once("conexaoMysql.php");
require_once("../utils.php");
//print_r($_POST);

if(isset($_POST['r1']))
    $r1 = protegeQuery($_POST['r1']);
if(isset($_POST['r2']))
    $r2 = protegeQuery($_POST['r2']);
if(isset($_POST['r3']))
    $r3 = protegeQuery($_POST['r3']);
if(isset($_POST['r4']))
    $r4 = protegeQuery($_POST['r4']);
if(isset($_POST['r5']))
    $r5 = protegeQuery($_POST['r5']);
if(isset($_POST['r6']))
    $r6 = protegeQuery($_POST['r6']);
if(isset($_POST['r7']))
    $r7 = protegeQuery($_POST['r7']);

if(isset($_POST['chave'])) {
$chave = protegeQuery($_POST['chave']);


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

// // //Insere a variavel $nome na tabela do banco de dados
$resultado = mysqli_query($conn, "UPDATE notas_tre SET r1=$r1, r2=$r2, r3=$r3, r4=$r4, r5=$r5, r6=$r6, r7=$r7 WHERE chave='$chave'");

    if ($resultado){
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/css.css?v=<?php echo str_shuffle("ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789");?>">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <script src="../libs/sweetalert2.all.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/js.js?v=<?php echo str_shuffle("ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789");?></script>"></script>
    <title>Avaliação de Aluno - Nota 50%</title>
</head>
<body>
    <div class="container" style="margin: 0 auto; text-align: center;">
        <img id="imggato" src="fotos/gato.gif" alt="">

        <style>
            #imggato{
                width: 60%;
            }
        </style>
    </div>

    

<script>msgOK("Notas Cadastradas/Atualizadas", 3000)</script>    
</body>
</html>

        <?php
        
    }
    else {
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/css.css?v=<?php echo str_shuffle("ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789");?>">
    <link rel="stylesheet" href="../css/bootstrap.css">

    <script src="../libs/sweetalert2.all.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/js.js?v=<?php echo str_shuffle("ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789");?></script>"></script>
    <title>Avaliação de Aluno - Nota 50%</title>
</head>
<body>
  

    

<script>msgErro("Erro ao cadastrar!", 3000)</script>    
</body>
</html>

        <?php
    }
}


    
    mysqli_close($conn);
    exit();


?>
