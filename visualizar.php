<?php
require_once "../exercicio-php-crud/src/funcoes.php";
$listaDeAlunos = lerAlunos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>


    <table>
        <caption>Lista de Alunos</caption>
        <thead> 
                <th>id</th>
                <th>Nome</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Média</th>
                <th>situacao</th>
        </thead>

        <tbody>
        <?php
        foreach ($listaDeAlunos as $aluno) {
        ?>
            <tr>
                <td class="alunos id"><?= $aluno ['id'] ?></td>
                <td class="alunos nome"><?= $aluno ['nome'] ?></td>
                <td class="alunos primeira"><?= $aluno ['primeira'] ?></td>
                <td class="alunos segunda"><?= $aluno ['segunda'] ?></td>
                <td class="alunos media"><?= $aluno ['media'] ?></td>
                <td class="alunos situacao" id="situacaoAluno"><?= $aluno ['situacao'] ?></td>
                <td class="alunos atualizar"><a href="atualizar.php?id=<?=$aluno['id']?>">Atualizar</a></td>
                <td class="alunos excluir"><a href="excluir.php?id=<?=$aluno['id']?>" class="exclusao" >Excluir</a></td>
                
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.



Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


    <p><a href="index.php">Voltar ao início</a></p>
</div>
<script src="script.js"></script>
</body>
</html>