<?php 
@session_start();
$id_usuario = $_SESSION['id_usuario'];
$nivel_usuario = $_SESSION['nivel_usuario'];
require_once("../../conexao.php");
$data_atual = date('Y-m-d');
echo <<<HTML
<small>
HTML;
if($nivel_usuario == 'Corretor'){
	$query = $pdo->query("SELECT * FROM lote where corretor = '$id_usuario' ORDER BY id desc");
}else{
	$query = $pdo->query("SELECT * FROM lote ORDER BY id desc");
}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	echo <<<HTML
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Cliente - CPF / CNPJ - Inscrição Estadual - Telefone</th>
	<th class="esc">Empressa</th>
	<th class="esc">Data de Emissão</th>
	<th class="esc">Destino</th> 
	<th class="esc">Total</th>
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody> 
	HTML;
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
		$id = $res[$i]['id'];
		//$corretor = $res[$i]['corretor'];
		$data_cadastro = $res[$i]['data_cadastro'];
		$empressa = $res[$i]['empressa'];
		$placa = $res[$i]['placa'];
		$origem = $res[$i]['origem'];
		$destino = $res[$i]['destino'];
		$numero = $res[$i]['numero'];
		$nota = $res[$i]['nota'];
		$dono = $res[$i]['dono'];
		$fisica = $res[$i]['fisica'];
		$juridica = $res[$i]['juridica'];
		$produtor = $res[$i]['produtor'];
		$produto = $res[$i]['produto'];
		$emb = $res[$i]['emb'];
		$bruto = $res[$i]['bruto'];
		$liq = $res[$i]['liq'];
		$valor = $res[$i]['valor'];
		$produtordois = $res[$i]['produtordois'];
		$produtodois = $res[$i]['produtodois'];
		$embdois = $res[$i]['embdois'];
		$brutodois = $res[$i]['brutodois'];
		$liqdois = $res[$i]['liqdois'];
		$valordois = $res[$i]['valordois'];
		$produtortres = $res[$i]['produtortres'];
		$produtotres = $res[$i]['produtotres'];
		$embtres = $res[$i]['embtres'];
		$brutotres = $res[$i]['brutotres'];
		$liqtres = $res[$i]['liqtres'];
		$valortres = $res[$i]['valortres'];
		$produtorqua = $res[$i]['produtorqua'];
		$produtoqua = $res[$i]['produtoqua'];
		$embqua = $res[$i]['embqua'];
		$brutoqua = $res[$i]['brutoqua'];
		$liqqua = $res[$i]['liqqua'];
		$valorqua = $res[$i]['valorqua'];
		$produtorcinco = $res[$i]['produtorcinco'];
		$produtocinco = $res[$i]['produtocinco'];
		$embcinco = $res[$i]['embcinco'];
		$brutocinco = $res[$i]['brutocinco'];
		$liqcinco = $res[$i]['liqcinco'];
		$valorcinco = $res[$i]['valorcinco'];
		$produtorseis = $res[$i]['produtorseis'];
		$produtoseis = $res[$i]['produtoseis'];
		$embseis = $res[$i]['embseis'];
		$brutoseis = $res[$i]['brutoseis'];
		$liqseis = $res[$i]['liqseis'];
		$valorseis = $res[$i]['valorseis'];
		$produtorsete = $res[$i]['produtorsete'];
		$produtosete = $res[$i]['produtosete'];
		$embsete = $res[$i]['embsete'];
		$brutosete = $res[$i]['brutosete'];
		$liqsete = $res[$i]['liqsete'];
		$valorsete = $res[$i]['valorsete'];
		$total = $res[$i]['total'];
		
