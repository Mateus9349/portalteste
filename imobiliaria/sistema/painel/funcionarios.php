<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'funcionarios';

if(@$_SESSION['nivel_usuario'] != "Administrador" and @$_SESSION['nivel_usuario'] != "Recepcionista"){
echo "<script>window.location='../index.php'</script>";
exit();
}

 ?>

 <button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Novo Colaborador</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="">Cadastros - Inserir Colaborador</h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
				<div class="modal-body">

					<div class="row">
						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Nome</label> 
								<input type="text" class="form-control" name="nome" id="nome" required> 
							</div>						
						</div>

						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Telefone</label> 
								<input type="text" class="form-control" name="telefone" id="telefone" required> 
							</div>						
						</div>


						<div class="col-md-4">						
							<div class="form-group"> 
								<label>CPF</label> 
								<input type="text" class="form-control" name="cpf" id="cpf" required> 
							</div>						
						</div>


						


					</div>


					<div class="row">
						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Email</label> 
								<input type="email" class="form-control" name="email" id="email" required> 
							</div>						
						</div>

						

						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Data Admissão</label> 
								<input type="date" class="form-control" name="data_adm" id="data_adm" value="<?php echo date('Y-m-d') ?>"> 
							</div>						
						</div>

						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Cargo</label> 
								<select class="form-control sel2" name="cargo" id="cargo" required style="width:100%;"> 
									<?php 
									$query = $pdo->query("SELECT * FROM cargos order by nome asc");
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
					<br>


					

            		<!--</div>-->

					

					
					<!--<div class="col-md-3">
						<div class="form-group"> 
							<label>CRECI <small>(Se For Corretor)</small></label> 
							<input type="text" class="form-control" name="creci" id="creci" placeholder="MG-4202"> 
						</div>
					</div>	-->

					<div class="row">
						<div class="col-md-7">
							<div class="form-group"> 
								<label>OBS <small>(Max 500 Caracteres)</small></label> 
								<textarea maxlength="500" type="text" class="form-control" name="obs" id="obs"> </textarea>
							</div>
						</div>	

						<div class="col-md-3">						
							<div class="form-group"> 
								<label>Foto</label> 
								<input type="file" name="foto" onChange="carregarImg();" id="foto">
							</div>						
						</div>
						<div class="col-md-2">
							<div id="divImg">
								<img src="images/perfil/sem-perfil.jpg"  width="100px" id="target">									
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
			<h4 class="modal-title" id=""><span id="nome_mostrar"> </span> <small><span class="ml-4"><span id="pessoa_mostrar"> </span> </span> </small></h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>CPF: </b></span>
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
							<span><b>Cargo: </b></span>
							<span id="cargo_mostrar"></span>
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
							<span><b>Número: </b></span>
							<span id="numero_mostrar"></span>							
						</div>

					</div>





					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Data de admissão: </b></span>
							<span id="data_adm_mostrar"></span>							
						</div>
						<!--<div class="col-md-6">							
							<span><b>Creci: </b></span>
							<span id="creci_mostrar"></span>
						</div>-->
					</div>		





					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-12">							
							<span><b>Obs.: </b></span>
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



