<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'frequencias';


 ?>
<button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Nova Frequência</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal"></h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
			<div class="modal-body">

				<div class="row">
					<div class="col-md-5">						
						<div class="form-group"> 
							<label>Frequência</label> 
							<input type="text" class="form-control" name="frequencia" id="frequencia" required> 
						</div>						
					</div>

					<div class="col-md-3">						
						<div class="form-group"> 
							<label>Dias</label> 
							<input type="number" class="form-control" name="dias" id="dias" required> 
						</div>						
					</div>

					<div class="col-md-4" style="margin-top:20px">						 
						<button type="submit" class="btn btn-primary">Salvar</button>
					</div>

				</div>
				
				<br>
				<input type="hidden" name="id" id="id"> 
				<small><div id="mensagem" align="center" class="mt-3"></div></small>					

			</div>

			
			
			</form>

		</div>
	</div>
</div>



<!-- ModalExcluir -->
<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="width:400px; margin:0 auto;">
			<div class="modal-header">
				<h4 class="modal-title" id="tituloModal">Excluir Registro: <span id="nome-excluido"> </span></h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form-excluir">
			<div class="modal-body">

				<div class="row" align="center">
					<div class="col-md-6">
						<button type="submit" class="btn btn-danger" style="width:100px">Sim</button>
					</div>
					<div class="col-md-6">
						<button type="button" data-dismiss="modal" class="btn btn-success" style="width:100px">Não</button>	
					</div>
				</div>
				
				<br>
				<input type="hidden" name="id" id="id-excluir"> 
				<input type="hidden" name="nome" id="nome-excluir"> 
				<small><div id="mensagem-excluir" align="center" class="mt-3"></div></small>					

			</div>

			<div class="modal-footer">
				
			</div>
			
			</form>

		</div>
	</div>
</div>


<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>

