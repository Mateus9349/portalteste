<?php 
require_once("../conexao.php");

$nome = $_POST['nome_config'];
$email = $_POST['email_config'];
$endereco = $_POST['end_config'];
$telefone = $_POST['tel_config'];
$logo = 'logo.png';
$favicon = 'favicon.ico';
$logo_rel = 'logo.jpg';
$relatorio_pdf = $_POST['rel'];

//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$caminho = '../imagens/logo.png';
$imagem_temp = @$_FILES['logo']['tmp_name']; 
if(@$_FILES['logo']['name'] != ""){
	$ext = pathinfo(@$_FILES['logo']['name'], PATHINFO_EXTENSION);   
	if($ext == 'png'){ 
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão da imagem para a Logo é somente *PNG';
		exit();
	}

}


//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$caminho = '../imagens/favicon.ico';
$imagem_temp = @$_FILES['favicon']['tmp_name']; 
if(@$_FILES['favicon']['name'] != ""){
$ext = pathinfo(@$_FILES['favicon']['name'], PATHINFO_EXTENSION);   
	if($ext == 'ico'){ 
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão do ícone favicon é somente *ICO';
		exit();
	}
}



//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$caminho = '../imagens/logo.jpg';
$imagem_temp = @$_FILES['imgRel']['tmp_name']; 
if(@$_FILES['imgRel']['name'] != ""){
$ext = pathinfo(@$_FILES['imgRel']['name'], PATHINFO_EXTENSION);   
	if($ext == 'jpg'){ 
		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão para a logo do relatório é apenas jpg';
		exit();
	}
}


$query = $pdo->prepare("UPDATE config SET nome = :nome, telefone = :telefone, endereco = :endereco, logo = '$logo', favicon = '$favicon', logo_rel = '$logo_rel', email = :email,  relatorio = '$relatorio_pdf'");

$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone");
$query->bindValue(":endereco", "$endereco");
$query->execute();

echo 'Salvo com Sucesso'; 


?>