<?php
/*Script de conehão ao servidor banco de dados */
$servidor = "localhost";
$usuario = "veroot";
$senha = "MuitoCurta@12345";
$banco = "id19029958_crud_escola_veronica";

try{
//Criando a conexão com o MySQL (API/ Driver de conexão)
    $conexao = new PDO("mysql:host=$servidor; dbname=$banco; charset=utf8", $usuario, $senha);
// Habilita a  verificação de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch(Exception $erro){
    die("Erro: " .$erro->getMessage());
}

?>



