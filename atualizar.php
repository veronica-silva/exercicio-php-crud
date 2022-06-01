<?php
require_once "../exercicio-php-crud/src/funcoes.php";
$listaDeAlunos = lerAlunos($conexao);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$aluno = lerUmAluno($conexao, $id);
$listaDeAlunos = lerAlunos($conexao);
    if(isset($_POST['atualizar'])){
        //echo "ok!";
        require_once "../exercicio-php-crud/src/funcoes.php";
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
		$primeira = filter_input(INPUT_POST, 'primeira', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$segunda = filter_input(INPUT_POST, 'segunda', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$media = ($primeira + $segunda)/2;
		if ($media >= 7) {
			$situacao = 'Aprovado';
		} else {
			$situacao = 'Reprovado';
		}
        atualizarAluno($conexao, $id, $nome, $primeira, $segunda, $media, $situacao);
        header("location:visualizar.php?status=sucesso");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="../exercicio-php-crud/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <h1 class="text-center mt-4">Atualizar dados do aluno </h1>
    <hr>		
    <p class="text-center">Utilize o formulário abaixo para atualizar os dados do aluno.</p>  
    <form action="" method="post">
        <p>
            <label for="nome" class="form-label">Nome:</label>
	        <input type="text" class="form-control mb-4" name="nome" id="nome" value="<?= $aluno['nome']?>" required>
        </p>
        <div class="row">
            <div class="col">
            <p>
            <label for="primeira" class="form-label">Primeira nota:</label>
	        <input name="primeira" class="form-control" type="number" id="primeira" oninput="getAverage()" value="<?= $aluno['primeira']?>" step="0.1" min="0.0" max="10" required>
        </p>
            </div>
            <div class="col">
            <p>
            <label for="segunda" class="form-label">Segunda nota:</label>
	        <input name="segunda" class="form-control" type="number" id="segunda" oninput="getAverage()" value="<?= $aluno['segunda']?>" step="0.1" min="0.0" max="10" required>
        </p>
            </div>
            <div class="col">
            <p>
        <!-- Campo somente leitura e desabilitado para edição.
        Usado apenas para exibição do valor da média -->
            <label for="media" class="form-label">Média:</label>
            <input name="media" class="form-control" type="number" id="media" value="<?= $aluno['media']?>"  step="0.1" min="0.0" max="10" readonly disabled>
        </p>
            </div>
            <div class="col">
            <p>
        <!-- Campo somente leitura e desabilitado para edição 
        Usado apenas para exibição do texto da situação -->
            <label for="situacao" class="form-label">Situação:</label>
	        <input type="text" class="form-control" name="situacao" id="situacao" value="<?= $aluno['situacao']?>" readonly disabled>
        </p>
            </div>
        </div>


        <div class="row">
        <p class="col text-center mt-4"><a href="visualizar.php" class="btn btn-secondary btn-lg"><i class="bi bi-arrow-left"></i>Voltar à lista de alunos</a></p>
        <p class="col text-center">
        <button type="submit" class="btn btn-success btn-lg mt-4" name="atualizar"><i class="bi bi-check-square"></i> Atualizar dados do aluno</button>
        </p>
        </div>

	</form> 
    <hr> 
</div>
<script src="script.js"></script>
</body>
</html>





