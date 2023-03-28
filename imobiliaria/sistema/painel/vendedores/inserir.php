<?php 
$tabela = 'vendedores';
require_once("../../conexao.php");

$nome = $_POST['nome'];


$apelido = $_POST['apelido'];

$telefone = $_POST['telefone'];
$doc = $_POST['doc'];
$email = $_POST['email'];
$valor = $_POST['valor'];
$pg = $_POST['pg'];
$status = $_POST['status'];
$data_nasc = $_POST['data_nasc'];
$logradouro = $_POST['logradouro'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];
$numero = $_POST['numero'];
$obs = $_POST['obs'];
$pessoa = $_POST['pessoa'];
$corretor = $_POST['corretor'];
$id = $_POST['id'];

//validar cpf
$query = $pdo->query("SELECT * FROM $tabela where doc = '$doc'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'CPF já Cadastrado, escolha Outro!';
	exit();
}

//validar email
//$query = $pdo->query("SELECT * FROM $tabela where email = '$email'");
//$res = $query->fetchAll(PDO::FETCH_ASSOC);
//$total_reg = @count($res);
//if($total_reg > 0 and $res[0]['id'] != $id){
//	echo 'Email já Cadastrado, escolha Outro!';
	//exit();
//}


if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, apelido = :apelido,  pessoa = '$pessoa', telefone = :telefone, doc = :doc,  email = :email, valor = :valor, pg = :pg, status = :status, data_nasc = '$data_nasc', logradouro = :logradouro, cep = :cep, uf = :uf, cidade = :cidade, numero = :numero, corretor = '$corretor', data_cadastro = curDate(),  obs = :obs");

}else{
	$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, apelido = :apelido, pessoa = '$pessoa', telefone = :telefone, doc = :doc,  email = :email,  valor = :valor, pg = :pg, status = :status, data_nasc = '$data_nasc', logradouro = :logradouro, cep = :cep, uf = :uf, cidade = :cidade, numero = :numero,  corretor = '$corretor', data_cadastro = curDate(),  obs = :obs WHERE id = '$id'");

}

$query->bindValue(":nome", "$nome");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":doc", "$doc");
$query->bindValue(":email", "$email");
$query->bindValue(":logradouro", "$logradouro");
$query->bindValue(":cep", "$cep");
$query->bindValue(":uf", "$uf");
$query->bindValue(":cidade", "$cidade");
$query->bindValue(":numero", "$numero");
$query->bindValue(":obs", "$obs");
$query->bindValue(":valor", "$valor");
$query->bindValue(":pg", "$pg");
$query->bindValue(":status", "$status");
$query->bindValue(":apelido", "$apelido");

$query->execute();


echo 'Salvo com Sucesso'; 

?>