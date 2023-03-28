<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'ferramentas';

 ?>

 <button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Novo Cadastro Máquinas / Equipamentos</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="">Cadastros - Inserir Máquinas / Equipamentos</h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
				<div class="modal-body">

					<div class="row">

					<div class="col-md-3">						
							<div class="form-group"> 
								<label>Tipo</label> 
								<select class="form-control" name="produto" id="produto" required>
									<option value="Máquina">Máquina</option>			
									<option value="Ferramenta">Ferramenta</option>
								</select> 
							</div>						
						</div>

						

						<div class="col-md-3">						
						<div class="form-group"> 
							<label>Tipo de máquina</label> 
							<input type="text" class="form-control"name="produtor"   id="produtor" required> 
						</div>						
					</div>


					<div class="col-md-3">						
						<div class="form-group"> 
							<label>Tipo de ferramenta</label> 
							<input type="text" class="form-control" name="avaliacao" id="avaliacao" required> 
						</div>						
					</div>




					<div class="col-md-3">
						<div class="form-group"> 
							<label>Responsável</small></label> 
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


					






					<!--<div class="col-md-3">						
							<div class="form-group"> 
								<label>Locais de Coleta</label> 
								<input type="text" class="form-control" name="local" id="local" required> 
							</div>						
						</div>-->


						
						<div class="col-md-4">						
						<div class="form-group"> 
							<label>Fonte de energia</label> 
							<select class="form-control" name="local" id="local" required>
							<option value="Motor Estacionário">Motor estacionário</option>
							<option value="Rede Elétrica">Rede elétrica</option>
								
							</select> 
						</div>						
					</div>



					<div class="col-md-4">						
						<div class="form-group"> 
							<label>Consumo de energia</label> 
							<select class="form-control" name="bruto" id="bruto" required>
								<option value="Diesel">Diesel</option>
								<option value="Gasolina">Gasolina</option>
								<option value="Energia Solar">Energia solar</option>
								<option value="Energia Solar">kW</option>
										
							</select> 
						</div>						
					</div>

					
					

						
						
						
						

						
						


					</div>
					<br>
						<hr>
						<h4>Depreciação de Máquinas / Equipamentos</h4>	
						<br><br>				


						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Data de aquisição</label> 
								<input type="date" class="form-control" name="data_nasc" id="data_nasc" value="<?php echo date('Y-m-d') ?>"> 
							</div>						
						</div>			


						<div class="col-md-3">                        
							<div class="form-group">
								<label>Valor de custo ($)</label>
								<input type="text" class="form-control" name="reprovado" id="reprovado" required>
							</div>                      
						</div>  





						<div class="col-md-3">                      
    						<div class="form-group">
       							 <label>Valor residual ($)</label>
       							 <i class="fa fa-question-circle"  data-toggle="tooltip" title="Valor residual é o valor que ainda resta no ativo depois de sua vida útil ter sido completada.
									
									Por exemplo, se você comprou uma máquina por $10.000 e ela tem uma vida útil de 5 anos,
									 mas ainda pode ser vendida por $2.000 depois desse período,
									então o valor residual seria de $2.000.
									Esse valor é importante porque ele afeta o cálculo da depreciação anual.
									Quanto maior o valor residual, menor será a depreciação anual, pois há menos valor a ser depreciado ao longo da vida útil do ativo."></i>
       							 <input type="text" class="form-control" name="valor" id="valor" required>
   							 </div>                      
						</div>


						<div class="col-md-3">                      
								<div class="form-group">
									
									<label>Vida útil (em anos)</label>
									<input type="text" class="form-control" name="pagar" id="pagar" required>
								</div>                      
							</div>   			


					

					

					<div class="row">

					<div class="col-md-3">                      
								<div class="form-group">
									<label>Depreciação anual ($)</label>
									<i class="fa fa-question-circle" data-toggle="tooltip" title="Depreciação Anual é o processo de contabilizar o desgaste
									ou perda de valor de um ativo ao longo do tempo.
									Ela é calculada normalmente como uma fração do valor original do ativo,
									dividido pelo número de anos de vida útil do ativo.
									A depreciação anual é utilizada para contabilizar a perda de valor de ativos fixos,
									como máquinas, equipamentos, veículos e prédios,
									ao longo do tempo, de forma a refletir o seu valor real no balanço contábil."></i>

									<input type="text" class="form-control" name="liquido" id="liquido" required readonly>
								</div>                      
							</div>


							<div class="col-md-3">                      
								<div class="form-group">
									<label>Depreciação por dia ($)</label>
									<i class="fa fa-question-circle" data-toggle="tooltip" title="Depreciação por dia é a forma de medir a perda de valor de um ativo ao longo do tempo,
									dividindo-a pelo número de dias no período de tempo especificado. 
									É calculado a partir da depreciação anual dividindo-a pelo número de dias no ano,
									geralmente 365.25 (considerando os dias bissextos) para chegar ao valor diário.
									Esse valor diário pode ser usado para calcular o valor de um ativo em um determinado dia,
									ou para projetar o valor futuro do ativo."></i>

									<input type="text" class="form-control" name="dia" id="dia" required readonly>
								</div>                      
							</div>


						

					</div>	
					
					<!--
					<div class="row">
						<div class="col-md-12">
							<div class="form-group"> 
								<label>Descrição <small>(Max 500 Caracteres)</small></label> 
								<textarea maxlength="500" type="text" class="form-control" name="obs" id="obs"> </textarea>
							</div>
						</div>	

						

					</div>	-->	
					

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

