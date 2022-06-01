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
<link rel="stylesheet" href="../exercicio-php-crud/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php" class="btn btn-success"><i class="bi bi-plus-lg"></i> Inserir novo aluno</a></p>
    <div class="table-responsive">
    <table class="table table-hover">
        <caption>Lista de Alunos</caption>
        <thead> 
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Nota 1</th>
                <th scope="col">Nota 2</th>
                <th scope="col">Média</th>
                <th scope="col">situacao</th>
        </thead>
        <tbody>
        <?php
        foreach ($listaDeAlunos as $aluno) {
        ?>
            <tr class="<?= ($aluno ['media'] >= 7 ) ? 'table-success' : 'table-danger'; ?>">
                <th scope="row" class="alunos id"><?= $aluno ['id'] ?></th>
                <td class="alunos nome"><?= $aluno ['nome'] ?></td>
                <td class="alunos primeira"><?= $aluno ['primeira'] ?></td>
                <td class="alunos segunda"><?= $aluno ['segunda'] ?></td>
                <td class="alunos media"><?= $aluno ['media'] ?></td>
                <td class="alunos situacao"><?= $aluno ['situacao'] ?></td>
                <td class="alunos atualizar"><a href="atualizar.php?id=<?=$aluno['id']?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i>Edit</a></td>
                <td class="alunos excluir"><a href="excluir.php?id=<?=$aluno['id']?>" class="exclusao btn btn-danger" ><i class="bi bi-trash"></i>Delete</a></td>
                
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    </div>
   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->
    <p><a href="index.php" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Voltar ao início</a></p>
</div>
<script src="script.js"></script>
</body>
</html>