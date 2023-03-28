<?php 
$tabela = 'lote';
require_once("../../conexao.php");

$data_cadastro = $_POST['data_cadastro'];
$empressa = $_POST['empressa'];
$placa = $_POST['placa'];
$origem = $_POST['origem'];
$destino = $_POST['destino'];
$numero = $_POST['numero'];
$nota = $_POST['nota'];
$dono = $_POST['dono'];
$fisica = $_POST['fisica'];
$juridica = $_POST['juridica'];
$produtor = $_POST['produtor'];
$produto = $_POST['produto'];
$emb = $_POST['emb'];
$liq = $_POST['liq'];
$bruto = $_POST['bruto'];
$valor = $_POST['valor'];
$produtordois = $_POST['produtordois'];
$produtodois = $_POST['produtodois'];
$embdois = $_POST['embdois'];
$liqdois = $_POST['liqdois'];
$brutodois = $_POST['brutodois'];
$valordois = $_POST['valordois'];
$produtortres = $_POST['produtortres'];
$produtotres = $_POST['produtotres'];
$embtres = $_POST['embtres'];
$liqtres = $_POST['liqtres'];
$brutotres = $_POST['brutotres'];
$valortres = $_POST['valortres'];
$produtorqua = $_POST['produtorqua'];
$produtoqua = $_POST['produtoqua'];
$embqua = $_POST['embqua'];
$liqqua = $_POST['liqqua'];
$brutoqua = $_POST['brutoqua'];
$valorqua = $_POST['valorqua'];
$produtorcinco = $_POST['produtorcinco'];
$produtocinco = $_POST['produtocinco'];
$embcinco = $_POST['embcinco'];
$liqcinco = $_POST['liqcinco'];
$brutocinco = $_POST['brutocinco'];
$valorcinco = $_POST['valorcinco'];
$produtorseis = $_POST['produtorseis'];
$produtoseis = $_POST['produtoseis'];
$embseis = $_POST['embseis'];
$liqseis = $_POST['liqseis'];
$brutoseis = $_POST['brutoseis'];
$valorseis = $_POST['valorseis'];
$produtorsete = $_POST['produtorsete'];
$produtosete = $_POST['produtosete'];
$embsete = $_POST['embsete'];
$liqsete = $_POST['liqsete'];
$brutosete = $_POST['brutosete'];
$valorsete = $_POST['valorsete'];

$total = $_POST['total'];
//$corretor = $_POST['corretor'];
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
	$query = $pdo->prepare("INSERT INTO $tabela SET empressa = :empressa, placa = :placa, origem = :origem, destino = :destino, numero = :numero, nota = :nota, dono = :dono, fisica = :fisica, juridica = :juridica, produtor = :produtor, produto = :produto, emb = :emb,  bruto = :bruto, liq = :liq, valor = :valor, produtordois = :produtordois, produtodois = :produtodois, embdois = :embdois,  brutodois = :brutodois, liqdois = :liqdois, valordois = :valordois, produtortres = :produtortres, produtotres = :produtotres, embtres = :embtres,  brutotres = :brutotres, liqtres = :liqtres, valortres = :valortres, produtorqua = :produtorqua, produtoqua = :produtoqua, embqua = :embqua,  brutoqua = :brutoqua, liqqua = :liqqua, valorqua = :valorqua, produtorcinco = :produtorcinco, produtocinco = :produtocinco, embcinco = :embcinco,  brutocinco = :brutocinco, liqcinco = :liqcinco, valorcinco = :valorcinco, produtorseis = :produtorseis, produtoseis = :produtoseis, embseis = :embseis,  brutoseis = :brutoseis, liqseis = :liqseis, valorseis = :valorseis, produtorsete = :produtorsete, produtosete = :produtosete, embsete = :embsete,  brutosete = :brutosete, liqsete = :liqsete, valorsete = :valorsete, total = :total, data_cadastro = :data_cadastro");

}else{
	$query = $pdo->prepare("UPDATE $tabela SET empressa = :empressa, placa = :placa, origem = :origem, destino = :destino, numero = :numero, nota = :nota, dono = :dono, fisica = :fisica, juridica = :juridica, produtor = :produtor, produto = :produto, emb = :emb,  bruto = :bruto, liq = :liq, valor = :valor, produtordois = :produtordois, produtodois = :produtodois, embdois = :embdois,  brutodois = :brutodois, liqdois = :liqdois, valordois = :valordois, produtortres = :produtortres, produtotres = :produtotres, embtres = :embtres,  brutotres = :brutotres, liqtres = :liqtres, valortres = :valortres, produtorqua = :produtorqua, produtoqua = :produtoqua, embqua = :embqua,  brutoqua = :brutoqua, liqqua = :liqqua, valorqua = :valorqua, produtorcinco = :produtorcinco, produtocinco = :produtocinco, embcinco = :embcinco,  brutocinco = :brutocinco, liqcinco = :liqcinco, valorcinco = :valorcinco, produtorseis = :produtorseis, produtoseis = :produtoseis, embseis = :embseis,  brutoseis = :brutoseis, liqseis = :liqseis, valorseis = :valorseis, produtorsete = :produtorsete, produtosete = :produtosete, embsete = :embsete,  brutosete = :brutosete, liqsete = :liqsete, valorsete = :valorsete, total = :total, data_cadastro = :data_cadastro WHERE id = '$id'");

}

