<?php 
$tabela = 'cidades';
require_once("../../conexao.php");

$nome = $_POST['nome'];
$id = $_POST['id'];

//validar cpf
$query = $pdo->query("SELECT * FROM $tabela where nome = '$nome'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Nome já Cadastrado, escolha Outro!';
	exit();
}



if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, ativo = 'Sim'");
	
}else{
	$query = $pdo->prepare("UPDATE $tabela SET nome = :nome WHERE id = '$id'");

}
$query->bindValue(":nome", "$nome");
$query->execute();



echo 'Salvo com Sucesso'; 

?>