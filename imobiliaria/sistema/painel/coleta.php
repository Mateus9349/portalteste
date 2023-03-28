<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'coleta';

 ?>

 <button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Receber Coleta</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="">Coletas - Inserir Receber Coleta</h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
				<div class="modal-body">

					<div class="row">

					

						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Materia-Prima</label> 
								<select class="form-control" name="produto" id="produto" required>
									<option value="Resina de Breu">Resina de Breu</option>
									<option value="óleo resina de copaíba">óleo resina de copaíba</option>
									<option value="óleo resina de sangue de dragão">óleo resina de sangue de dragão</option>
									<option value="Buriti">Buriti</option>
									<option value="Copaíba">Copaíba</option>
									<option value="Café Verde">Café Verde</option>
									<option value="Patauá">Patauá</option>
									<option value="Murumuru">Murumuru</option>
									<option value="Tucumã">Tucumã</option>
									<option value="Cupuaçu">Cupuaçu</option>
									<option value="Andiroba">Andiroba</option>
									
									<option value="Cumarú">Cumarú</option>
								</select> 
							</div>						
						</div>

						<!--
						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Produto</label> 
								<select class="form-control sel2" name="produto" id="produto" required style="width:100%;"> 
									<//?php 
									$query = $pdo->query("SELECT * FROM tipos order by nome asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<//?php echo $res[$i]['nome'] ?>"><//?php echo $res[$i]['nome'] ?></option>

									<//?php } ?>

								</select>
							</div>						
						</div>-->







					
						<div class="col-md-6">						
							<div class="form-group"> 
								<label>Produtor/Extrativista</label> 
								<select class="form-control sel2" name="produtor" id="produtor" required style="width:100%;"> 
									<?php 
									$query = $pdo->query("SELECT * FROM locadores order by nome asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['nome'] ?>"><?php echo $res[$i]['nome'] ?></option>

									<?php } ?>

								</select>
							</div>						
						</div>							



					<div class="col-md-3">
						<div class="form-group"> 
							<label>Responsavel</small></label> 
							<select class="form-control sel2" name="corretor" id="corretor" required style="width:100%;"> 
									<?php 
									if($nivel_usu == 'Corretor'){
										$query = $pdo->query("SELECT * FROM usuarios where id = '$id_usuario' order by id asc");
									}else{
										$query = $pdo->query("SELECT * FROM usuarios where nivel = 'Corretor' or nivel = 'Administrador' order by id asc");
									}
									
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['id'] ?>"><?php echo $res[$i]['nome'] ?></option>

									<?php } ?>

								</select>
						</div>
					</div>	
						


					</div>

					<div class="row">


					<div class="col-md-3">						
							<div class="form-group"> 
								<label>Avaliação da Coleta</label> 
								<select class="form-control" name="avaliacao" id="avaliacao" required>
									<option value="Sim">Sim</option>
									<option value="Não">Não</option>
								</select> 
							</div>						
						</div>






					<!--<div class="col-md-3">						
							<div class="form-group"> 
								<label>Locais de Coleta</label> 
								<input type="text" class="form-control" name="local" id="local" required> 
							</div>						
						</div>-->


						
						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Locais de Coleta</label> 
								<select class="form-control sel2" name="local" id="local" required style="width:100%;"> 
									<?php 
									$query = $pdo->query("SELECT * FROM locais order by local asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<?php echo $res[$i]['local'] ?>"><?php echo $res[$i]['local'] ?></option>

									<?php } ?>

								</select>
							</div>						
						</div>				



					<div class="col-md-3">						
							<div class="form-group"> 
								<label>Peso Bruto (kg)</label> 
								<input type="text" class="form-control" name="bruto" id="bruto" required> 
							</div>						
						</div>

					
						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Peso Liquido (kg)</label> 
								<input type="text" class="form-control" name="liquido" id="liquido" required placeholder="0.00"> 
							</div>						
						</div>

						
						
						
						

						
						


					</div>



					<div class="col-md-3">						
							<div class="form-group"> 
								<label>Reprovado (kg)</label> 
								<select class="form-control" name="reprovado" id="reprovado" required>
									<option value="Não">Não</option>
									<option value="Impureza">Impureza</option>
									<option value="Mofo">Mofo</option>
									<option value="Praga">Praga</option>
								</select> 
							</div>						
						</div>					


					<div class="col-md-3">						
							<div class="form-group"> 
								<label>Valor por kg (R$)</label> 
								<input type="text" class="form-control" name="valor" id="valor" required placeholder="0.00"> 
							</div>						
						</div>





					<div class="col-md-3">
						<div class="form-group"> 
							<label>Valor a Pagar (R$)</label> 
							<input type="text" class="form-control" name="pagar" id="pagar" placeholder="0.00" required readonly> 
						</div>
					</div>	





					<!--<div class="col-md-4">						
							<div class="form-group"> 
								<label>Locais de coleta</label> 
								<select class="form-control sel2" name="cargo" id="cargo" required style="width:100%;"> 
								//	<//?php 
									$query = $pdo->query("SELECT * FROM locais order by local asc");
									$res = $query->fetchAll(PDO::FETCH_ASSOC);
									for($i=0; $i < @count($res); $i++){
										foreach ($res[$i] as $key => $value){}

											?>	
										<option value="<//?php echo $res[$i]['id'] ?>"><//?php echo $res[$i]['local'] ?></option>

									<//?php } ?>

								</select>
							</div>						
						</div>-->

					

					<div class="row">

						<!--<div class="col-md-12">
							<div class="form-group"> 
								<label>OBS <small>(Max 500 Caracteres)</small></label> 
								<textarea maxlength="500" type="text" class="form-control" name="obs" id="obs"> </textarea>
							</div>
						</div>-->

						

					</div>				
					

					<br>
					<input type="hidden" name="id" id="id"> 
					<small><div id="mensagem" align="center" class="mt-3"></div></small>					

				</div>


				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Salvar</button>
				</div>



			</form>

		</div>
	</div>
</div>

<script>
    // Adicionando evento de change nos inputs
    document.getElementById("liquido").addEventListener("change", calcularValorPagar);
    document.getElementById("valor").addEventListener("change", calcularValorPagar);

    function calcularValorPagar() {
        var liquido = document.getElementById("liquido").value;
        var valor = document.getElementById("valor").value;
        var pagar = liquido * valor;
        document.getElementById("pagar").value = pagar;
    }
</script>







<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id=""><span id=""> </span> <small><span class="ml-4"><span id=""> </span> </span> </small>Coletas - Coleta Recebida</h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Produto: </b></span>
							<span id="produto_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Produtor: </b></span>
							<span id="produtor_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Avaliação da Coleta: </b></span>
							<span id="avaliacao_mostrar"></span>							
						</div>
						
						<div class="col-md-6">							
							<span><b>Locais  de Coleta: </b></span>
							<span id="local_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Responsavel: </b></span>
							<span id="corretor_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-4">							
							<span><b>Peso bruto (kg): </b></span>
							<span id="bruto_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Peso Liquido (kg): </b></span>
							<span id="liquido_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Reprovado (kg): </b></span>
							<span id="reprovado_mostrar"></span>							
						</div>



					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-4">							
							<span><b>Valor por kg(R$): </b></span>
							<span id="valor_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Valor a Pagar(R$): </b></span>
							<span id="pagar_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Data de Cadastro: </b></span>
							<span id="data_cad_mostrar"></span>
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





	<!-- Modal Arquivos -->
	<div class="modal fade" id="modalArquivos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="tituloModal">Gestão de Arquivos - <span id="nome-arquivo"> </span></h4>
					<button id="btn-fechar-arquivos" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="form-arquivos" method="post">
					<div class="modal-body">

						<div class="row">
							<div class="col-md-8">						
								<div class="form-group"> 
									<label>Arquivo</label> 
									<input type="file" name="arquivo_conta" onChange="carregarImgArquivos();" id="arquivo_conta">
								</div>	
							</div>
							<div class="col-md-4" style="margin-top:-10px">	
								<div id="divImgArquivos">
									<img src="images/arquivos/sem-foto.png"  width="60px" id="target-arquivos">									
								</div>					
							</div>




						</div>

						<div class="row" style="margin-top:-40px">
							<div class="col-md-8">
								<input type="text" class="form-control" name="nome-arq"  id="nome-arq" placeholder="Nome do Arquivo * " required>
							</div>

							<div class="col-md-4">										 
								<button type="submit" class="btn btn-primary">Inserir</button>
							</div>
						</div>

						<hr>

						<small><div id="listar-arquivos"></div></small>

						<br>
						<small><div align="center" id="mensagem-arquivo"></div></small>

						<input type="hidden" class="form-control" name="id-arquivo"  id="id-arquivo">


					</div>
				</form>
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



<script>
	$(document).ready(function() {
		$('#doc').mask('000.000.000-00');
		$('#doc').attr('placeholder','CPF');

		$('#pessoa').change(function(){
			if($(this).val() == 'Física'){
				$('#doc').mask('000.000.000-00');
				$('#doc').attr('placeholder','CPF');
				
			}else{
				$('#doc').mask('00.000.000/0000-00');
				$('#doc').attr('placeholder','CNPJ');
				
				
			}
		});


	});

</script>



		<script type="text/javascript">
			function carregarImgArquivos() {
				var target = document.getElementById('target-arquivos');
				var file = document.querySelector("#arquivo_conta").files[0];

				var arquivo = file['name'];
				resultado = arquivo.split(".", 2);

				if(resultado[1] === 'pdf'){
					$('#target-arquivos').attr('src', "images/pdf.png");
					return;
				}

				if(resultado[1] === 'rar' || resultado[1] === 'zip'){
					$('#target-arquivos').attr('src', "images/rar.png");
					return;
				}

				if(resultado[1] === 'doc' || resultado[1] === 'docx' || resultado[1] === 'txt'){
					$('#target-arquivos').attr('src', "images/word.png");
					return;
				}


				if(resultado[1] === 'xlsx' || resultado[1] === 'xlsm' || resultado[1] === 'xls'){
					$('#target-arquivos').attr('src', "images/excel.png");
					return;
				}


				if(resultado[1] === 'xml'){
					$('#target-arquivos').attr('src', "images/xml.png");
					return;
				}




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




<script type="text/javascript">
			$("#form-arquivos").submit(function () {
				event.preventDefault();
				var formData = new FormData(this);

				$.ajax({
					url: pag + "/arquivos.php",
					type: 'POST',
					data: formData,

					success: function (mensagem) {
						$('#mensagem-arquivo').text('');
						$('#mensagem-arquivo').removeClass()
						if (mensagem.trim() == "Inserido com Sucesso") {                    
						//$('#btn-fechar-arquivos').click();
						$('#nome-arq').val('');
						$('#arquivo_conta').val('');
						$('#target-arquivos').attr('src','images/arquivos/sem-foto.png');
						listarArquivos();
					} else {
						$('#mensagem-arquivo').addClass('text-danger')
						$('#mensagem-arquivo').text(mensagem)
					}

				},

				cache: false,
				contentType: false,
				processData: false,

			});

			});
		</script>



		<script type="text/javascript">
			function listarArquivos(){
				var id = $('#id-arquivo').val();	
				$.ajax({
					url: pag + "/listar-arquivos.php",
					method: 'POST',
					data: {id},
					dataType: "text",

					success:function(result){
						$("#listar-arquivos").html(result);
					}
				});
			}

		</script>