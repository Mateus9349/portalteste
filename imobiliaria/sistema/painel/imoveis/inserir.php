<?php 
$tabela = 'imoveis';
require_once("../../conexao.php");

$corretor = $_POST['corretor'];
$materia = $_POST['materia'];
$produtor = $_POST['produtor'];
$local = $_POST['local'];
$quantidade= $_POST['quantidade'];
$medida = $_POST['medida'];
$data_entrada = $_POST('data_entrada');
$fonte = $_POST['fonte'];
$consumo = $_POST['consumo'];
$data_aquisicao = $_POST['data_aquisicao'];
$maq = $_POST['maq'];
$custo = $_POST['custo'];
$residual = $_POST['residual'];
$anos = $_POST['anos'];
$depreciacao = $_POST['depreciacao'];
$dia = $_POST['dia'];
$util = $_POST['util'];
$vd = $_POST['vd'];
$obra = $_POST['obra'];
$hora = $_POST('hora');
$trabalho = $_POST['trabalho'];
$pago = $_POST['pago'];
$id = $_POST['id'];

$nome_novo = strtolower( preg_replace("[^a-zA-Z0-9-]", "-", 
        strtr(utf8_decode(trim($titulo)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),
        "aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
$url = preg_replace('/[ -]+/' , '-' , $nome_novo);


$query = $pdo->query("SELECT * FROM $tabela order by id desc limit 1");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	$id_final = $res[0]['id'];
}else{
	$id_final = 0;
}

$url = $url . '-'. $id_final + 1;


$query = $pdo->query("SELECT * FROM $tabela where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	$img_principal = $res[0]['img_principal'];
	$img_banner = $res[0]['img_banner'];
	$img_planta = $res[0]['img_planta'];
}else{
	$img_principal = 'sem-foto.png';
	$img_banner = 'sem-foto.png';
	$img_planta = 'sem-foto.png';
}

//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['principal']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);
$caminho = '../images/imoveis/' .$nome_img;

$imagem_temp = @$_FILES['principal']['tmp_name']; 

if(@$_FILES['principal']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 

		if (@$_FILES['principal']['name'] != ""){

			//EXCLUO A FOTO ANTERIOR
			if($img_principal != "sem-perfil.jpg"){
				@unlink('images/perfil/'.$foto);
			}

			$img_principal = $nome_img;
		}

		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}



//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['planta']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);
$caminho = '../images/imoveis/' .$nome_img;

$imagem_temp = @$_FILES['planta']['tmp_name']; 

if(@$_FILES['planta']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 

		if (@$_FILES['planta']['name'] != ""){

			//EXCLUO A FOTO ANTERIOR
			if($img_planta != "sem-perfil.jpg"){
				@unlink('images/perfil/'.$foto);
			}

			$img_planta = $nome_img;
		}

		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
} 




//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_img = date('d-m-Y H:i:s') .'-'.@$_FILES['banner']['name'];
$nome_img = preg_replace('/[ :]+/' , '-' , $nome_img);
$caminho = '../images/imoveis/' .$nome_img;

$imagem_temp = @$_FILES['banner']['tmp_name']; 

if(@$_FILES['banner']['name'] != ""){
	$ext = pathinfo($nome_img, PATHINFO_EXTENSION);   
	if($ext == 'png' or $ext == 'jpg' or $ext == 'jpeg' or $ext == 'gif'){ 

	if (@$_FILES['banner']['name'] != ""){

			//EXCLUO A FOTO ANTERIOR
			if($img_banner != "sem-perfil.jpg"){
				@unlink('images/perfil/'.$foto);
			}

			$img_banner = $nome_img;
		}

		move_uploaded_file($imagem_temp, $caminho);
	}else{
		echo 'Extensão de Imagem não permitida!';
		exit();
	}
}



if($id == ""){
	//$query = $pdo->prepare("INSERT INTO $tabela SET corretor = '$corretor', materia = :materia, descricao = :descricao, tipo = '$tipo', cidade = '$cidade', bairro = '$bairro', valor = :valor, ano = :ano, area_total = :area_total, area_construida = :area_construida, quartos = :quartos, banheiros = :banheiros, suites = :suites, garagens = :garagens, piscinas = :piscinas, img_principal = '$img_principal', img_banner = '$img_banner', img_planta = '$img_planta', endereco = :endereco, status = '$status', condicao = '$condicao', video = :video, iptu = :iptu, condominio = :condominio, comissao_imob = :comissao_imob, comissao_corretor = :comissao_corretor, url = '$url', data_cad = curDate(), validade_anuncio = '$validade', data_inicio = '$data_inicio', data_final = '$data_final'");
	$query = $pdo->prepare("INSERT INTO $tabela SET corretor = '$corretor', materia = :materia, produtor = :produtor, local = :local, quantidade = :quantidade, medida = :medida, data_entrada = :data_entrada, fonte = :fonte, consumo = :consumo, data_aquisicao = :data_aquisicao, maq = :maq, custo = :custo, residual = :residual, anos = :anos, depreciacao = :depreciacao, dia = :dia, util = :util, vd = :vd, obra = :obra, hora = :hora, trabalho = :trabalho, pago = :pago");
}else{
	//$query = $pdo->prepare("UPDATE $tabela SET corretor = '$corretor', materia = :materia, descricao = :descricao, tipo = '$tipo', cidade = '$cidade', bairro = '$bairro', valor = :valor, ano = :ano, area_total = :area_total, area_construida = :area_construida, quartos = :quartos, banheiros = :banheiros, suites = :suites, garagens = :garagens, piscinas = :piscinas, img_principal = '$img_principal', img_banner = '$img_banner', img_planta = '$img_planta', endereco = :endereco, status = '$status', condicao = '$condicao', video = :video, iptu = :iptu, condominio = :condominio, comissao_imob = :comissao_imob, comissao_corretor = :comissao_corretor, url = '$url', validade_anuncio = '$validade', data_inicio = '$data_inicio', data_final = '$data_final' WHERE id = '$id'");
	$query = $pdo->prepare("UPDATE $tabela SET corretor = '$corretor', materia = :materia, produtor = :produtor, local = :local, quantidade = :quantidade, medida = :medida, data_entrada = :data_entrada, fonte = :fonte, consumo = :consumo, data_aquisicao = :data_aquisicao, maq = :maq, custo = :custo, residual = :residual, anos = :anos, depreciacao = :depreciacao, dia = :dia, util = :util, vd = :vd, obra = :obra, hora = :hora, trabalho = :trabalho, pago = :pago  WHERE id = '$id'");

}



$query->bindValue(":materia", "$materia");
$query->bindValue(":descricao", "$descricao");
$query->bindValue(":corretor", "$corretor");
$query->bindValue(":produtor", "$produtor");
$query->bindValue(":local", "$local");
$query->bindValue(":quantidade", "$quantidade");
$query->bindValue(":medida", "$medida");
$query->bindValue(":data_entrada", "$data_entrada");
$query->bindValue(":fonte", "$fonte");
$query->bindValue(":consumo", "$consumo");
$query->bindValue(":data_aquisicao", "$data_aquisicao");
$query->bindValue(":maq", "$maq");
$query->bindValue(":custo", "$custo");
$query->bindValue(":residual", "$residual");
$query->bindValue(":anos", "$anos");
$query->bindValue(":depreciacao", "$depreciacao");
$query->bindValue(":dia", "$dia");
$query->bindValue(":util", "$util");
$query->bindValue(":vd", "$vd");
$query->bindValue(":obra", "$obra");
$query->bindValue(":hora", "$hora");
$query->bindValue(":trabalho", "$trabalho");
$query->bindValue(":pago", "$pago");
$query->execute();

echo 'Salvo com Sucesso'; 

?>