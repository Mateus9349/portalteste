<?php 
$tabela = 'frequencias';
require_once("../../conexao.php");

$frequencia = $_POST['frequencia'];
$dias = $_POST['dias'];
$id = $_POST['id'];

//validar nome
$query = $pdo->query("SELECT * FROM $tabela where frequencia = '$frequencia'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Frequencia já Cadastrada, escolha Outra!';
	exit();
}

if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET frequencia = :frequencia, dias = '$dias'");
	$acao = 'inserção';

}else{
	$query = $pdo->prepare("UPDATE $tabela SET frequencia = :frequencia, dias = '$dias' WHERE id = '$id'");
	$acao = 'edição';
}

$query->bindValue(":frequencia", "$frequencia");
$query->execute();

echo 'Salvo com Sucesso'; 

?>