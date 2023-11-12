
<?php

function converteNota($notaSTR){
    if(intval($notaSTR) == 1)
        return floatval(10);
    elseif(intval($notaSTR) == 2)
        return floatval(8);
    elseif(intval($notaSTR) == 3)
        return floatval(6);
    elseif(intval($notaSTR) == 4)
        return floatval(4);
}



require_once("backend/conexaoMysql.php");
require_once("utils.php");

$queryLista = "SELECT nome, foto, chave, dt, r1, r2,r3,r4,r5,r6,r7 from notas_tre order by foto ASC";
$resultado_queryLista = mysqli_query($conn, $queryLista);


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/css.css?v=<?php echo str_shuffle("ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789");?>">
    <link rel="stylesheet" href="css/bootstrap.css">

    <script src="libs/sweetalert2.all.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/js.js?v=<?php echo str_shuffle("ABCDEFGHIJKLMNOPQRSTUVXYZ0123456789");?></script>"></script>
    <title>Gerenciamento notas</title>
</head>
<body>

    <div class='bg-info' style="text-align: center;">
        <h3> GERENCIAMENTO</h3>
    </div>
    

    <style>
        td{
            vertical-align: middle !important;
            margin: 0 auto !important;
        }
        #fotoAluno{
            text-align: center !important;
            margin: 0 auto !important;
        }

        tr:hover{
            background-color: lightslategray;
        }

        .thCenter{
            text-align: center;
        }
        
    </style>


    <div class="container">
    
    <table class="table">
        <tr>
            <th class="thCenter">FOTO</th>
            <th class="thCenter">NOME</th>
            <th class="thCenter">CHAVE</th>
            <th class="thCenter">CRIACAO</th>
            <th class="thCenter">N1</th>
            <th class="thCenter">N6</th>
            <th class="thCenter">N7</th>
            <th class="thCenter">N2</th>
            <th class="thCenter">N3</th>
            <th class="thCenter">N4</th>
            <th class="thCenter">N5</th>
            <th class="thCenter">TOTAL</th>
            
        </tr>
        <?php
        foreach($resultado_queryLista as $row) {
            $notaTotal = converteNota($row['r1']) + converteNota($row['r2']) + converteNota($row['r3']) + converteNota($row['r4']) + converteNota($row['r5']) + converteNota($row['r6']) + converteNota($row['r7']);
            $notaTotal = $notaTotal / 7;
        ?>
        <tr>
            <td style="background-color: white;"><img src="backend/fotos/<?= $row['foto']?>" alt="" srcset=""></td>
            <td><?= $row['nome']?></td>
            <td><a href="avaliaAluno.php?chave=<?= $row['chave']?>" target="_blank" rel="noopener noreferrer"><?= $row['chave']?></a></td>
            <td><?= $row['dt']?></td>
            <td title="ASSIDUIDADE E PONTUALIDADE"><?= $row['r1']?></td>
            <td title="RELACIONAMENTO INTERPESSOAL"><?= $row['r6']?></td>
            <td title="ACEITAÇÃO E ADEQUAÇÃO ÀS NORMAS INTERNAS"><?= $row['r7']?></td>
            <td title="CUMPRIMENTO DAS ATIVIDADES PROPOSTAS NO PLANO DE ATIVIDADES DO ESTAGIÁRIO"><?= $row['r2']?></td>
            <td title="COMPROMETIMENTO NAS TAREFAS: BUSCOU AUXÍLIO DO(A) SUPERVISOR(A) PARA ESCLARECER DÚVIDAS E DEMONSTROU ATENÇÃO AO CONTEÚDO EXPLICADO"><?= $row['r3']?></td>
            <td title="PREPARO TÉCNICO-CIENTÍFICO PARA DESENVOLVER AS ATIVIDADES: DEMONSTRAÇÃO DE TÉCNICA NO DESENVOLVIMENTO DAS ATIVIDADES"><?= $row['r4']?></td>
            <td title="INICIATIVA: CAPACIDADE PARA APRESENTAR SUGESTÕES OU RESOLVER OS PROBLEMAS PROPOSTOS"><?= $row['r5']?></td>
            <td title="NOTA FINAL DO ALUNO"><?= round($notaTotal, 1)?></td>
            
        </tr>
        
        <?php
        
        }
        
        ?>
        
    </table>


    </div>

    <!-- Tela de carregamento -->
    <div class="modal" id="modal">
        <h1 class="modalTexto">Carregando...<h1>
    </div>



    <!-- DIV PARA EVITAR QUE O FOOTER FIXO CUBRA DADOS DA TABELA-->
    <div class="divEspacamento"></div>

    <!--Footer da pagina-->
    <footer>
        <span class="spanFooter">
            <style>
                .divLeftAlign{
                    font-size: large;
                    font-family: Arial, Helvetica, sans-serif;
                    text-align: left;
                    margin-top: 0.5%;
                    margin-left: 0.5%;
                    margin-right: 0.5%;
                }
                .linkYT {
                    color: red;
                }
            </style>
            Desenvolvedor: @CiroboyBR
            <br>Youtube: <a class="linkYT" href="https://www.youtube.com/c/CiroMenesesBR" target="_blank"
                rel="noopener noreferrer">https://www.youtube.com/c/CiroMenesesBR</a>
        </span>
    </footer>

    <style>
        .divEspacamento {
            height: 300px;
        }

        .divCorpo {
            margin-left: 0.5%;
            margin-right: 0.5%;
        }

        .botaoSame:hover{
            background-color: rgb(195, 255, 235) !important;
            
        }
    </style>


    
</body>
</html>
