<?php 
$tabela = 'funcionarios';
require_once("../../conexao.php");

$id = $_POST['id'];
$acao = $_POST['acao'];
$nome = $_POST['nome'];

$pdo->query("UPDATE $tabela SET ativo = '$acao' where id = '$id'");
$pdo->query("UPDATE usuarios SET ativo = '$acao' where id_func = '$id'");

echo 'Alterado com Sucesso';

?>