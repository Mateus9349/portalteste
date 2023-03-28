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
	$query = $pdo->query("SELECT * FROM coleta where corretor = '$id_usuario' ORDER BY id desc");
}else{
	$query = $pdo->query("SELECT * FROM coleta ORDER BY id desc");
}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	echo <<<HTML
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Produtor</th>
	<th class="esc">Produto</th> 
	<th class="esc">Local</th> 
	<th class="esc">Valor</th>
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody> 
	HTML;
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
		$id = $res[$i]['id'];
		$produto = $res[$i]['produto'];
		$produtor = $res[$i]['produtor'];
		$avaliacao = $res[$i]['avaliacao'];
		$local = $res[$i]['local'];
		$bruto = $res[$i]['bruto'];
		$liquido = $res[$i]['liquido'];
		$reprovado = $res[$i]['reprovado'];
		$valor = $res[$i]['valor'];
		$pagar = $res[$i]['pagar'];
		$data_cad = $res[$i]['data_cadastro'];
		$corretor = $res[$i]['corretor'];
		
//retirar quebra de texto do obs
		//$obs = str_replace(array("\n", "\r"), ' + ', $obs);
		//$data_nascF = implode('/', array_reverse(explode('-', $data_nasc)));
		$data_cadF = implode('/', array_reverse(explode('-', $data_cad)));

		$query2 = $pdo->query("SELECT * FROM usuarios where id = '$corretor'");
		$res2 = $query2->fetchAll(PDO::FETCH_ASSOC);
		if(@count($res2) > 0){
			$nome_corretor = $res2[0]['nome'];
		}else{
			$nome_corretor = 'Sem Registro';
		}


		echo <<<HTML
		<tr> 
		<td>{$produtor}	</td> 
		<td class="esc">{$produto}</td>
		<td class="esc">{$local}</td>
		<td class="esc">{$valor}</td>
		
		<td>

		<big><a href="#" onclick="editar('{$id}', '{$produto}', '{$produtor}', '{$avaliacao}', '{$local}', '{$bruto}', '{$liquido}', '{$reprovado}', '{$valor}', '{$pagar}', '{$corretor}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		<big><a href="#" onclick="mostrar('{$produto}', '{$produtor}', '{$avaliacao}', '{$local}', '{$bruto}', '{$liquido}', '{$valor}', '{$pagar}', '{$data_cadF}','{$nome_corretor}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>

		<li class="dropdown head-dpdn2" style="display: inline-block;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><big><i class="fa fa-trash-o text-danger"></i></big></a>

		<ul class="dropdown-menu" style="margin-left:-230px;">
		<li>
		<div class="notification_desc2">
		<p>Confirmar Exclusão? <a href="#" onclick="excluir('{$id}', '{$produto}')"><span class="text-danger">Sim</span></a></p>
		</div>
		</li>										
		</ul>
		</li>

		
		<a href="#" onclick="arquivo('{$id}', '{$produto}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o " style="color:#22146e"></i></a>


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



	function editar(id, produto, produtor, avaliacao, local, bruto, liquido, reprovado, valor, pagar, corretor){


		//for (let letra of obs){  				
					//if (letra === '+'){
						//obs = obs.replace(' +  + ', '\n')
					//}			
				//}

		$('#id').val(id);
		$('#produto').val(produto);
		$('#produtor').val(produtor);
		$('#avaliacao').val(avaliacao);
		$('#local').val(local);
		$('#bruto').val(bruto);
		$('#liquido').val(liquido);
		$('#reprovado').val(reprovado);
		$('#valor').val(valor).change();
		$('#pagar').val(pagar).change();
		$('#corretor').val(corretor).change();	
		
		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}



	function mostrar(produto, produtor, avaliacao, local, bruto, liquido, reprovado, valor, pagar, data_cad, corretor){

		//for (let letra of obs){  				
				//	if (letra === '+'){
					//	obs = obs.replace(' +  + ', '\n')
					//}			
				//}
		
		$('#produto_mostrar').text(produto);
		$('#produtor_mostrar').text(produtor);
		$('#avaliacao_mostrar').text(avaliacao);
		$('#local_mostrar').text(local);
		$('#bruto_mostrar').text(bruto);
		$('#liquido_mostrar').text(liquido);
		$('#reprovado_mostrar').text(reprovado);
		$('#valor_mostrar').text(valor);
		$('#pagar_mostrar').text(pagar);				
		$('#data_cad_mostrar').text(data_cad);				
		$('#corretor_mostrar').text(corretor);		
			

		$('#modalMostrar').modal('show');		
	}

	function limparCampos(){
		$('#id').val('');
		$('#produto').val('');
		$('#produtor').val('');
		$('#avaliacao').val('');
		$('#local').val('');
		$('#bruto').val('');
		$('#liquido').val('');
		$('#reprovado').val('');
		$('#valor').val('');
		$('#pagar').val('');
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



