<?php 
$tabela = 'imoveis';
require_once("../../conexao.php");

$id = $_POST['id'];


$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
$img_principal = $res[0]['img_principal'];
$img_banner = $res[0]['img_banner'];
$img_planta = $res[0]['img_planta'];
if($img_principal != "sem-foto.png"){
	@unlink('../images/imoveis/'.$img_principal);
}

if($img_banner != "sem-foto.png"){
	@unlink('../images/imoveis/'.$img_banner);
}

if($img_planta != "sem-foto.png"){
	@unlink('../images/imoveis/'.$img_planta);
}

$pdo->query("DELETE FROM $tabela where id = '$id'");

echo 'Excluído com Sucesso';


?>