<

 <script>


									
 </script>




<script>
    // Adicionando evento de change nos inputs
    document.getElementById("reprovado").addEventListener("change", calcularDepreciacao);
    document.getElementById("valor").addEventListener("change", calcularDepreciacao);
    document.getElementById("pagar").addEventListener("change", calcularDepreciacao);

    function calcularDepreciacao() {
        var valorpg = document.getElementById("reprovado").value;
        var residual = document.getElementById("valor").value;
        var vida = document.getElementById("pagar").value;
        var depreciacaoAnual = (valorpg - residual) / vida;
        var depreciacaoDia = depreciacaoAnual / 365.25;
        document.getElementById("liquido").value = depreciacaoAnual;
        document.getElementById("dia").value = depreciacaoDia;
		document.getElementById("dia").value = depreciacaoDia.toFixed(2);

    }
</script>

<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id=""><span id=""> </span> <small><span class="ml-4"><span id=""> </span> </span> </small>Cadastros - Máquina / Ferramenta:</h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Tipo: </b></span>
							<span id="produto_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Tipo de máquina: </b></span>
							<span id="produtor_mostrar"></span>
						</div>
						
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
							<span><b>Tipo de ferramenta: </b></span>
							<span id="avaliacao_mostrar"></span>							
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Fonte de energia: </b></span>
							<span id="local_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Responsável: </b></span>
							<span id="corretor_mostrar"></span>
						</div>

						
					</div>
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
							<span><b>Consumo de energia: </b></span>
							<span id="bruto_mostrar"></span>							
						</div>
					</div>



					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
							<span><b>Data de aquisição: </b></span>
							<span id="data_nas_mostrar"></span>
						</div>

						<div class="col-md-6">							
							<span><b>Valor de custo ($:) </b></span>
							<span id="reprovado_mostrar"></span>							
						</div>
					


					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<div class="col-md-6">							
							<span><b>Valor residual ($): </b></span>
							<span id="valor_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Vida útil (em anos): </b></span>
							<span id="pagar_mostrar"></span>							
						</div>

					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						

						<div class="col-md-6">							
							<span><b>Depreciação anual ($): </b></span>
							<span id="liquido_mostrar"></span>							
						</div>	

						<div class="col-md-6">							
							<span><b>Depreciação por dia ($): </b></span>
							<span id="dia_mostrar"></span>
						</div>
					</div>	
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">

						<div class="col-md-6">							
							<span><b>Data de aquisição: </b></span>
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