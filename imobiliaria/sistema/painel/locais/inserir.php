<?php 
$tabela = 'locais';
require_once("../../conexao.php");

//$nome = $_POST['nome'];
//$telefone = $_POST['telefone'];
//$doc = $_POST['doc'];
//$email = $_POST['email'];
//$data_nasc = $_POST['data_nasc'];
//$endereco = $_POST['endereco'];
$obs = $_POST['obs'];
//$pessoa = $_POST['pessoa'];
$local = $_POST['local'];
$comunidade = $_POST['comunidade'];
$municipio = $_POST['municipio'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];
$corretor = $_POST['corretor'];
$id = $_POST['id'];

//validar cpf
///$query = $pdo->query("SELECT * FROM $tabela where doc = '$doc'");
//$res = $query->fetchAll(PDO::FETCH_ASSOC);
//$total_reg = @count($res);
//if($total_reg > 0 and $res[0]['id'] != $id){
	//echo 'CPF já Cadastrado, escolha Outro!';
	//exit();
//}

//validar email
//$query = $pdo->query("SELECT * FROM $tabela where email = '$email'");
//$res = $query->fetchAll(PDO::FETCH_ASSOC);
//$total_reg = @count($res);
//if($total_reg > 0 and $res[0]['id'] != $id){
	//echo 'Email já Cadastrado, escolha Outro!';
	//exit();
//}


if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET local = :local, comunidade = :comunidade, municipio = :municipio, lat = :lat, lon = :lon, corretor = '$corretor', data_cadastro = curDate(), obs = :obs");

}else{
	$query = $pdo->prepare("UPDATE $tabela SET local = :local, comunidade = :comunidade, municipio = :municipio, lat = :lat, lon = :lon, corretor = '$corretor', data_cadastro = curDate(), obs = :obs WHERE id = '$id'");

}

$query->bindValue(":local", "$local");
$query->bindValue(":comunidade", "$comunidade");
$query->bindValue(":municipio", "$municipio");
$query->bindValue(":lat", "$lat");
$query->bindValue(":lon", "$lon");
$query->bindValue(":obs", "$obs");
$query->execute();


echo 'Salvo com Sucesso'; 

?>