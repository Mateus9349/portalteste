<?php 
require_once("../../conexao.php");
$data_atual = date('Y-m-d');
@session_start();
$id_usuario = $_SESSION['id_usuario'];
$nivel_usuario = $_SESSION['nivel_usuario'];
echo <<<HTML
<small>
HTML;
if($nivel_usuario == 'Corretor'){
	$query = $pdo->query("SELECT * FROM imoveis where corretor = '$id_usuario' ORDER BY id desc");
}else{
	$query = $pdo->query("SELECT * FROM imoveis ORDER BY id desc");
}
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	echo <<<HTML
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Título</th>
	<th class="esc">Tipo</th> 
	<th class="esc">Status</th> 
	<th class="esc">Corretor</th>
	<th class="esc">Valor</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody> 
	HTML;
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
			$id = $res[$i]['id'];
		$dono = $res[$i]['dono'];
		$corretor = $res[$i]['corretor'];
		$titulo = $res[$i]['titulo'];
		$descricao = $res[$i]['descricao'];
		$tipo = $res[$i]['tipo'];
		$cidade = $res[$i]['cidade'];
		$bairro = $res[$i]['bairro'];
		$valor = $res[$i]['valor'];
		$ano = $res[$i]['ano'];
		$visitas = $res[$i]['visitas'];
		$area_total = $res[$i]['area_total'];
		$area_construida = $res[$i]['area_construida'];
		$quartos = $res[$i]['quartos'];
		$banheiros = $res[$i]['banheiros'];
		$suites = $res[$i]['suites'];
		$garagens = $res[$i]['garagens'];
		$piscinas = $res[$i]['piscinas'];
		$img_principal = $res[$i]['img_principal'];
		$img_planta = $res[$i]['img_planta'];
		$img_banner = $res[$i]['img_banner'];
		$endereco = $res[$i]['endereco'];
		$status = $res[$i]['status'];
		$condicao = $res[$i]['condicao'];
		$video = $res[$i]['video'];
		$iptu = $res[$i]['iptu'];
		$condominio = $res[$i]['condominio'];
		$comissao_imob = $res[$i]['comissao_imob'];
		$comissao_corretor = $res[$i]['comissao_corretor'];
		$url = $res[$i]['url'];
		$data_cad = $res[$i]['data_cad'];
		$validade_anuncio = $res[$i]['validade_anuncio'];
		$data_inicio = $res[$i]['data_inicio'];
		$data_final = $res[$i]['data_final'];

		if($status == 'Inativo'){			
			$classe_linha = 'text-muted';
		}else{			
			$classe_linha = '';
		}

