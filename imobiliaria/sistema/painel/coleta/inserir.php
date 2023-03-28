<?php 
$tabela = 'coleta';
require_once("../../conexao.php");

$produto = $_POST['produto'];
$produtor = $_POST['produtor'];
$avaliacao = $_POST['avaliacao'];
$local = $_POST['local'];
$bruto = $_POST['bruto'];
$liquido = $_POST['liquido'];
$reprovado = $_POST['reprovado'];
$valor = $_POST['valor'];
$pagar = $_POST['pagar'];
$corretor = $_POST['corretor'];
$id = $_POST['id'];

//validar cpf
//$query = $pdo->query("SELECT * FROM $tabela where doc = '$doc'");
//$res = $query->fetchAll(PDO::FETCH_ASSOC);
//$total_reg = @count($res);
//if($total_reg > 0 and $res[0]['id'] != $id){
	//echo 'CPF já Cadastrado, escolha Outro!';
	//exit();
///}

//validar email
//$query = $pdo->query("SELECT * FROM $tabela where email = '$email'");
//$res = $query->fetchAll(PDO::FETCH_ASSOC);
//$total_reg = @count($res);
//if($total_reg > 0 and $res[0]['id'] != $id){
//	echo 'Email já Cadastrado, escolha Outro!';
//	exit();
//}


if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET produto = :produto, produtor = :produtor, avaliacao = :avaliacao, local = :local, bruto = :bruto, liquido = :liquido, reprovado = :reprovado, valor = :valor, pagar = :pagar, corretor = '$corretor', data_cadastro = curDate()");

}else{
	$query = $pdo->prepare("UPDATE $tabela SET produto = :produto, produtor = :produtor, avaliacao = :avaliacao, local = :local, bruto = :bruto, liquido = :liquido, reprovado = :reprovado, valor = :valor, pagar = :pagar, corretor = '$corretor', data_cadastro = curDate() WHERE id = '$id'");

}

$query->bindValue(":produto", "$produto");
$query->bindValue(":produtor", "$produtor");
$query->bindValue(":avaliacao", "$avaliacao");
$query->bindValue(":local", "$local");
$query->bindValue(":bruto", "$bruto");
$query->bindValue(":liquido", "$liquido");
$query->bindValue(":reprovado", "$reprovado");
$query->bindValue(":valor", "$valor");
$query->bindValue(":pagar", "$pagar");
$query->execute();


echo 'Salvo com Sucesso'; 

?>