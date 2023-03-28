<?php 
require_once("../../conexao.php");

echo <<<HTML
<small>
HTML;
$query = $pdo->query("SELECT * FROM contas_banco ORDER BY id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
echo <<<HTML
	<table class="table table-hover" id="tabela">
		<thead> 
			<tr> 
				
				<th>Nome</th> 
				<th class="esc">Banco</th> 
				<th class="esc">Conta</th> 
				<th class="esc">Agência</th> 
				<th>Ações</th>
			</tr> 
		</thead> 
		<tbody> 
HTML;
for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
$id = $res[$i]['id'];
$nome = $res[$i]['nome'];
$banco = $res[$i]['banco'];
$conta = $res[$i]['conta'];
$agencia = $res[$i]['agencia'];
echo <<<HTML
			<tr> 
				 
				<td >{$nome}</td>
				<td class="esc">{$banco}</td>
				<td class="esc">{$conta}</td>
				<td class="esc">{$agencia}</td>
				<td>
					<big><a href="#" onclick="editar('{$id}', '{$nome}', '{$banco}', '{$conta}', '{$agencia}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>
				
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
				</td>  
			</tr> 
HTML;
}
echo <<<HTML
		</tbody> 
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



	function editar(id, nome, banco, conta, agencia){
		$('#id').val(id);
		$('#nome').val(nome);
		$('#banco').val(banco);		
		$('#conta').val(conta);		
		$('#agencia').val(agencia);			
			
		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}

	function limparCampos(){
		$('#id').val('');
		$('#nome').val('');
		$('#banco').val('');
		$('#conta').val('');
		$('#agencia').val('');
	}

</script>



