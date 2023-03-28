<?php 
$tabela = 'funcionarios';
require_once("../../conexao.php");

$id = $_POST['id'];


$query = $pdo->query("SELECT * FROM usuarios where id_func = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_usuario = $res[0]['id'];

$query = $pdo->query("SELECT * FROM vendedores where corretor = '$id_usuario'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if(@count($res) > 0){
	echo 'Este funcionário não pode ser excluído, primeiro exclua os vendedores relacionados a ele para depois excluir este funcionário!';
	exit();
}


$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
$foto = $res[0]['foto'];
if($foto != "sem-perfil.jpg"){
	@unlink('../images/perfil/'.$foto);
}

$pdo->query("DELETE FROM $tabela where id = '$id'");
$pdo->query("DELETE FROM usuarios where id_func = '$id'");

echo 'Excluído com Sucesso';


?>