$query->bindValue(":data_cadastro", "$data_cadastro");
$query->bindValue(":empressa", "$empressa");
$query->bindValue(":placa", "$placa");
$query->bindValue(":origem", "$origem");
$query->bindValue(":destino", "$destino");
$query->bindValue(":numero", "$numero");
$query->bindValue(":nota", "$nota");
$query->bindValue(":dono", "$dono");
$query->bindValue(":fisica", "$fisica");
$query->bindValue(":juridica", "$juridica");
$query->bindValue(":produtor", "$produtor");
$query->bindValue(":produto", "$produto");
$query->bindValue(":emb", "$emb");
$query->bindValue(":liq", "$liq");
$query->bindValue(":bruto", "$bruto");
$query->bindValue(":valor", "$valor");
$query->bindValue(":produtordois", "$produtordois");
$query->bindValue(":produtodois", "$produtodois");
$query->bindValue(":embdois", "$embdois");
$query->bindValue(":liqdois", "$liqdois");
$query->bindValue(":brutodois", "$brutodois");
$query->bindValue(":valordois", "$valordois");
$query->bindValue(":produtortres", "$produtortres");
$query->bindValue(":produtotres", "$produtotres");
$query->bindValue(":embtres", "$embtres");
$query->bindValue(":liqtres", "$liqtres");
$query->bindValue(":brutotres", "$brutotres");
$query->bindValue(":valortres", "$valortres");
$query->bindValue(":produtorqua", "$produtorqua");
$query->bindValue(":produtoqua", "$produtoqua");
$query->bindValue(":embqua", "$embqua");
$query->bindValue(":liqqua", "$liqqua");
$query->bindValue(":brutoqua", "$brutoqua");
$query->bindValue(":valorqua", "$valorqua");
$query->bindValue(":produtorcinco", "$produtorcinco");
$query->bindValue(":produtocinco", "$produtocinco");
$query->bindValue(":embcinco", "$embcinco");
$query->bindValue(":liqcinco", "$liqcinco");
$query->bindValue(":brutocinco", "$brutocinco");
$query->bindValue(":valorcinco", "$valorcinco");
$query->bindValue(":produtorseis", "$produtorseis");
$query->bindValue(":produtoseis", "$produtoseis");
$query->bindValue(":embseis", "$embseis");
$query->bindValue(":liqseis", "$liqseis");
$query->bindValue(":brutoseis", "$brutoseis");
$query->bindValue(":valorseis", "$valorseis");
$query->bindValue(":produtorsete", "$produtorsete");
$query->bindValue(":produtosete", "$produtosete");
$query->bindValue(":embsete", "$embsete");
$query->bindValue(":liqsete", "$liqsete");
$query->bindValue(":brutosete", "$brutosete");
$query->bindValue(":valorsete", "$valorsete");
$query->bindValue(":total", "$total");
//$query->bindValue(":corretor", "$corretor");
$query->execute();


echo 'Salvo com Sucesso'; 

?>