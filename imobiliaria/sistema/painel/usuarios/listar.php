<?php 
require_once("../../conexao.php");

echo <<<HTML
<small>
HTML;
$query = $pdo->query("SELECT * FROM usuarios ORDER BY id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
echo <<<HTML
	<table class="table table-hover" id="tabela">
		<thead> 
			<tr> 				
				<th>Nome</th> 
				<th>Email</th> 
				<th>Senha</th> 
				<th class="esc">Nível</th> 
			</tr> 
		</thead> 
		<tbody> 
HTML;
for($i=0; $i < $total_reg; $i++){
	foreach ($res[$i] as $key => $value){}
$id = $res[$i]['id'];
$nome = $res[$i]['nome'];
$email = $res[$i]['email'];
$foto = $res[$i]['foto'];
$nivel = $res[$i]['nivel'];
if($nivel == 'Administrador'){
	$senha = '******';
}else{
	$senha = $res[$i]['senha'];
}

$ativo = $res[$i]['ativo'];

		if($ativo == 'Sim'){			
			$classe_linha = '';
		}else{			
			$classe_linha = 'text-muted';
		}
echo <<<HTML
			<tr class="{$classe_linha}"> 
				
				<td>
				<img src="images/perfil/{$foto}" width="27px" class="mr-2">
				{$nome}
				</td>
				<td>{$email}</td> 
				<td>{$senha}</td> 
				<td>{$nivel}</td> 
				
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




</script>



