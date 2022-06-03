<?php
require_once "src/funcoes.php";
$listaDeAlunos = lerAlunos($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <h1 class="text-center mt-4">Lista de alunos</h1>
    <hr>
    <div class=" container responsive-table center shadow mt-1 mb-2">
    <table class="table table-hover" id="the-table">
        <thead> 
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Nota 1</th>
                <th scope="col">Nota 2</th>
                <th scope="col">Média</th>
                <th scope="col">situacao</th>
                <th scope="col"> Editar</th>
                <th scope="col">Excluir</th>
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
                <td class="alunos atualizar"><a href="atualizar.php?id=<?=$aluno['id']?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
                <td class="alunos excluir"><a href="excluir.php?id=<?=$aluno['id']?>" class="exclusao btn btn-danger" ><i class="bi bi-trash"></i></a></td>
                
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
        <div class="row mt-4">
        <p class="col text-center"><a href="index.php" class="btn btn-secondary btn-lg"><i class="bi bi-arrow-left"></i> Voltar ao início</a></p>
    <p class="col text-center"><a href="inserir.php" class="btn btn-success btn-lg"><i class="bi bi-plus-lg"></i> Inserir novo aluno</a></p>
        </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>


<script src="script.js"></script>

</body>
</html>