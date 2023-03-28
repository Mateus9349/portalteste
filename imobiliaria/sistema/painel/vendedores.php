<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'vendedores'; //ajudantes

 ?>

 <button onclick="inserir()" type="button" class="btn btn-info btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Novo Ajudante</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="">Cadastros - Inserir Ajudante</h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Nome Completo</label> 
								<input type="text" class="form-control" name="nome" id="nome" required> 
							</div>						
						</div>


						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Apelido</label> 
								<input type="text" class="form-control" name="apelido" id="apelido" required> 
							</div>						
						</div>


						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Física / Jurídica</label> 
								<select class="form-control" name="pessoa" id="pessoa" required>
									<option value="Física">Física</option>
									<option value="Jurídica">Jurídica</option>
								</select> 
							</div>						
						</div>

						


						<div class="col-md-3">						
							<div class="form-group"> 
								<label>CPF / CNPJ</label> 
								<input type="text" class="form-control" name="doc" id="doc" required> 
							</div>						
						</div>


						


					</div>

					<div class="row">
						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Telefone</label> 
								<input type="text" class="form-control" name="telefone" id="telefone" required> 
							</div>						
						</div>

					
					<div class="col-md-5">						
							<div class="form-group"> 
								<label>Email</label> 
								<input type="email" class="form-control" name="email" id="email" required> 
							</div>						
						</div>

						

						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Data Nascimento</label> 
								<input type="date" class="form-control" name="data_nasc" id="data_nasc" value="<?php echo date('Y-m-d') ?>"> 
							</div>						
						</div>


						
					

					</div>

					<!---->


				<div class="row">
					
						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Valor R$</label> 
								<input type="text" class="form-control" name="valor" id="valor" required> 
							</div>						
						</div>

					
						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Periodicidade de pagamento</label> 
								<select class="form-control" name="pg" id="pg" required>
									<option value="Diário">Diário</option>
									<option value="Mensal">Mensal</option>
									<option value="Produção">Produção</option>
								</select> 
							</div>						
						</div>

						

						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Status</label> 
								<select class="form-control" name="status" id="status" required>
									<option value="Ativo">Ativo</option>
									<option value="Inativo">Inativo</option>
								
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

						<!---->

						<div class="col-md-2">
						
						<div class="form-group"> 
						<label>CEP</label> 
						<input type="text" class="form-control" name="cep" id="cep" placeholder=""> 	
						</div>
					</div>		
					
					
					<div class="col-md-1">  
					                                                                                                                           
                	<!--<button type="submit" id="btn" class="btn btn-success btn-custom mt-2 justify-content-start"  style="right:39px; position:relative; margin-top:21px"  ><svg class="bi bi-search" width="15" height="13" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg>
                   </button>-->
				   <span type="submit" id="btn" class="btn btn-success btn-custom mt-2 justify-content-start"  style="right:30px; position:relative; margin-top:21px;"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                   </span>

            		</div>

					<div class="col-md-3">
						<div class="form-group"> 
							<label>Endereço</label> 
							<input type="text" class="form-control" name="logradouro" id="logradouro" placeholder="Rua X Número 20 Bairro X"> 
						</div>
					</div>


					
					

					<div class="col-md-2">
						<div class="form-group"> 
							<label>UF</label> 
							<input type="text" class="form-control" name="uf" id="uf" placeholder=""> 
						</div>
					</div>	

					<div class="col-md-2">
						<div class="form-group"> 
							<label>Cidade</label> 
							<input type="text" class="form-control" name="cidade" id="cidade" placeholder=""> 
						</div>
					</div>	

					<div class="col-md-2">
						<div class="form-group"> 
							<label>Numero</label> 
							<input type="text" class="form-control" name="numero" id="numero" placeholder=""> 
						</div>
					</div>	

					







					<div class="row">
						<div class="col-md-12">
							<div class="form-group"> 
								<label>OBS <small>(Max 500 Caracteres)</small></label> 
								<textarea maxlength="500" type="text" class="form-control" name="obs" id="obs"> </textarea>
							</div>
						</div>	

						

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





<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id=""><span id="nome_mostrar"> </span> <small><span class="ml-4">(Pessoa: <span id="pessoa_mostrar"> </span>) </span> </small>-Ajudante</h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Apelido</b></span>
							<span id="apelido_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Status:</b></span>
							<span id="status_mostrar"></span>							
						</div>


						
					</div>




					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>CPF / CNPJ: </b></span>
							<span id="cpf_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Telefone: </b></span>
							<span id="telefone_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">


						<div class="col-md-6">							
							<span><b>Email: </b></span>
							<span id="email_mostrar"></span>							
						</div>


						<div class="col-md-6">							
							<span><b>Responsavel: </b></span>
							<span id="corretor_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>CEP: </b></span>
							<span id="cep_mostrar"></span>							
						</div>


						<div class="col-md-6">							
							<span><b>Endereço: </b></span>
							<span id="logradouro_mostrar"></span>							
						</div>

					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-4">							
							<span><b>UF: </b></span>
							<span id="uf_mostrar"></span>							
						</div>


						<div class="col-md-4">							
							<span><b>Cidade: </b></span>
							<span id="cidade_mostrar"></span>							
						</div>

						<div class="col-md-4">							
							<span><b>Numero: </b></span>
							<span id="numero_mostrar"></span>							
						</div>

					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Valor $:</b></span>
							<span id="valor_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Periodicidade de pgto:</b></span>
							<span id="pg_mostrar"></span>							
						</div>
						
					


					</div>					




					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Data de Nascimento: </b></span>
							<span id="data_nasc_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Data de Cadastro: </b></span>
							<span id="data_cad_mostrar"></span>
						</div>
					</div>		

					

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-12">							
							<span><b>OBS: </b></span>
							<span id="obs_mostrar"></span>							
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


<!--api do cep-->
<script src="js/app.js"></script>
<!--api do cep-->


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