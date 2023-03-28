<?php 
require_once("../conexao.php");

$nome = $_POST['nome_usu'];
$email = $_POST['email_usu'];
$senha = $_POST['senha_usu'];
$senha_crip = md5($_POST['senha_usu']);
$cpf = $_POST['cpf_usu'];
$id = $_POST['id_usu'];
$foto = $_POST['foto_usu'];


//validar email duplicado
$query = $pdo->query("SELECT * FROM usuarios where email = '$email'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'Email já Cadastrado, escolha Outro!';
	exit();
}


//validar cpf duplicado
$query = $pdo->query("SELECT * FROM usuarios where cpf = '$cpf'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0 and $res[0]['id'] != $id){
	echo 'CPF já Cadastrado, escolha Outro!';
	exit();
}





//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['foto']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);

$caminho = 'images/perfil/' .$nome_img;

$imagem_temp = @$_FILES['foto']['tmp_name']; 

if(@$_FILES['foto']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 

		if (@$_FILES['foto']['name'] != ""){
		
			//EXCLUO A FOTO ANTERIOR
			if($foto != "sem-perfil.jpg"){
				@unlink('images/perfil/'.$foto);
			}

			$foto = $nome_img;
		}

		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}




$query = $pdo->prepare("UPDATE usuarios SET nome = :nome, email = :email, senha = :senha, senha_crip = :senha_crip, cpf = :cpf, foto = '$foto' where id = '$id'");

$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":senha", "$senha");
$query->bindValue(":senha_crip", "$senha_crip");
$query->bindValue(":cpf", "$cpf");
$query->execute();



$query = $pdo->query("SELECT * FROM usuarios where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$id_func = $res[0]['id_func'];

$query_func = $pdo->prepare("UPDATE funcionarios SET nome = :nome, cpf = :cpf, email = :email,  foto = '$foto' where id = '$id_func'");
$query_func->bindValue(":nome", "$nome");
$query_func->bindValue(":email", "$email");
$query_func->bindValue(":cpf", "$cpf");
$query_func->execute();

echo 'Salvo com Sucesso';


 ?>