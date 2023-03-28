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
	$query = $pdo->query("SELECT * FROM vendedores where corretor = '$id_usuario' ORDER BY id desc");
}else{
	$query = $pdo->query("SELECT * FROM vendedores ORDER BY id desc");
}

$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	echo <<<HTML
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Nome</th>
	<th class="esc">Telefone</th> 
	<th class="esc">CPF / CNPJ</th> 

	<th class="esc">Responsavel</th>
	<th class="esc">Valor</th>
	<th class="esc">P/pgto</th>
	<th class="esc">Status</th>	
	<th>Ações</th>
	</tr> 
	</thead> 
	<tbody> 
	HTML;
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
			$id = $res[$i]['id'];
		$nome = $res[$i]['nome'];
		$telefone = $res[$i]['telefone'];
		$doc = $res[$i]['doc'];
		$email = $res[$i]['email'];
		$logradouro = $res[$i]['logradouro'];
		$cep = $res[$i]['cep'];
		$uf = $res[$i]['uf'];
		$cidade = $res[$i]['cidade'];
		$numero = $res[$i]['numero'];
		$corretor = $res[$i]['corretor'];
		$data_nasc = $res[$i]['data_nasc'];
		$data_cad = $res[$i]['data_cadastro'];
		$obs = $res[$i]['obs'];
		$pessoa = $res[$i]['pessoa'];
		$apelido = $res[$i]['apelido'];
		$valor = $res[$i]['valor'];
		$pg = $res[$i]['pg'];
		$status = $res[$i]['status'];

		
		
		
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
		<td>{$nome}	</td> 
		<td class="esc">{$telefone}</td>
		<td class="esc">{$doc}</td>
	
		<td class="esc">{$nome_corretor}</td>
		<td class="esc">{$valor}</td>
		<td class="esc">{$pg}</td>
		<td class="esc">{$status}</td>
		<td>

		<big><a href="#" onclick="editar('{$id}', '{$nome}', '{$apelido}', '{$telefone}', '{$doc}',  '{$email}', '{$logradouro}', '{$cep}', '{$uf}', '{$cidade}', '{$numero}', '{$valor}', '{$pg}', '{$status}', '{$corretor}', '{$data_nasc}', '{$obs}', '{$pessoa}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		<big><a href="#" onclick="mostrar('{$nome}', '{$apelido}', '{$telefone}', '{$doc}', '{$email}',  '{$logradouro}', '{$cep}', '{$uf}', '{$cidade}', '{$numero}', '{$valor}', '{$pg}', '{$status}',  '{$nome_corretor}', '{$data_nascF}', '{$data_cadF}', '{$obs}', '{$pessoa}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>

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



	function editar(id, nome, apelido, telefone, doc, email, logradouro, cep, uf, cidade, numero, valor, pg, status, corretor, data_nasc, obs, pessoa){


		for (let letra of obs){  				
					if (letra === '+'){
						obs = obs.replace(' +  + ', '\n')
					}			
				}

		$('#id').val(id);
		$('#nome').val(nome);
		$('#apelido').val(apelido);
		$('#valor').val(valor);
		$('#telefone').val(telefone);
		$('#doc').val(doc);
		$('#email').val(email);
		$('#pg').val(pg);
		$('#status').val(status);
		$('#logradouro').val(logradouro);
		$('#cep').val(cep);
		$('#uf').val(uf);
		$('#cidade').val(cidade);
		$('#numero').val(numero);
		$('#data_nasc').val(data_nasc);
		$('#obs').val(obs);
		$('#pessoa').val(pessoa).change();
		$('#corretor').val(corretor).change();	
		
		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}



	function mostrar(nome, apelido, telefone, email, doc, logradouro, cep, uf, cidade, numero, valor, pg, status, corretor, data_nasc, data_cad, obs, pessoa){

		for (let letra of obs){  				
					if (letra === '+'){
						obs = obs.replace(' +  + ', '\n')
					}			
				}
		
		$('#nome_mostrar').text(nome);
		$('#cpf_mostrar').text(doc);
		$('#telefone_mostrar').text(telefone);
		$('#email_mostrar').text(email);
		$('#logradouro_mostrar').text(logradouro);
		$('#cep_mostrar').text(cep);
		$('#uf_mostrar').text(uf);
		$('#cidade_mostrar').text(cidade);
		$('#numero_mostrar').text(numero);
		$('#corretor_mostrar').text(corretor);		
		$('#data_nasc_mostrar').text(data_nasc);
		$('#data_cad_mostrar').text(data_cad);				
		$('#obs_mostrar').text(obs);		
		$('#pessoa_mostrar').text(pessoa);
		$('#apelido_mostrar').text(apelido);
		$('#valor_mostrar').text(valor);
		$('#pg_mostrar').text(pg);
		$('#status_mostrar').text(status);
			

		$('#modalMostrar').modal('show');		
	}

	function limparCampos(){
		$('#id').val('');
		$('#nome').val('');
		$('#telefone').val('');
		$('#doc').val('');
		$('#email').val('');
		$('#logradouro').val('');
		$('#cep').val('');
		$('#uf').val('');
		$('#cidade').val('');
		$('#numero').val('');
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



