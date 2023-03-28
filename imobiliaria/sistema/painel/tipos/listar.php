<?php 
require_once("../../conexao.php");
$data_atual = date('Y-m-d');
echo <<<HTML
<small>
HTML;
$query = $pdo->query("SELECT * FROM tipos ORDER BY id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	echo <<<HTML
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Produto</th>
	<th>Nome Cientifíco</th>
	<th>Unidade de Medida</th>
	<th>Valor($)</th>
	<th class="esc">Foto</th> 	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody> 
	HTML;
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
			$id = $res[$i]['id'];
		$nome = $res[$i]['nome'];		
		$foto = $res[$i]['foto'];
		$cientifico = $res[$i]['cientifico'];
		$medida = $res[$i]['medida'];
		$valor = $res[$i]['valor'];
		$ativo = $res[$i]['ativo'];

		if($ativo == 'Sim'){
			$icone = 'fa-check-square';
			$titulo_link = 'Desativar Item';
			$acao = 'Não';
			$classe_linha = '';
		}else{
			$icone = 'fa-square-o';
			$titulo_link = 'Ativar Item';
			$acao = 'Sim';
			$classe_linha = 'text-muted';
		}



		echo <<<HTML
		<tr class="{$classe_linha}"> 
		<td>
		
		{$nome}
		</td> 
		<td class="esc">{$cientifico}</td>
		<td class="esc">{$medida}</td>
		<td class="esc">{$valor}</td>
		<td class="esc"><img src="images/tipos/{$foto}" width="50px" class="mr-2"></td>
		
		<td>

		<big><a href="#" onclick="editar('{$id}', '{$nome}', '{$cientifico}', '{$medida}', '{$valor}', '{$foto}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		<big><a href="#" onclick="mostrar('{$nome}', '{$cientifico}', '{$medida}', '{$valor}', '{$foto}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>


		<li class="dropdown head-dpdn2" style="display: inline-block;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><big><i class="fa fa-trash-o text-danger"></i></big></a>

		<ul class="dropdown-menu" style="margin-left:-230px;">
		<li>
		<div class="notification_desc2">
		<p>Confirmar Exclusão? <a href="#" onclick="excluir('{$id}', '{$nome}')"><span class="text-danger">Sim</span></a></p>
		</div>
		</li>										
		</ul>
		</li>


		<big><a href="#" onclick="ativar('{$id}', '{$nome}', '{$acao}')" title="{$titulo_link}"><i class="fa {$icone} text-success"></i></a></big>


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



	function editar(id, nome, cientifico, medida, valor, foto){

		
		$('#id').val(id);
		$('#nome').val(nome);
		$('#cientifico').val(cientifico);
		$('#medida').val(medida);
		$('#valor').val(valor);
		
		$('#foto').val('');
		$('#target').attr('src','images/tipos/' + foto);			

		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}


	function mostrar(nome, cientifico, medida, valor, foto){


$('#nome_mostrar').text(nome);
$('#cientifico_mostrar').text(cientifico);
$('#medida_mostrar').text(medida);
$('#valor_mostrar').text(valor);
$('#target_mostrar').attr('src','images/tipos/' + foto);

	

$('#modalMostrar').modal('show');		
}



	function limparCampos(){
		$('#id').val('');
		$('#nome').val('');	
		$('#cientifico').val('');	
		$('#medida').val('');
		$('#valor').val('');			
		$('#target').attr('src','images/tipos/sem-foto.png');
		$('#foto').val('');
	}


	

</script>



