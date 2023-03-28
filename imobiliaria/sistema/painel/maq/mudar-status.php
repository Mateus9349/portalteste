<?php 
$tabela = 'maq';
require_once("../../conexao.php");

$id = $_POST['id'];
$acao = $_POST['acao'];
$nome = $_POST['nome'];

$pdo->query("UPDATE $tabela SET ativo = '$acao' where id = '$id'");

echo 'Alterado com Sucesso';

?>