//retirar quebra de texto do obs
		//$obs = str_replace(array("\n", "\r"), ' + ', $obs);
		//$data_nascF = implode('/', array_reverse(explode('-', $data_nasc)));
		//$data_cadF = implode('/', array_reverse(explode('-', $data_cad)));

		//$query2 = $pdo->query("SELECT * FROM usuarios where id = '$corretor'");
		//$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		//if(@count($res2) > 0){
		//	$nome_corretor = $res2[0]['nome'];
		//}else{
		//	$nome_corretor = 'Sem Registro';
		//}


		echo <<<HTML
		<tr> 
		<td>{$dono}</td>
		<td class="esc">{$empressa}</td>
		<td class="esc">{$data_cadastro}</td>
		<td class="esc">{$destino}</td>
		<td class="esc">{$total}</td>
		<td>

		<big><a href="#" onclick="editar('{$id}', '{$data_cadastro}','{$empressa}', '{$placa}', '{$origem}', '{$destino}', '{$numero}', '{$nota}', '{$dono}', '{$fisica}', '{$juridica}','{$produtor}', '{$produto}', '{$emb}', '{$bruto}', '{$liq}', '{$valor}', '{$produtordois}', '{$produtodois}', '{$embdois}', '{$brutodois}', '{$liqdois}', '{$valordois}', '{$produtortres}', '{$produtotres}', '{$embtres}', '{$brutotres}', '{$liqtres}', '{$valortres}', '{$produtorqua}', '{$produtoqua}', '{$embqua}', '{$brutoqua}', '{$liqqua}', '{$valorqua}', '{$produtorcinco}', '{$produtocinco}', '{$embcinco}', '{$brutocinco}', '{$liqcinco}', '{$valorcinco}', '{$produtorseis}', '{$produtoseis}', '{$embseis}', '{$brutoseis}', '{$liqseis}', '{$valorseis}', '{$produtorsete}', '{$produtosete}', '{$embsete}', '{$brutosete}', '{$liqsete}', '{$valorsete}','{$total}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		<big><a href="#" onclick="mostrar('{$data_cadastro}','{$empressa}', '{$placa}', '{$origem}', '{$destino}', '{$numero}','{$nota}', '{$dono}', '{$fisica}', '{$juridica}','{$produtor}', '{$produto}', '{$emb}','{$bruto}', '{$liq}', '{$valor}', '{$produtordois}', '{$produtodois}', '{$embdois}', '{$brutodois}', '{$liqdois}', '{$valordois}', '{$produtortres}', '{$produtotres}', '{$embtres}', '{$brutotres}', '{$liqtres}', '{$valortres}', '{$produtorqua}', '{$produtoqua}', '{$embqua}', '{$brutoqua}', '{$liqqua}', '{$valorqua}', '{$produtorcinco}', '{$produtocinco}', '{$embcinco}', '{$brutocinco}', '{$liqcinco}', '{$valorcinco}', '{$produtorseis}', '{$produtoseis}', '{$embseis}', '{$brutoseis}', '{$liqseis}', '{$valorseis}', '{$produtorsete}', '{$produtosete}', '{$embsete}', '{$brutosete}', '{$liqsete}', '{$valorsete}', '{$total}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>

		<li class="dropdown head-dpdn2" style="display: inline-block;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><big><i class="fa fa-trash-o text-danger"></i></big></a>

		<ul class="dropdown-menu" style="margin-left:-230px;">
		<li>
		<div class="notification_desc2">
		<p>Confirmar Exclusão? <a href="#" onclick="excluir('{$id}', '{$data_cadastro}')"><span class="text-danger">Sim</span></a></p>
		</div>
		</li>										
		</ul>
		</li>

		
		<a href="#" onclick="arquivo('{$id}', '{$data_cadastro}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o " style="color:#22146e"></i></a>


		</td>  
		</tr> 
		HTML;
	}
	echo <<<HTML
	</tbody> 
	<small><div align="center" id="mensagem-excluir"></div></small>
	</table>
	</small>
	HTML;
}else{
	echo 'Não possui nenhum registro cadastrado!';
}

?>




