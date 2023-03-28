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
	$query = $pdo->query("SELECT * FROM locatarios where corretor = '$id_usuario' ORDER BY id desc");
}else{
	$query = $pdo->query("SELECT * FROM locatarios ORDER BY id desc");
}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	echo <<<HTML
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Nome do Local</th>
	<th class="esc">Comunidade</th> 
	<th class="esc">Municipio</th> 
	<th class="esc">Responsavel</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody> 
	HTML;
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
		$id = $res[$i]['id'];
		$local = $res[$i]['local'];
		$comunidade = $res[$i]['comunidade'];
		$municipio = $res[$i]['municipio'];
		$lat = $res[$i]['lat'];
		$lon = $res[$i]['lon'];
		$obs = $res[$i]['obs'];
		$data_cad = $res[$i]['data_cadastro'];
		$corretor = $res[$i]['corretor'];
		
		
//retirar quebra de texto do obs
		$obs = str_replace(array("\n", "\r"), ' + ', $obs);
		$data_nascF = implode('/', array_reverse(explode('-', $data_nasc)));
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
		<td>{$local}</td> 
		<td class="esc">{$comunidade}</td>
		<td class="esc">{$municipio}</td>
		<td class="esc">{$nome_corretor}</td>
		<td>

		<big><a href="#" onclick="editar('{$id}', '{$nome}', '{$telefone}', '{$doc}', '{$email}', '{$endereco}', '{$corretor}', '{$data_nasc}', '{$obs}', '{$pessoa}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		<big><a href="#" onclick="mostrar('{$nome}', '{$telefone}', '{$doc}', '{$email}', '{$endereco}', '{$nome_corretor}', '{$data_nascF}', '{$data_cadF}', '{$obs}', '{$pessoa}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>

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

		
		<a href="#" onclick="arquivo('{$id}', '{$nome}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o " style="color:#22146e"></i></a>


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



	function editar(id, nome, telefone, doc, email, endereco, corretor, data_nasc, obs, pessoa){


		for (let letra of obs){  				
					if (letra === '+'){
						obs = obs.replace(' +  + ', '\n')
					}			
				}

		$('#id').val(id);
		$('#nome').val(nome);
		$('#telefone').val(telefone);
		$('#doc').val(doc);
		$('#email').val(email);
		$('#endereco').val(endereco);
		$('#data_nasc').val(data_nasc);
		$('#obs').val(obs);
		$('#pessoa').val(pessoa).change();
		$('#corretor').val(corretor).change();	
		
		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}



	function mostrar(nome, telefone, doc, email, endereco, corretor, data_nasc, data_cad, obs, pessoa){

		for (let letra of obs){  				
					if (letra === '+'){
						obs = obs.replace(' +  + ', '\n')
					}			
				}
		
		$('#nome_mostrar').text(nome);
		$('#cpf_mostrar').text(doc);
		$('#telefone_mostrar').text(telefone);
		$('#email_mostrar').text(email);
		$('#endereco_mostrar').text(endereco);
		$('#corretor_mostrar').text(corretor);		
		$('#data_nasc_mostrar').text(data_nasc);
		$('#data_cad_mostrar').text(data_cad);				
		$('#obs_mostrar').text(obs);		
		$('#pessoa_mostrar').text(pessoa);
			

		$('#modalMostrar').modal('show');		
	}

	function limparCampos(){
		$('#id').val('');
		$('#nome').val('');
		$('#telefone').val('');
		$('#doc').val('');
		$('#email').val('');
		$('#endereco').val('');
		$('#obs').val('');
		$('#data_nasc').val('<?=$data_atual?>');
		
	}


function arquivo(id, nome){
    $('#id-arquivo').val(id);    
    $('#nome-arquivo').text(nome);
    $('#modalArquivos').modal('show');
    $('#mensagem-arquivo').text(''); 
    listarArquivos();   
}
	

</script>



