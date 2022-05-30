<?php
require_once "../exercicio-php-crud/src/conecta.php";

function lerAlunos(PDO $conexao):array{
    $sql = "SELECT id, nome, primeira, segunda, media, situacao FROM alunos";

    try {
        setlocale(LC_ALL, 'pt_BR');
        $consulta = $conexao->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
       die("Erro: ".$erro->getMessage());
    }
    return $resultado;
}


function inserirAluno(PDO $conexao, string $nome, float $primeira, float $segunda){
    $sql = "INSERT INTO alunos (nome, primeira, segunda) VALUES (:nome, :primeira, :segunda)";
    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindParam(':nome', $nome, PDO::PARAM_STR);
        $consulta->bindParam(':primeira', $primeira, PDO::PARAM_STR);
        $consulta->bindParam(':segunda', $segunda, PDO::PARAM_STR);
        $consulta->execute();
    } catch (Exception $erro) {
       die("Erro: ".$erro->getMessage());
    }

}