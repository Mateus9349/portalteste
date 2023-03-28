<?php 
$tabela = 'locatarios'; //Locais De Coletas
require_once("../../conexao.php");

$id = $_POST['id'];

$pdo->query("DELETE FROM $tabela where id = '$id'");

echo 'Excluído com Sucesso';


?>