//retirar aspas do texto do obs
		$descricao = str_replace('"', "**", $descricao);
		$data_cadF = implode('/', array_reverse(explode('-', $data_cad)));
		$data_inicioF = implode('/', array_reverse(explode('-', $data_inicio)));
		$data_finalF = implode('/', array_reverse(explode('-', $data_final)));
		$valorF = number_format($valor, 2, ',', '.');
		$iptuF = number_format($iptu, 2, ',', '.');
		$condominioF = number_format($condominio, 2, ',', '.');
		$tituloF = mb_strimwidth($titulo, 0, 40, "...");

		$query2 = $pdo->query("SELECT * FROM vendedores where id = '$dono'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if(@count($res2) > 0){
			$nome_dono = $res2[0]['nome'];
		}else{
			$nome_dono = 'Sem Registro';
		}

		$query2 = $pdo->query("SELECT * FROM usuarios where id = '$corretor'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if(@count($res2) > 0){
			$nome_corretor = $res2[0]['nome'];
		}else{
			$nome_corretor = 'Sem Registro';
		}


		$query2 = $pdo->query("SELECT * FROM tipos where id = '$tipo'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if(@count($res2) > 0){
			$nome_tipo = $res2[0]['nome'];
		}else{
			$nome_tipo = 'Sem Registro';
		}


		$query2 = $pdo->query("SELECT * FROM cidades where id = '$cidade'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if(@count($res2) > 0){
			$nome_cidade = $res2[0]['nome'];
		}else{
			$nome_cidade = 'Sem Registro';
		}

		$query2 = $pdo->query("SELECT * FROM bairros where id = '$bairro'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if(@count($res2) > 0){
			$nome_bairro = $res2[0]['nome'];
		}else{
			$nome_bairro = 'Sem Registro';
		}



		echo <<<HTML
		<tr class="{$classe_linha}"> 
		<td>
		<img src="images/imoveis/{$img_principal}" width="27px" class="mr-2">
		{$tituloF}
		</td> 
		<td class="esc">{$nome_tipo}</td>
		<td class="esc">{$status}</td>
		<td class="esc">{$nome_corretor}</td>
		<td class="esc">{$valorF}</td>
		<td>

		<big><a href="#" onclick="editar('{$id}', '{$dono}', '{$corretor}', '{$tipo}', '{$cidade}', '{$bairro}', '{$status}', '{$condicao}', '{$area_total}', '{$area_construida}', '{$quartos}', '{$banheiros}', '{$suites}', '{$garagens}', '{$piscinas}', '{$ano}', '{$valor}', '{$iptu}', '{$condominio}', '{$endereco}', '{$comissao_imob}', '{$comissao_corretor}', '{$titulo}', '{$descricao}', '{$img_principal}', '{$img_banner}', '{$img_planta}', '{$video}', '{$validade_anuncio}', '{$data_inicio}', '{$data_final}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		<big><a href="#" onclick="mostrar('{$nome_dono}', '{$nome_corretor}', '{$titulo}', '{$descricao}', '{$nome_tipo}', '{$nome_cidade}', '{$nome_bairro}', '{$valorF}', '{$ano}', '{$visitas}', '{$area_total}', '{$area_construida}', '{$quartos}', '{$banheiros}', '{$suites}', '{$garagens}', '{$piscinas}', '{$img_principal}', '{$img_planta}', '{$img_banner}', '{$endereco}', '{$status}', '{$condicao}', '{$video}', '{$iptuF}', '{$condominioF}', '{$comissao_imob}', '{$comissao_corretor}',  '{$data_cadF}', '{$validade_anuncio}', '{$data_inicioF}', '{$data_finalF}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>

		<li class="dropdown head-dpdn2" style="display: inline-block;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><big><i class="fa fa-trash-o text-danger"></i></big></a>

		<ul class="dropdown-menu" style="margin-left:-230px;">
		<li>
		<div class="notification_desc2">
		<p>Confirmar Exclusão? <a href="#" onclick="excluir('{$id}', '{$tituloF}')"><span class="text-danger">Sim</span></a></p>
		</div>
		</li>										
		</ul>
		</li>


		<a href="#" onclick="imagens('{$id}', '{$titulo}')" class='text-dark mr-1' title='Inserir Imagens' style="margin-right:2px"><i class='fa fa-file-image-o'></i></a>	

		<a href="#" onclick="arquivo('{$id}', '{$titulo}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o " style="color:#22146e"></i></a>


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



	function editar(id, dono, corretor, tipo, cidade, bairro, status, condicao, area_total, area_construida, quartos, banheiros, suites, garagens, piscinas, ano, valor, iptu, condominio, endereco, comissao_imob, comissao_corretor, titulo, descricao, img_principal, img_banner, img_planta, video, validade, data_inicio, data_final){


		for (let letra of descricao){  				
			if (letra === '+'){
				descricao = descricao.replace(' +  + ', '\n')
			}			
		}

		$('#id').val(id);
		$('#dono').val(dono).change();
		$('#corretor').val(corretor).change();
		$('#cidade').val(cidade).change();
		$('#tipo').val(tipo).change();
		$('#bairro').val(bairro).change();
		$('#status').val(status).change();
		$('#condicao').val(condicao).change();
		$('#area_total').val(area_total);
		$('#area_construida').val(area_construida);
		$('#quartos').val(quartos);	
		$('#banheiros').val(banheiros);
		$('#suites').val(suites);
		$('#garagens').val(garagens);
		$('#piscinas').val(piscinas);
		$('#ano').val(ano);
		$('#valor').val(valor);
		$('#iptu').val(iptu);
		$('#condominio').val(condominio);
		$('#endereco').val(endereco);
		$('#comissao_imob').val(comissao_imob);
		$('#comissao_corretor').val(comissao_corretor);
		$('#data_inicio').val(data_inicio);
		$('#data_final').val(data_final);
		$('#validade').val(validade);
		$('#titulo').val(titulo);
		nicEditors.findEditor("area").setContent(descricao);	
		$('#video').val(video);
		
		$('#foto-principal').val('');
		$('#target-principal').attr('src','images/imoveis/' + img_principal);

		$('#foto-banner').val('');
		$('#target-banner').attr('src','images/imoveis/' + img_banner);

		$('#foto-planta').val('');
		$('#target-planta').attr('src','images/imoveis/' + img_planta);	

		$('#target-video').attr('src', video);			
		
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}



	function mostrar(dono, corretor, titulo, descricao, tipo, cidade, bairro, valor, ano, visitas, area_total, area_construida, quartos, banheiros, suites, garagens, piscinas, img_principal, img_planta, img_banner, endereco, status, condicao, video, iptu, condominio, comissao_imob, comissao_corretor, data_cadF, validade, data_inicio, data_final){	

		for (let letra of descricao){  				
			if (letra === '+'){
				descricao = descricao.replace(' +  + ', '\n')
			}			
		}
		
		$('#dono_mostrar').text(dono);
		$('#corretor_mostrar').text(corretor);
		$('#titulo_mostrar').text(titulo);
		$('#descricao_mostrar').html(descricao);
		$('#tipo_mostrar').text(tipo);
		$('#cidade_mostrar').text(cidade);		
		$('#bairro_mostrar').text(bairro);			
		$('#valor_mostrar').text(valor);		
		$('#ano_mostrar').text(ano);
		$('#visitas_mostrar').text(visitas);
		$('#area_total_mostrar').text(area_total + 'm²');
		$('#area_construida_mostrar').text(area_construida + 'm²');
		$('#quartos_mostrar').text(quartos);
		$('#banheiros_mostrar').text(banheiros);
		$('#suites_mostrar').text(suites);		
		$('#garagens_mostrar').text(garagens);			
		$('#piscinas_mostrar').text(piscinas);		
		$('#endereco_mostrar').text(endereco);
		$('#status_mostrar').text(status);
		$('#condicao_mostrar').text(condicao);
		$('#iptu_mostrar').text(iptu);
		$('#condominio_mostrar').text(condominio);
		$('#comissao_imob_mostrar').text(comissao_imob);
		$('#comissao_corretor_mostrar').text(comissao_corretor);
		$('#data_cad_mostrar').text(data_cadF);
		$('#validade_mostrar').text(validade);
		$('#data_inicio_mostrar').text(data_inicio);
		$('#data_final_mostrar').text(data_final);
	


		$('#target_principal_mostrar').attr('src','images/imoveis/' + img_principal);	
		$('#target_planta_mostrar').attr('src','images/imoveis/' + img_planta);
		$('#target_video_mostrar').attr('src', video);	

		$('#modalMostrar').modal('show');		
	}

	function limparCampos(){
		$('#id').val('');		
		$('#area_total').val('');
		$('#area_construida').val('');
		$('#quartos').val('');
		$('#banheiros').val('');
		$('#suites').val('');
		$('#garagens').val('');
		$('#piscinas').val('');
		$('#ano').val('');
		$('#valor').val('');
		$('#iptu').val('');
		$('#condominio').val('');
		$('#endereco').val('');
		$('#comissao_corretor').val('');
		$('#comissao_imob').val('');
		$('#titulo').val('');
		nicEditors.findEditor("area").setContent('');	
		$('#video').val('');
		$('#data_inicio').val('<?=$data_atual?>');
		$('#data_final').val('<?=$data_atual?>');

		$('#target-principal').attr('src','images/imoveis/sem-foto.png');
		$('#target-banner').attr('src','images/imoveis/sem-foto.png');
		$('#target-planta').attr('src','images/imoveis/sem-foto.png');

		$('#foto-planta').val('');
		$('#foto-banner').val('');
		$('#foto-principal').val('');

		$('#myTab a[href="#home"]').tab('show');
		
	}




function arquivo(id, nome){
    $('#id-arquivo').val(id);    
    $('#nome-arquivo').text(nome);
    $('#modalArquivos').modal('show');
    $('#mensagem-arquivo').text(''); 
    listarArquivos();   
}



function imagens(id, nome){
    $('#id-imagens').val(id);    
    $('#nome-imagens').text(nome);
    $('#modalImagens').modal('show');
    $('#mensagem_fotos').text(''); 
    $('#targetImovel').attr('src','images/detalhes-imoveis/sem-foto.png');
	$('#imgimovel').val('');
    listarImagens();   
}

	

</script>



