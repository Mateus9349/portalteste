<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'tipos';
 ?>

 <button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Nova Materia-Prima</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="">Cadastros - Inserir Materia-Prima</h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
				<div class="modal-body">

					<div class="row">

							<div class="col-md-4">			
							<div class="form-group"> 
								<label>Materia-prima</label> 
								<input type="text" class="form-control" name="nome" id="nome" required> 
							</div>
						</div>

						<!--
							
						-->



						<div class="col-md-4">			
							<div class="form-group"> 
								<label>Nome Cientifíco</label> 
								<input type="text" class="form-control" name="cientifico" id="cientifico" required> 
						</div>
						</div>	
							
						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Unidade de Medida</label> 
								<select class="form-control" name="medida" id="medida" required>
									<option value="Quilo">Quilo</option>
									<option value="Litro">Litro</option>
								</select> 
							</div>						
						</div>

						<div class="col-md-4">			
							<div class="form-group"> 
								<label>Valor</label> 
								<input type="text" class="form-control" name="valor" id="valor" required> 
						</div>
						</div>		

					
							<div class="col-md-8">					
							<div class="form-group"> 
								<label>Foto</label> 
								<input type="file" name="foto" onChange="carregarImg();" id="foto">
							</div>		
							</div>	
							
							


						</div>	


							<div class="row">
							<div class="col-md-8">	
							<div id="divImg">
								<img src="images/tipos/sem-foto.png"  width="100px" id="target">									
							</div>
							</div>

							<div class="col-md-3" align="right" style="margin-top:30px">	
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

<!--funçaõ de colocar a mascara no valor de numeros decimais ao digitar--->
<script>
	$(document).ready(function(){
    $("#valor").mask("#.##0,00", {reverse: true});
});
</script>



<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id=""><span id=""> </span> <small><span class="ml-4"> <span id=""> </span> </span> </small>Cadastros - Materia-Prima:</h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					
				<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Materia-Prima:</b></span>
							<span id="nome_mostrar"></span>							
						</div>

					</div>					

						
				<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Nome Cientifíco:</b></span>
							<span id="cientifico_mostrar"></span>							
						</div>

					</div>	

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Unidade de Medida:</b></span>
							<span id="medida_mostrar"></span>							
						</div>

					</div>	

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>valor($):</b></span>
							<span id="valor_mostrar"></span>							
						</div>

					</div>	

					


		

					<div class="row">
						<div class="col-md-12" align="center">		
							<img  width="200px" id="target_mostrar">	
						</div>
					</div>
					
								

				</div>


		</div>
	</div>
</div>


<script type="text/javascript">var pag = "<?=$pag?>"</script>
<script src="js/ajax.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$('.sel2').select2({
			dropdownParent: $('#modalForm')
		});
	});
</script>





<script type="text/javascript">
	function carregarImg() {
		var target = document.getElementById('target');
		var file = document.querySelector("#foto").files[0];

		var reader = new FileReader();

		reader.onloadend = function () {
			target.src = reader.result;
		};

		if (file) {
			reader.readAsDataURL(file);

		} else {
			target.src = "";
		}
	}
</script>
