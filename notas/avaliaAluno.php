
<?php
require_once("backend/conexaoMysql.php");
require_once("utils.php");

if( isset($_GET["chave"]) ) {
    $chave = protegeQuery($_GET["chave"]);

    $queryLista = "SELECT * FROM notas_tre where chave = '$chave' LIMIT 1";
    $resultado_queryLista = mysqli_query($conn, $queryLista);

    $nome;
    $foto;

    foreach($resultado_queryLista as $linha) {
        $nome = $linha['nome'];
        $foto = $linha['foto'];
    }

    // echo $nome . " - " . $foto;
}
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
    <title>Avaliação de Aluno - Nota 50%</title>
</head>
<body>

    <div class='bg-info' style="text-align: center;">
        <h3> FORMULÁRIO DE AVALIAÇÃO</h3>
    </div>

    <div id="fotoAluno">
        <img src="backend/fotos/<?=$foto?>" alt=""><br>
        <h3> <?=$nome?> </h3>
    </div>
    

    <style>
        #fotoAluno{
            text-align: center !important;
            margin: 0 auto !important;
        }
    </style>


    <div class="container">

    <div class="row">
        <div class='container col-md-10'>
            <form action="backend/avalia.php" method="post">


                <input type="hidden" name="chave" value="<?=$chave?>">

                <div class='row'><div class='col-md-12'><label>ASSIDUIDADE E PONTUALIDADE</label>
                        <select id="r1" name="r1" required>
                                <option SELECTED value="1">1 - Ótimo</option>
                                <option value="2">2 - Bom</option>
                                <option value="3">3 - Regular</option>
                                <option value="4">4 - Ruim</option>
                        </select></div>
                </div><br>

                <div class='row'><div class='col-md-12'><label>RELACIONAMENTO INTERPESSOAL</label>
                        <select id="r6" name="r6" required>
                                <option SELECTED value="1">1 - Ótimo</option>
                                <option value="2">2 - Bom</option>
                                <option value="3">3 - Regular</option>
                                <option value="4">4 - Ruim</option>
                        </select></div>
                </div><br>

              
                <div class='row'><div class='col-md-12'><label>ACEITAÇÃO E ADEQUAÇÃO ÀS NORMAS INTERNAS</label>
                        <select id="r7" name="r7" required>
                                <option SELECTED value="1">1 - Ótimo</option>
                                <option value="2">2 - Bom</option>
                                <option value="3">3 - Regular</option>
                                <option value="4">4 - Ruim</option>
                        </select></div>
                </div><br>

                <div class='row'><div class='col-md-12'><label>CUMPRIMENTO DAS ATIVIDADES PROPOSTAS NO PLANO DE ATIVIDADES DO ESTAGIÁRIO</label>
                        <select id="r2" name="r2" required>
                                <option SELECTED value="1">1 - Ótimo</option>
                                <option value="2">2 - Bom</option>
                                <option value="3">3 - Regular</option>
                                <option value="4">4 - Ruim</option>
                        </select></div>
                </div><br>

                <div class='row'><div class='col-md-12'><label> COMPROMETIMENTO NAS TAREFAS: BUSCOU AUXÍLIO DO(A) SUPERVISOR(A) PARA ESCLARECER
DÚVIDAS E DEMONSTROU ATENÇÃO AO CONTEÚDO EXPLICADO</label>
                        <select id="r3" name="r3" required>
                                <option SELECTED value="1">1 - Ótimo</option>
                                <option value="2">2 - Bom</option>
                                <option value="3">3 - Regular</option>
                                <option value="4">4 - Ruim</option>
                        </select></div>
                </div><br><br>

                <div class='row'><div class='col-md-12'><label>PREPARO TÉCNICO-CIENTÍFICO PARA DESENVOLVER AS ATIVIDADES: DEMONSTRAÇÃO DE
TÉCNICA NO DESENVOLVIMENTO DAS ATIVIDADES</label>
                        <select id="r4" name="r4" required>
                                <option SELECTED value="1">1 - Ótimo</option>
                                <option value="2">2 - Bom</option>
                                <option value="3">3 - Regular</option>
                                <option value="4">4 - Ruim</option>
                        </select></div>
                </div><br><br>

                <div class='row'><div class='col-md-12'><label>INICIATIVA: CAPACIDADE PARA APRESENTAR SUGESTÕES OU RESOLVER OS PROBLEMAS
PROPOSTOS</label>
                        <select id="r5" name="r5" required>
                                <option SELECTED value="1">1 - Ótimo</option>
                                <option value="2">2 - Bom</option>
                                <option value="3">3 - Regular</option>
                                <option value="4">4 - Ruim</option>
                        </select></div>
                </div><br><br>

                <input type="hidden" name="chave" value="<?= $chave?>">

              

                <br>
                <div class='botoes' style="text-align: center;">
                    <div class='divBotao'>
                        <input type="submit" class="botaoSame" value="ENVIAR" style="width: 40%; padding: 0.5%;">
                    </div>

                </div>
            </form>
        </div>
    </div>

    </div>




    <!-- Tela de carregamento -->
    <div class="modal" id="modal">
        <h1 class="modalTexto">Carregando...<h1>
    </div>



    <!-- DIV PARA EVITAR QUE O FOOTER FIXO CUBRA DADOS DA TABELA-->
    <div class="divEspacamento"></div>

    <!--Footer da p�gina-->
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
            Sistema desenvolvido por: @CiroboyBR
            <!-- <br>Youtube: <a class="linkYT" href="https://www.youtube.com/c/CiroMenesesBR" target="_blank"
                rel="noopener noreferrer">https://www.youtube.com/c/CiroMenesesBR</a> -->
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