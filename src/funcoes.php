<?php
require_once "../src/conecta.php";

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