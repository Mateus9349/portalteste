<?php 
$tabela = 'compradores'; //clientes
require_once("../../conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$doc = $_POST['doc'];
$email = $_POST['email'];
//$data_nasc = $_POST['data_nasc'];
$logradouro = $_POST['logradouro'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];
$numero = $_POST['numero'];
$logradouroj = $_POST['logradouroj'];
$cepj = $_POST['cepj'];
$ufj = $_POST['ufj'];
$cidadej = $_POST['cidadej'];
$numeroj = $_POST['numeroj'];
$obs = $_POST['obs'];
$pessoa = $_POST['pessoa'];
$corretor = $_POST['corretor'];
$id = $_POST['id'];
$inscricao = $_POST['inscricao'];

//validar cpf
$query = $pdo->query("SELECT * FROM $tabela where doc = '$doc'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'CPF já Cadastrado, escolha Outro!';
	exit();
}

//validar email
$query = $pdo->query("SELECT * FROM $tabela where email = '$email'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Email já Cadastrado, escolha Outro!';
	exit();
}


if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET nome = :nome, pessoa = '$pessoa', telefone = :telefone, doc = :doc, inscricao = :inscricao,  email = :email,  logradouro = :logradouro, cep = :cep, uf = :uf, cidade = :cidade, numero = :numero, logradouroj = :logradouroj, cepj = :cepj, ufj = :ufj, cidadej = :cidadej, numeroj = :numeroj, corretor = '$corretor', data_cadastro = curDate(),  obs = :obs");

}else{
	$query = $pdo->prepare("UPDATE $tabela SET nome = :nome, pessoa = '$pessoa', telefone = :telefone, doc = :doc, inscricao = :inscricao,   email = :email,  logradouro = :logradouro, cep = :cep, uf = :uf, cidade = :cidade, numero = :numero, logradouroj = :logradouroj, cepj = :cepj, ufj = :ufj, cidadej = :cidadej, numeroj = :numeroj, corretor = '$corretor', data_cadastro = curDate(),  obs = :obs WHERE id = '$id'");

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
$query->bindValue(":logradouroj", "$logradouroj");
$query->bindValue(":cepj", "$cepj");
$query->bindValue(":ufj", "$ufj");
$query->bindValue(":cidadej", "$cidadej");
$query->bindValue(":numeroj", "$numeroj");
$query->bindValue(":obs", "$obs");
$query->bindValue(":inscricao", "$inscricao");
$query->execute();


echo 'Salvo com Sucesso'; 

?>