<?php
require_once "../exercicio-php-crud/src/funcoes.php";
//obtendo o valor do parâmetro da url
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    excluirAluno($conexao, $id);
    header("location:visualizar.php");
  