<script type="text/javascript">


	$(document).ready( function () {
		$('#tabela').DataTable({
			"ordering": false,
			"stateSave": true,
		});
		$('#tabela_filter label input').focus();
	} );



	function editar(id, data_cadastro, empressa, placa, origem, destino, numero, nota, dono, fisica, juridica, produtor, produto, emb, bruto, liq, valor, produtordois, produtodois, embdois, brutodois, liqdois, valordois, produtortres, produtotres, embtres, brutotres, liqtres, valortres, produtorqua, produtoqua, embqua, brutoqua, liqqua, valorqua, produtorcinco, produtocinco, embcinco, brutocinco, liqcinco, valorcinco, produtorseis, produtoseis, embseis, brutoseis, liqseis, valorseis, produtorsete, produtosete, embsete, brutosete, liqsete, valorsete, total){


		//for (let letra of obs){  				
					//if (letra === '+'){
						//obs = obs.replace(' +  + ', '\n')
					//}			
				//}

		$('#id').val(id);
		//$('#corretor').val(corretor).change();
		$('#data_cadastro').val(data_cadastro).change();
		$('#empressa').val(empressa).change();
		$('#placa').val(placa).change();
		$('#origem').val(origem).change();
		$('#destino').val(destino).change();
		$('#numero').val(numero).change();
		$('#nota').val(nota).change();
		$('#dono').val(dono).change();
		$('#fisica').val(fisica).change();
		$('#juridica').val(juridica).change();
		$('#produtor').val(produtor);
		$('#produto').val(produto);
		$('#emb').val(emb);
		$('#bruto').val(bruto);
		$('#liq').val(liq);
		$('#valor').val(valor).change();
		$('#produtordois').val(produtordois);
		$('#produtodois').val(produtodois);
		$('#embdois').val(embdois);
		$('#brutodois').val(brutodois);
		$('#liqdois').val(liqdois);
		$('#valordois').val(valordois).change();
		$('#produtortres').val(produtortres);
		$('#produtotres').val(produtotres);
		$('#embtres').val(embtres);
		$('#brutotres').val(brutotres);
		$('#liqtres').val(liqtres);
		$('#valortres').val(valortres).change();
		$('#produtorqua').val(produtorqua);
		$('#produtoqua').val(produtoqua);
		$('#embqua').val(embqua);
		$('#brutoqua').val(brutoqua);
		$('#liqqua').val(liqqua);
		$('#valorqua').val(valorqua).change();
		$('#produtorcinco').val(produtorcinco);
		$('#produtocinco').val(produtocinco);
		$('#embcinco').val(embcinco);
		$('#brutocinco').val(brutocinco);
		$('#liqcinco').val(liqcinco);
		$('#valorcinco').val(valorcinco).change();
		$('#produtorseis').val(produtorseis);
		$('#produtoseis').val(produtoseis);
		$('#embseis').val(embseis);
		$('#brutoseis').val(brutoseis);
		$('#liqseis').val(liqseis);
		$('#valorseis').val(valorseis).change();
		$('#produtorsete').val(produtorsete);
		$('#produtosete').val(produtosete);
		$('#embsete').val(embsete);
		$('#brutosete').val(brutosete);
		$('#liqsete').val(liqsete);
		$('#valorsete').val(valorsete).change();
		$('#total').val(total).change();
		
		
		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}



	function mostrar( data_cadastro, empressa, placa, origem, destino, numero, nota, dono, fisica, juridica, produtor, produto, emb, bruto, liq, valor, produtordois, produtodois, embdois, brutodois, liqdois, valordois, produtortres, produtotres, embtres, brutotres, liqtres, valortres, produtorqua, produtoqua, embqua, brutoqua, liqqua, valorqua, produtorcinco, produtocinco, embcinco, brutocinco, liqcinco, valorcinco, produtorseis, produtoseis, embseis, brutoseis, liqseis, valorseis, produtorsete, produtosete, embsete, brutosete, liqsete, valorsete, total){

		//for (let letra of obs){  				
				//	if (letra === '+'){
					//	obs = obs.replace(' +  + ', '\n')
					//}			
				//}
		

		//$('#corretor_mostrar').text(corretor);		
		$('#data_cadastro_mostrar').text(data_cadastro);
		$('#empressa_mostrar').text(empressa);
		$('#placa_mostrar').text(placa);
		$('#origem_mostrar').text(origem);
		$('#destino_mostrar').text(destino);
		$('#numero_mostrar').text(numero);
		$('#nota_mostrar').text(nota);
		$('#dono_mostrar').text(dono);
		$('#fisica_mostrar').text(fisica);
		$('#juridica_mostrar').text(juridica);
		$('#produtor_mostrar').text(produtor);
		$('#produto_mostrar').text(produto);
		$('#emb_mostrar').text(emb);
		$('#bruto_mostrar').text(bruto);
		$('#liq_mostrar').text(liq);
		$('#valor_mostrar').text(valor);
		$('#produtordois_mostrar').text(produtordois);
		$('#produtodois_mostrar').text(produtodois);
		$('#embdois_mostrar').text(embdois);
		$('#brutodois_mostrar').text(brutodois);
		$('#liqdois_mostrar').text(liqdois);
		$('#valordois_mostrar').text(valordois);
		$('#produtortres_mostrar').text(produtortres);
		$('#produtotres_mostrar').text(produtotres);
		$('#embtres_mostrar').text(embtres);
		$('#brutotres_mostrar').text(brutotres);
		$('#liqtres_mostrar').text(liqtres);
		$('#valortres_mostrar').text(valortres);
		$('#produtorqua_mostrar').text(produtorqua);
		$('#produtoqua_mostrar').text(produtoqua);
		$('#embqua_mostrar').text(embqua);
		$('#brutoqua_mostrar').text(brutoqua);
		$('#liqqua_mostrar').text(liqqua);
		$('#valorqua_mostrar').text(valorqua);
		$('#produtorcinco_mostrar').text(produtorcinco);
		$('#produtocinco_mostrar').text(produtocinco);
		$('#embcinco_mostrar').text(embcinco);
		$('#brutocinco_mostrar').text(brutocinco);
		$('#liqcinco_mostrar').text(liqcinco);
		$('#valorcinco_mostrar').text(valorcinco);
		$('#produtorseis_mostrar').text(produtorseis);
		$('#produtoseis_mostrar').text(produtoseis);
		$('#embseis_mostrar').text(embseis);
		$('#brutoseis_mostrar').text(brutoseis);
		$('#liqseis_mostrar').text(liqseis);
		$('#valorseis_mostrar').text(valorseis);
		$('#produtorsete_mostrar').text(produtorsete);
		$('#produtosete_mostrar').text(produtosete);
		$('#embsete_mostrar').text(embsete);
		$('#brutosete_mostrar').text(brutosete);
		$('#liqsete_mostrar').text(liqsete);
		$('#valorsete_mostrar').text(valorsete);	
		$('#total_mostrar').text(total);				
					
			

		$('#modalMostrar').modal('show');		
	}

	function limparCampos(){
		$('#id').val('');
		$('#produto').val('');
		$('#produtor').val('');
		$('#bruto').val('');
		$('#liq').val('');
		$('#valor').val('');
		$('#total').val('');
		//$('#data_nasc').val('//<//?=$data_atual?>');
		
	}


function arquivo(id, nome){
    $('#id-arquivo').val(id);    
    $('#nome-arquivo').text(nome);
    $('#modalArquivos').modal('show');
    $('#mensagem-arquivo').text(''); 
    listarArquivos();   
}
	

</script>



