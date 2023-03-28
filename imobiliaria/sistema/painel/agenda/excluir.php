<?php 
$tabela = 'tarefas';
require_once("../../conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];


$pdo->query("DELETE FROM $tabela where id = '$id'");

echo 'Excluído com Sucesso';


?>