<?php 
$tabela = 'tarefas';
require_once("../../conexao.php");

@session_start();
$usuario_logado = @$_SESSION['id_usuario'];

$titulo = $_POST['titulo'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$descricao = $_POST['descricao'];
$obs = $_POST['area'];
$id = $_POST['id'];

$dataF = implode('/', array_reverse(explode('-', $data)));
$horaF = date("H:i", strtotime($hora));

//validar cpf
$query = $pdo->query("SELECT * FROM $tabela where data = '$data' and hora = '$hora' and usuario = '$usuario_logado'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Este horário não está disponível!';
	exit();
}


if($id == ""){
	$query = $pdo->prepare("INSERT INTO $tabela SET titulo = :titulo, descricao = :descricao, hora = '$hora', data = '$data', usuario = '$usuario_logado', status = 'Agendada', obs = :obs");
		

}else{
	$query = $pdo->prepare("UPDATE $tabela SET titulo = :titulo, descricao = :descricao, hora = '$hora', data = '$data', usuario = '$usuario_logado', obs = :obs where id = '$id'");

	
}

$query->bindValue(":titulo", "$titulo");
$query->bindValue(":descricao", "$descricao");
$query->bindValue(":obs", "$obs");
$query->execute();


echo 'Salvo com Sucesso'; 

?>