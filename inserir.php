<?php
    if(isset($_POST['inserir'])){
        //echo "ok!";
        require_once "src/funcoes.php";
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
		$primeira = filter_input(INPUT_POST, 'primeira', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$segunda = filter_input(INPUT_POST, 'segunda', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
		$media = ($primeira + $segunda)/2;
		if ($media >= 7) {
			$situacao = 'Aprovado';
		} else {
			$situacao = 'Reprovado';
		}
		 
        inserirAluno($conexao, $nome, $primeira, $segunda, $media, $situacao);
        header("location:visualizar.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
	<h1 class="text-center mt-4">Cadastrar um novo aluno </h1>
    <hr>
    <br>
    <p class="text-center">Utilize o formulário abaixo para cadastrar um novo aluno.</p>
	<br>
	<form action="#" method="post">
	
			<p><label for="nome" class="form-label">Nome:</label>
	    <input type="text" class="form-control" name="nome" id="nome" required></p>
		<div class="row">
			<div class="col">
			<p><label for="primeira" class="form-label">Primeira nota:</label>
	    <input type="number" class="form-control" name="primeira"  step="0.1" min="0.0" max="10" required></p>
			</div>
			<div class="col">
			<p><label for="segunda" class="form-label">Segunda nota:</label>
	    <input type="number" class="form-control" name="segunda"  step="0.1" min="0.0" max="10" required></p>
			</div>
		</div>
		<div class="row mt-4">
        <p class="col text-center"><a href="index.php" class="btn btn-secondary btn-lg"><i class="bi bi-arrow-left"></i> Voltar ao início</a></p>
		<p class="col text-center">
		<button type="submit"   name="inserir" class="btn btn-success btn-lg"><i class="bi bi-check-square"></i> Cadastrar aluno</button>
		</p>
</div>
      
	</form>
    <hr> 
  </body>
</html>

</body>
</html>