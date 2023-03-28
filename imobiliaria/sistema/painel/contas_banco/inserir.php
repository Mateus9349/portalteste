<?php 
$tabela = 'contas_banco';
require_once("../../conexao.php");

$nome = $_POST['nome'];
$banco = $_POST['banco'];
$agencia = $_POST['agencia'];
$conta = $_POST['conta'];
$id = $_POST['id'];

//validar nome
$query = $pdo->query("SELECT * FROM $tabela where nome = '$nome'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Este nome de Banco já está Cadastrado, escolha Outro!';
	exit();
}


//validar conta
$query = $pdo->query("SELECT * FROM $tabela where conta = '$conta'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Esta conta já está Cadastrada, escolha Outra!';
	exit();
}

if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, banco = :banco, conta = :conta, agencia = :agencia");
	$acao = 'inserção';

}else{
	$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, banco = :banco, conta = :conta, agencia = :agencia WHERE id = '$id'");
	$acao = 'edição';
}

$query->bindValue(":nome", "$nome");
$query->bindValue(":banco", "$banco");
$query->bindValue(":conta", "$conta");
$query->bindValue(":agencia", "$agencia");
$query->execute();

echo 'Salvo com Sucesso'; 

?>