<?php 
require_once("verificar.php");
require_once("../conexao.php");
$pag = 'bairros';


?>

<button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Novo Processo</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
					<small>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
      <a class="nav-link active" id="recepcion-tab" data-toggle="tab" href="#recepcion" role="tab" aria-controls="recepcion" aria-selected="true">Recepção</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="higienizacao-tab" data-toggle="tab" href="#higienizacao" role="tab" aria-controls="higienizacao" aria-selected="false">Higienização</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="secagem-tab" data-toggle="tab" href="#secagem" role="tab" aria-controls="secagem" aria-selected="false">Secagem</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="despolpa-tab" data-toggle="tab" href="#despolpa" role="tab" aria-controls="despolpa" aria-selected="false">Despolpa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="presagem-tab" data-toggle="tab" href="#presagem" role="tab" aria-controls="presagem" aria-selected="false">Prensagem</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="filtragem-tab" data-toggle="tab" href="#filtragem" role="tab" aria-controls="filtragem" aria-selected="false">Filtragem</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="destilacao-tab" data-toggle="tab" href="#destilacao" role="tab" aria-controls="destilacao" aria-selected="false">Destilação</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" id="final-tab" data-toggle="tab" href="#final" role="tab" aria-controls="final" aria-selected="false">Produto Final</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="resultados-tab" data-toggle="tab" href="#resultados" role="tab" aria-controls="resultados" aria-selected="false">Resultados</a>
    </li>
							
						</ul>
					</small>
				</h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -40px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
				<div class="modal-body" style="margin-top: -20px">

					

<div class="tab-content" id="myTabContent"><!--fim nav-->

		<div class="tab-pane fade" id="recepcion" role="tabpanel" aria-labelledby="recepcion-tab">
		<br>
							 <h4>Recepção</h4>
							<div class="row">

							<hr>
								<h4>Matéria-prima</h4>
								<br>

							<div class="col-md-3">
								<div class="form-group"> 
									<label>Data da Entrada</label> 
									<input type="date" class="form-control" name="data_entrada" id="data_entrada" placeholder="" > 
								</div>
							</div>


									<div class="col-md-3">
										<div class="form-group"> 
											<label>Matéria-prima</label> 
											<input type="text" class="form-control" name="materia" id="materia" placeholder="" > 
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Produtor/Extrativista</label> 
											<input type="text" class="form-control" name="produtor" id="produtor" placeholder="" > 
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Local de coleta</label> 
											<input type="text" class="form-control" name="local" id="local" placeholder="" > 
										</div>
									</div>





									

							<div class="row">

															
							<div class="col-md-3">
								<div class="form-group"> 
									<label>Quantidade</label> 
									<input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="" > 
								</div>
							</div>
										<div class="col-md-3">						
										<div class="form-group"> 
											<label>Unidade de medida</label> 
											<select class="form-control" name="medida" id="medida">
												<option value="Quilo">Kg</option>
												<option value="Litro">L</option>
											</select> 
										</div>						
										</div>

						<!--<div class="col-md-3">
								<div class="form-group"> 
									<label>Quantidade</label> 
									<input type="text" class="form-control" name="totall" id="totall" placeholder="" > 
								</div>
							</div>-->	


							<div class="col-md-3">
								<div class="form-group"> 
									<label>Valor pago</label> 
									<input type="text" class="form-control" name="totalll" id="totalll" placeholder="" > 
								</div>
							</div>
							

							</div>

						</div>


							

								<hr>
								<h4>Maquinario/depreciação</h4>
								<br>	
						
						<div class="row">

									
								

									<div class="col-md-3">
										<div class="form-group"> 
											<label>Tipo de máquina</label> 
											<input type="text" class="form-control" name="maq" id="maq" placeholder="" > 
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group"> 
											<label>Data de aquisição</label> 
											<input type="date" class="form-control" name="data_aquisicao" id="data_aquisicao" placeholder="" > 
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label>Valor custo</label>
											<input type="text" class="form-control" name="custo" id="custo" placeholder="">
										</div>
									</div>

									<div class="col-md-3">
												<div class="form-group">
													<label>Valor residual</label>
													<input type="text" class="form-control" name="residual" id="residual" placeholder="">
												</div>
											</div>			
											
						</div>					

							<div class="row">

												



											<div class="col-md-3">
												<div class="form-group">
													<label>Vida útil (anos)</label>
													<input type="text" class="form-control" name="anos" id="anos" placeholder="">
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Depreciação anual</label>
													<input type="text" class="form-control" name="depreciacao" id="depreciacao" placeholder="" >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Depreciação por dia</label>
													<input type="text" class="form-control" name="dia" id="dia" placeholder="" >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Dias utilizados</label><!--depreciaçao por dia*dias utlizados-->
													<input type="text" class="form-control" name="util" id="util" placeholder="" >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>Valor total da depreciação</label>
													<input type="text" class="form-control" name="vd" id="vd" placeholder="" >
												</div>
											</div>		


							</div>	


							<hr>
								<h4>Consumo de energia</h4>
								<br>					
						<div class="row">



							<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de energia</label> 
											<select class="form-control" name="fonte" id="fonte" >
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>	

							<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo de energia</label> 
											<select class="form-control" name="consumo" id="consumo">
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
												<option value="Não se aplica">Não se aplica</option>
														
														
											</select> 
										</div>						
									</div>		

						</div>

																							<script>
																								// Adicionando evento de change nos inputs
																								document.getElementById("custo").addEventListener("change", calcularDepreciacao);
																								document.getElementById("residual").addEventListener("change", calcularDepreciacao);
																								document.getElementById("anos").addEventListener("change", calcularDepreciacao);

																								function calcularDepreciacao() {
																									var valorpg = document.getElementById("custo").value;
																									var residual = document.getElementById("residual").value;
																									var vida = document.getElementById("anos").value;
																									var depreciacaoAnual = (valorpg - residual) / vida;
																									var depreciacaoDia = depreciacaoAnual / 365.25;
																									document.getElementById("depreciacao").value = depreciacaoAnual;
																									document.getElementById("dia").value = depreciacaoDia;
																									document.getElementById("dia").value = depreciacaoDia.toFixed(2);

																								}

																								
																							</script>

																							<script>
																								// Captura os inputs de depreciação por dia, dias utilizados e valor total da depreciação
																							const depreciacaoDia = document.getElementById("dia");
																							const diasUtilizados = document.getElementById("util");
																							const valorTotalDepreciacao = document.getElementById("vd");

																							// Adiciona um evento para detectar quando o usuário digita no input de dias utilizados
																							diasUtilizados.addEventListener("input", function() {
																							// Converte os valores dos inputs para números
																							const valorDepreciacaoDia = Number(depreciacaoDia.value);
																							const valorDiasUtilizados = Number(diasUtilizados.value);
																							
																							// Calcula o valor total da depreciação e exibe no input correspondente
																							const valorTotal = valorDepreciacaoDia * valorDiasUtilizados;
																							valorTotalDepreciacao.value = valorTotal;
																							});


																							</script>

											<hr>
												<h4>Mão de obra</h4>
												<br>			


										<div class="row">

												<div class="col-md-3">
													<div class="form-group">
														<label>Custo de mão de obra</label>
														<input type="text" class="form-control" name="obra" id="obra" placeholder="">
													</div>
												</div>

							
												<div class="col-md-3">
													<div class="form-group">
														<label>Valor hora</label>
														<input type="text" class="form-control" name="hora" id="hora" placeholder="" >
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label>Horas trabalhadas</label>
														<input type="text" class="form-control" name="trabalho" id="trabalho" placeholder="">
													</div>
												</div>


												

												<div class="col-md-3">
													<div class="form-group">
														<label>Valor pago</label>
														<input type="text" class="form-control" name="pago" id="pago" placeholder="" >
													</div>
												</div>

										</div>

								<hr>															
								<div class="row">
								<div align="right">
									<button type="button" id="seguinte_aba2" name="seguinte_aba2" class="btn btn-primary">Seguinte</button>
									
								</div>

							</div>						

				</div>
																	<script>
													// Seleciona os inputs pelos seus IDs
													const custoMaoDeObraInput = document.querySelector("#obra");
													const valorHoraInput = document.querySelector("#hora");
													const horasTrabalhadasInput = document.querySelector("#trabalho");
													const valorPagoInput = document.querySelector("#pago");

													// Adiciona um listener para quando o usuário digitar um valor no campo "custo de mão de obra"
													custoMaoDeObraInput.addEventListener("input", () => {
													// Divide o valor digitado por 8 e exibe o resultado no campo "Valor Hora"
													const valorHora = custoMaoDeObraInput.value / 8;
													valorHoraInput.value = valorHora.toFixed(2);
													});

													// Adiciona um listener para quando o usuário digitar um valor no campo "Horas Trabalhadas"
													horasTrabalhadasInput.addEventListener("input", () => {
													// Multiplica o valor digitado pelo valor da hora e exibe o resultado no campo "Valor Pago"
													const valorHora = valorHoraInput.value;
													const valorPago = horasTrabalhadasInput.value * valorHora;
													valorPagoInput.value = valorPago.toFixed(2);
													});


													</script>


															<!--hegienização-->
	
			<div class="tab-pane fade" id="higienizacao" role="tabpanel" aria-labelledby="higienizacao-tab"><!--fim higienização-->
							<br>
							<h4>Higienização e Seleção</h4>
							<hr>
							<h4>Entrada</h4>
							<div class="row">
										<div class="col-md-3">
										<div class="form-group"> 
											<label>Quantidade da entrada</label> 
											<input type="text" class="form-control" name="entradois" id="entradois" placeholder="00.0" > 
										</div>
										</div>

									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Unidade de medida</label> 
											<select class="form-control" name="undois" id="undois" >
												<option value="Quilo">Kg</option>
												<option value="Litro">L</option>
											</select> 
										</div>						
									</div>

							</div>

							
							<hr>
								<h4>Maquina</h4>
								<br>


							<div class="row">

							
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Nome da máquina</label> 
											<input type="text" class="form-control" name="maqdois" id="maqdois" placeholder="" > 
										</div>
										</div>

										<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de energia</label> 
											<select class="form-control" name="maqfontedois" id="maqfontedois" >
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>	
			

									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo de energia</label> 
											<select class="form-control" name="maqconsumodois" id="maqconsumodois">
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
														
											</select> 
										</div>						
									</div>
									
									
									



									
							</div>



							<div class="row">

							<hr>
								<h4>Ferramenta</h4>
								<br>
											
			
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Nome de ferramenta</label> 
											<input type="text" class="form-control" name="ferdois" id="ferdois" > 
										</div>						
									</div>	

									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de energia</label> 
											<select class="form-control" name="ferfontedois" id="ferfontedois">
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>	
			

									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo de energia</label> 
											<select class="form-control" name="ferconsumodois" id="ferconsumodois">
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
														
											</select> 
										</div>						
									</div>

									

							</div>
									



							<div class="row">

							<hr>
								<h4>Maquinario/depreciação</h4>
								<br>	




								<div class="col-md-3">						
											<div class="form-group"> 
												<label>Data de aquisição</label> 
												<input type="date" class="form-control" name="data_aquidois" id="data_aquidois" value="<?php echo date('Y-m-d') ?>"> 
											</div>						
										</div>	



									<div class="col-md-3">
										<div class="form-group">
											<label>Valor custo</label>
											<input type="text" class="form-control" name="custodois" id="custodois" placeholder="">
										</div>
									</div>

												



								<div class="col-md-3">
											<div class="form-group">
												<label>Valor residual</label>
												<input type="text" class="form-control" name="residualdois" id="residualdois" placeholder="">
											</div>
										</div>						



													<div class="col-md-3">
										<div class="form-group">
											<label>Vida útil (anos)</label>
											<input type="text" class="form-control" name="anosdois" id="anosdois" placeholder="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Depreciação anual</label>
											<input type="text" class="form-control" name="depreciacaodois" id="depreciacaodois" placeholder="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Depreciação por dia</label>
											<input type="text" class="form-control" name="diadois" id="diadois" placeholder="">
										</div>
									</div>
									<div class="col-md-3">
												<div class="form-group">
													<label>dias utilizados</label><!--depreciaçao por dia*dias utlizados-->
													<input type="text" class="form-control" name="utildois" id="utildois" placeholder="" >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>valor total da depreciação</label>
													<input type="text" class="form-control" name="vddois" id="vddois" placeholder="" >
												</div>
											</div>		


							</div>	

																							<script>
																	// Adicionando evento de change nos inputs
																	document.getElementById("custodois").addEventListener("change", calcularDepreciacao);
																	document.getElementById("residualdois").addEventListener("change", calcularDepreciacao);
																	document.getElementById("anosdois").addEventListener("change", calcularDepreciacao);

																	function calcularDepreciacao() {
																		var valorpg = document.getElementById("custodois").value;
																		var residual = document.getElementById("residualdois").value;
																		var vida = document.getElementById("anosdois").value;
																		var depreciacaoAnual = (valorpg - residual) / vida;
																		var depreciacaoDiah = depreciacaoAnual / 365.25;
																		document.getElementById("depreciacaodois").value = depreciacaoAnual;
																		document.getElementById("diadois").value = depreciacaoDiah;
																		document.getElementById("diadois").value = depreciacaoDiah.toFixed(2);

																	}

																	
																</script>
																<script>
																	// Captura os inputs de depreciação por dia, dias utilizados e valor total da depreciação
																const depreciacaoDiah = document.getElementById("diadois");
																const diasUtilizadosh = document.getElementById("utildois");
																const valorTotalDepreciacaoh = document.getElementById("vddois");

																// Adiciona um evento para detectar quando o usuário digita no input de dias utilizados
																diasUtilizadosh.addEventListener("input", function() {
																// Converte os valores dos inputs para números
																const valorDepreciacaoDia = Number(depreciacaoDiah.value);
																const valorDiasUtilizados = Number(diasUtilizadosh.value);
																
																// Calcula o valor total da depreciação e exibe no input correspondente
																const valorTotal = valorDepreciacaoDia * valorDiasUtilizados;
																valorTotalDepreciacaoh.value = valorTotal;
																});


																</script>




							<hr>
								<h4>Mão de obra</h4>
								<br>	

										<div class="row">

													<div class="col-md-3">
														<div class="form-group">
															<label>custo de mão de obra</label>
															<input type="text" class="form-control" name="obradois" id="obradois" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label>Valor hora</label>
															<input type="text" class="form-control" name="horadois" id="horadois" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
													<div class="form-group">
														<label>Horas trabalhadas</label>
														<input type="text" class="form-control" name="trabalhadois" id="trabalhadois" placeholder="">
													</div>
												</div>


													<div class="col-md-3">
														<div class="form-group">
															<label>Valor pago</label>
															<input type="text" class="form-control" name="pagodois" id="pagodois" placeholder="">
														</div>
													</div>

										</div>

															<script>
															// Seleciona os inputs pelos seus IDs
															const custoMaoDeObraInputt = document.querySelector("#obradois");
															const valorHoraInputt = document.querySelector("#horadois");
															const horasTrabalhadasInputt = document.querySelector("#trabalhadois");
															const valorPagoInputt = document.querySelector("#pagodois");

															// Adiciona um listener para quando o usuário digitar um valor no campo "custo de mão de obra"
															custoMaoDeObraInputt.addEventListener("input", () => {
															// Divide o valor digitado por 8 e exibe o resultado no campo "Valor Hora"
															const valorHora = custoMaoDeObraInputt.value / 8;
															valorHoraInputt.value = valorHora.toFixed(2);
															});

															// Adiciona um listener para quando o usuário digitar um valor no campo "Horas Trabalhadas"
															horasTrabalhadasInputt.addEventListener("input", () => {
															// Multiplica o valor digitado pelo valor da hora e exibe o resultado no campo "Valor Pago"
															const valorHora = valorHoraInputt.value;
															const valorPago = horasTrabalhadasInputt.value * valorHora;
															valorPagoInputt.value = valorPago.toFixed(2);
															});





															</script>

										<hr>
										<h4>Resultado</h4>

										<div class="row">


										<div class="col-md-3">
														<div class="form-group">
															<label>Quantidade higienizada</label>
															<input type="text" class="form-control" name="resuldois" id="resuldois" placeholder="">
														</div>
													</div>
										
													<div class="col-md-3">						
														<div class="form-group"> 
															<label>Unidade de medida</label> 
															<select class="form-control" name="medidadois" id="medidadois" >
																<option value="Quilo">Kg</option>
																<option value="Litro">L</option>
															</select> 
														</div>						
														</div>

														<div class="col-md-3">
														<div class="form-group">
															<label>Perda Na higienização</label>
															<input type="text" class="form-control" name="perdadois" id="perdadois" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label>Rendimento</label><!--perda/entrada da valor em %-->
															<input type="text" class="form-control" name="percedois" id="percedois" placeholder="">
														</div>
													</div>


													
													
										</div>

																	<script>

																	// captura os elementos HTML pelos seus IDs
																	const entrada = document.getElementById('entradois');
																	const unidadeEntrada = document.getElementById('undois');
																	const higienizada = document.getElementById('resuldois');
																	const unidadeHigienizada = document.getElementById('medidadois');
																	const perda = document.getElementById('perdadois');
																	const percentual = document.getElementById('percedois');

																	// adiciona um evento ao input de higienizada para atualizar os valores
																	higienizada.addEventListener('input', () => {
																	// converte as quantidades para números
																	const entradaNum = parseFloat(entrada.value);
																	const higienizadaNum = parseFloat(higienizada.value);

																	// calcula a perda e o percentual de perda
																	const perdaNum = entradaNum - higienizadaNum;
																	const percentualNum = (perdaNum / entradaNum) * 100;

																	// atualiza os valores dos inputs
																	perda.value = perdaNum.toFixed(2); // arredonda para 2 casas decimais
																	percentual.value = percentualNum.toFixed(2) + '%'; // adiciona o símbolo de porcentagem
																	});


																	</script>	



							<hr>
							<div class="row">	
								<div align="right">
									<button type="button" id="voltar_aba1" name="voltar_aba1" class="btn btn-secondary">Voltar</button>
									<button type="button" id="seguinte_aba3" name="seguinte_aba3" class="btn btn-primary">Seguinte</button>
									
								</div>
							</div>
					</div><!--fim higienização-->																				


					<!--//////Secagem e Refrigeração///-->




					<div class="tab-pane fade" id="secagem" role="tabpanel" aria-labelledby="secagem-tab"><!--fimsecagem-->
						<br>
							<h4>Secagem e Refrigeração</h4>
							<hr>
							<h4>Entrada</h4>
							<div class="row">
										<div class="col-md-3">
										<div class="form-group"> 
											<label>Quantidade de entrada</label> 
											<input type="text" class="form-control" name="entratres" id="entratres" placeholder="00.0" > 
										</div>
										</div>

									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Unidade de medida</label> 
											<select class="form-control" name="untres" id="untres" >
												<option value="Quilo">Kg</option>
												<option value="Litro">L</option>
											</select> 
										</div>						
									</div>

							</div>



							<hr>
								<h4>Maquina</h4>
								<br>	

								
								<div class="row">
									<div class="col-md-3">
										<div class="form-group"> 
											<label>Nome da maquina</label> 
											<input type="text" class="form-control" name="maqtres" id="maqtres" placeholder="" > 
										</div>
									</div>

								
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de energia</label> 
											<select class="form-control" name="maqfontetres" id="maqfontetres" >
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>


									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De energia</label> 
											<select class="form-control" name="maqconsumotres" id="maqconsumotres" >
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
														
											</select> 
										</div>						
									</div>
									
									

								</div>


								<div class="row">

									<hr>
										<h4>Ferramenta</h4>
										<br>

										<div class="col-md-3">						
										<div class="form-group"> 
											<label>Nome da ferramenta</label> 
											<input type="text" class="form-control" name="fertres" id="fertres" > 
										</div>						
									</div>
									
									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Fonte de energia</label> 
											<select class="form-control" name="ferfontetres" id="ferfontetres" >
											<option value="Motor Estacionário">Motor Estacionário</option>
											<option value="Rede Elétrica">Rede Elétrica</option>
												
											</select> 
										</div>						
									</div>


									<div class="col-md-3">						
										<div class="form-group"> 
											<label>Consumo De energia</label> 
											<select class="form-control" name="ferconsumotres" id="ferconsumotres" >
												<option value="Diesel">Diesel</option>
												<option value="Gasolina">Gasolina</option>
												<option value="Energia Solar">Energia Solar</option>
												<option value="Energia Solar">kW</option>
														
											</select> 
										</div>						
									</div>




								</div>






								<div class="row">
											
								<hr>
								<h4>Maquinario/depreciação</h4>
								<br>
									
									


									<div class="col-md-3">						
											<div class="form-group"> 
												<label>Data de aquisição</label> 
												<input type="date" class="form-control" name="data_aquitres" id="data_aquitres" value="<?php echo date('Y-m-d') ?>"> 
											</div>						
										</div>	



									<div class="col-md-3">
										<div class="form-group">
											<label>Valor custo</label>
											<input type="text" class="form-control" name="custotres" id="custotres" placeholder="00.0">
										</div>
									</div>

									<div class="col-md-3">
											<div class="form-group">
												<label>Valor residual</label>
												<input type="text" class="form-control" name="residualtres" id="residualtres" placeholder="00.0">
											</div>
										</div>	
										
										<div class="col-md-3">
										<div class="form-group">
											<label>Vida útil (anos)</label>
											<input type="text" class="form-control" name="anostres" id="anostres" placeholder="00.0">
										</div>
									</div>

							</div>					




							<div class="row">

									
									<div class="col-md-3">
										<div class="form-group">
											<label>Depreciação anual</label>
											<input type="text" class="form-control" name="depreciacaotres" id="depreciacaotres" placeholder="">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Depreciação por dia</label>
											<input type="text" class="form-control" name="diatres" id="diatres" placeholder="">
										</div>
									</div>
									<div class="col-md-3">
												<div class="form-group">
													<label>dias utilizados</label><!--depreciaçao por dia*dias utlizados-->
													<input type="text" class="form-control" name="utiltres" id="utiltres" placeholder="00.0" >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>valor total da depreciação</label>
													<input type="text" class="form-control" name="vdtres" id="vdtres" placeholder="" >
												</div>
											</div>		


							</div>	
																								<script>
																		// Adicionando evento de change nos inputs
																		document.getElementById("custotres").addEventListener("change", calcularDepreciacao);
																		document.getElementById("residualtres").addEventListener("change", calcularDepreciacao);
																		document.getElementById("anostres").addEventListener("change", calcularDepreciacao);

																		function calcularDepreciacao() {
																			var valorpg = document.getElementById("custotres").value;
																			var residual = document.getElementById("residualtres").value;
																			var vida = document.getElementById("anostres").value;
																			var depreciacaoAnual = (valorpg - residual) / vida;
																			var depreciacaoDias = depreciacaoAnual / 365.25;
																			document.getElementById("depreciacaotres").value = depreciacaoAnual;
																			document.getElementById("diatres").value = depreciacaoDias;
																			document.getElementById("diatres").value = depreciacaoDias.toFixed(2);

																		}

																	</script>
																		<script>
																			// Captura os inputs de depreciação por dia, dias utilizados e valor total da depreciação
																		const depreciacaoDias = document.getElementById("diatres");
																		const diasUtilizadoss = document.getElementById("utiltres");
																		const valorTotalDepreciacaos = document.getElementById("vdtres");

																		// Adiciona um evento para detectar quando o usuário digita no input de dias utilizados
																		diasUtilizadoss.addEventListener("input", function() {
																		// Converte os valores dos inputs para números
																		const valorDepreciacaoDia = Number(depreciacaoDias.value);
																		const valorDiasUtilizados = Number(diasUtilizadoss.value);
																		
																		// Calcula o valor total da depreciação e exibe no input correspondente
																		const valorTotal = valorDepreciacaoDia * valorDiasUtilizados;
																		valorTotalDepreciacaos.value = valorTotal;
																		});


																		</script>




							<hr>
								<h4>Mão de obra</h4>
								<br>	



										<div class="row">

													<div class="col-md-3">
														<div class="form-group">
															<label>custo de mão de obra</label>
															<input type="text" class="form-control" name="obratres" id="obratres" placeholder="00.0">
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label>Valor hora</label>
															<input type="text" class="form-control" name="horatres" id="horatres" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
													<div class="form-group">
														<label>Horas trabalhadas</label>
														<input type="text" class="form-control" name="trabalhotres" id="trabalhotres" placeholder="00.0">
													</div>
												</div>


													<div class="col-md-3">
														<div class="form-group">
															<label>Valor pago</label>
															<input type="text" class="form-control" name="pagotres" id="pagotres" placeholder="">
														</div>
													</div>

										</div>

																									<script>
															// Seleciona os inputs pelos seus IDs
															const custoMaoDeObraInputs = document.querySelector("#obratres");
															const valorHoraInputs = document.querySelector("#horatres");
															const horasTrabalhadasInputs = document.querySelector("#trabalhotres");
															const valorPagoInputs = document.querySelector("#pagotres");

															// Adiciona um listener para quando o usuário digitar um valor no campo "custo de mão de obra"
															custoMaoDeObraInputs.addEventListener("input", () => {
															// Divide o valor digitado por 8 e exibe o resultado no campo "Valor Hora"
															const valorHora = custoMaoDeObraInputs.value / 8;
															valorHoraInputs.value = valorHora.toFixed(2);
															});

															// Adiciona um listener para quando o usuário digitar um valor no campo "Horas Trabalhadas"
															horasTrabalhadasInputs.addEventListener("input", () => {
															// Multiplica o valor digitado pelo valor da hora e exibe o resultado no campo "Valor Pago"
															const valorHora = valorHoraInputs.value;
															const valorPago = horasTrabalhadasInputs.value * valorHora;
															valorPagoInputs.value = valorPago.toFixed(2);
															});
															

															</script>	
										<hr>
										<h4>Resultado</h4>

										<div class="row">


										<div class="col-md-3">
														<div class="form-group">
															<label>Quantidade da secagem</label>
															<input type="text" class="form-control" name="resultres" id="resultres" placeholder="00.0">
														</div>
													</div>
										
													<div class="col-md-3">						
														<div class="form-group"> 
															<label>Unidade de medida</label> 
															<select class="form-control" name="medidatres" id="medidatres" >
																<option value="Quilo">Kg</option>
																<option value="Litro">L</option>
															</select> 
														</div>						
														</div>

														<div class="col-md-3">
														<div class="form-group">
															<label>Perda Na secagem</label>
															<input type="text" class="form-control" name="perdatres" id="perdatres" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label>Rendimento</label><!--perda/entrada da valor em %-->
															<input type="text" class="form-control" name="percetres" id="percetres" placeholder="">
														</div>
													</div>


													
													
										</div>	

																	<script>
																	const entradass = document.getElementById('entratres');
																	const unidadeEntradass = document.getElementById('untres');
																	const higienizadass = document.getElementById('resultres');
																	const unidadeHigienizadas = document.getElementById('medidatres');
																	const perdass = document.getElementById('perdatres');
																	const percentualss = document.getElementById('percetres');

																	// adiciona um evento ao input de higienizada para atualizar os valores
																	higienizadass.addEventListener('input', () => {
																	// converte as quantidades para números
																	const entradaNum = parseFloat(entradass.value);
																	const higienizadaNum = parseFloat(higienizadass.value);

																	// calcula a perda e o percentual de perda
																	const perdaNum = entradaNum - higienizadaNum;
																	const percentualNum = (perdaNum / entradaNum) * 100;

																	// atualiza os valores dos inputs
																	perdass.value = perdaNum.toFixed(2); // arredonda para 2 casas decimais
																	percentualss.value = percentualNum.toFixed(2) + '%'; // adiciona o símbolo de porcentagem
																	});

																	</script>

												<hr>
										<h4>Refrigeração</h4>
										<br>

										<div class="row">
											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Data Do armazenamento</label> 
													<input type="date" class="form-control" name="data_arm" id="data_arm" value="<?php echo date('Y-m-d') ?>"> 
												</div>						
											</div>	

											<div class="col-md-3">
															<div class="form-group">
																<label>Quantidade armazenada</label>
																<input type="text" class="form-control" name="armazum" id="armazum" placeholder="00.0">
															</div>
													</div>	

													<div class="col-md-3">						
											<div class="form-group"> 
												<label>Unidade de medida</label> 
												<select class="form-control" name="medum" id="medum" >
													<option value="Quilo">Kg</option>
													<option value="Litro">L</option>
													<option value="Litro">UN</option>
												</select> 
											</div>						
											</div>

											<div class="col-md-3">
															<div class="form-group">
																<label>Forma armazenamento</label>
																<input type="text" class="form-control" name="formaum" id="formaum" placeholder="saco,balde..">
															</div>
													</div>	



										</div>
							<hr>
							<div class="row">						
								<div align="right">
								<button type="button" id="voltar_aba2" name="voltar_aba2" class="btn btn-secondary">Voltar</button>
								<button type="button" id="seguinte_aba4" name="seguinte_aba4" class="btn btn-primary">Seguinte</button>
							
									
								
								</div>
							</div>						
					</div><!--fimsecagem-->

					<!--//////Despolpa///-->

					<div class="tab-pane fade" id="despolpa" role="tabpanel" aria-labelledby="despolpa-tab"><!--fim começo despolpa-->

														<br>
														<h4>Despolpa</h4>
														<hr>
														<h4>Entrada</h4>
														<div class="row">
															<div class="col-md-3">
															<div class="form-group"> 
																<label>Quantidade de entrada</label> 
																<input type="text" class="form-control" name="entraquatro" id="entraquatro" placeholder="00.0" > 
															</div>
														</div>

														<div class="col-md-3">						
														<div class="form-group"> 
														<label>Unidade de medida</label> 
														<select class="form-control" name="unquatro" id="unquatro" >
															<option value="Quilo">Kg</option>
															<option value="Litro">L</option>
														</select> 
														</div>						
														</div>

														</div>

														<hr>
														<h4>Maquina</h4>
														<br>
														<div class="row">

															

															<div class="col-md-3">
																<div class="form-group"> 
																	<label>Nome de maquina</label> 
																	<input type="text" class="form-control" name="maqquatro" id="maqquatro" placeholder="" > 
																</div>
																</div>

																


															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Fonte da energia</label> 
																	<select class="form-control" name="maqfontequatro" id="maqfontequatro" >
																	<option value="Motor Estacionário">Motor Estacionário</option>
																	<option value="Rede Elétrica">Rede Elétrica</option>
																		
																	</select> 
																</div>						
															</div>	


															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Consumo de energia</label> 
																	<select class="form-control" name="maqconsumoquatro" id="maqconsumoquatro" >
																		<option value="Diesel">Diesel</option>
																		<option value="Gasolina">Gasolina</option>
																		<option value="Energia Solar">Energia Solar</option>
																		<option value="Energia Solar">kW</option>
																				
																	</select> 
																</div>						
															</div>




															</div>



														<div class="row">
															<hr>
															<h4>Ferramenta</h4>
															<br>
																	
															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Nome da ferramenta</label> 
																	<input type="text" class="form-control" name="ferquatro" id="ferquatro" > 
																</div>						
															</div>	

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Fonte da energia</label> 
																	<select class="form-control" name="ferfontequatro" id="ferfontequatro" >
																	<option value="Motor Estacionário">Motor Estacionário</option>
																	<option value="Rede Elétrica">Rede Elétrica</option>
																		
																	</select> 
																</div>						
															</div>	


															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Consumo De energia</label> 
																	<select class="form-control" name="ferconsumoquatro" id="ferconsumoquatro" >
																		<option value="Diesel">Diesel</option>
																		<option value="Gasolina">Gasolina</option>
																		<option value="Energia Solar">Energia Solar</option>
																		<option value="Energia Solar">kW</option>
																				
																	</select> 
																</div>						
															</div>



															

														</div>					




																				<div class="row">

																						<hr>
																						<h4>Maquinario/depreciação</h4>
																						<br>


																						<div class="col-md-3">						
																								<div class="form-group"> 
																									<label>Data de aquisição</label> 
																									<input type="date" class="form-control" name="data_aquiquatro" id="data_aquiquatro" value="<?php echo date('Y-m-d') ?>"> 
																								</div>						
																							</div>	



																						<div class="col-md-3">
																							<div class="form-group">
																								<label>Valor custo</label>
																								<input type="text" class="form-control" name="custoquatro" id="custoquatro" placeholder="">
																							</div>
																						</div>

																						<div class="col-md-3">
																								<div class="form-group">
																									<label>Valor residual</label>
																									<input type="text" class="form-control" name="residualquatro" id="residualquatro" placeholder="">
																								</div>
																							</div>						



																										<div class="col-md-3">
																							<div class="form-group">
																								<label>Vida útil (anos)</label>
																								<input type="text" class="form-control" name="anosquatro" id="anosquatro" placeholder="">
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="form-group">
																								<label>Depreciação anual</label>
																								<input type="text" class="form-control" name="depreciacaoquatro" id="depreciacaoquatro" placeholder="">
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="form-group">
																								<label>Depreciação por dia</label>
																								<input type="text" class="form-control" name="diaquatro" id="diaquatro" placeholder="">
																							</div>
																						</div>

																						<div class="col-md-3">
																						<div class="form-group">
																							<label>dias utilizados</label><!--depreciaçao por dia*dias utlizados-->
																							<input type="text" class="form-control" name="utilquatro" id="utilquatro" placeholder="00.0" >
																						</div>
																					</div>
																					<div class="col-md-3">
																						<div class="form-group">
																							<label>valor total da depreciação</label>
																							<input type="text" class="form-control" name="vdquatro" id="vdquatro" placeholder="" >
																						</div>
																					</div>		



																						</div>	

															<script>
														// Adicionando evento de change nos inputs
														document.getElementById("custoquatro").addEventListener("change", calcularDepreciacao);
														document.getElementById("residualquatro").addEventListener("change", calcularDepreciacao);
														document.getElementById("anosquatro").addEventListener("change", calcularDepreciacao);

														function calcularDepreciacao() {
														var valorpg = document.getElementById("custoquatro").value;
														var residual = document.getElementById("residualquatro").value;
														var vida = document.getElementById("anosquatro").value;
														var depreciacaoAnual = (valorpg - residual) / vida;
														var depreciacaoDia = depreciacaoAnual / 365.25;
														document.getElementById("depreciacaoquatro").value = depreciacaoAnual;
														document.getElementById("diaquatro").value = depreciacaoDia;
														document.getElementById("diaquatro").value = depreciacaoDia.toFixed(2);

														}


														</script>
														<script>
														// Captura os inputs de depreciação por dia, dias utilizados e valor total da depreciação
														const depreciacaoDiad = document.getElementById("diaquatro");
														const diasUtilizadosd = document.getElementById("utilquatro");
														const valorTotalDepreciacaod = document.getElementById("vdquatro");

														// Adiciona um evento para detectar quando o usuário digita no input de dias utilizados
														diasUtilizadosd.addEventListener("input", function() {
														// Converte os valores dos inputs para números
														const valorDepreciacaoDia = Number(depreciacaoDiad.value);
														const valorDiasUtilizados = Number(diasUtilizadosd.value);

														// Calcula o valor total da depreciação e exibe no input correspondente
														const valorTotal = valorDepreciacaoDia * valorDiasUtilizados;
														valorTotalDepreciacaod.value = valorTotal;
														});


														</script>




															<hr>
																<h4>Mão de obra</h4>
																<br>	




															<div class="row">

																		<div class="col-md-3">
																			<div class="form-group">
																				<label>custo de mão de obra</label>
																				<input type="text" class="form-control" name="obraquatro" id="obraquatro" placeholder="">
																			</div>
																		</div>

																		<div class="col-md-3">
																			<div class="form-group">
																				<label>Valor hora</label>
																				<input type="text" class="form-control" name="horaquatro" id="horaquatro" placeholder="">
																			</div>
																		</div>

																		<div class="col-md-3">
																			<div class="form-group">
																				<label>Horas trabalhadas</label>
																				<input type="text" class="form-control" name="trabalhoquatro" id="trabalhoquatro" placeholder="00.0">
																			</div>
																		</div>


																		<div class="col-md-3">
																			<div class="form-group">
																				<label>Valor pago</label>
																				<input type="text" class="form-control" name="pagoquatro" id="pagoquatro" placeholder="">
																			</div>
																		</div>

															</div>
																																<script>
																	// Seleciona os inputs pelos seus IDs
																	const custoMaoDeObraInputd = document.querySelector("#obraquatro");
																	const valorHoraInputd = document.querySelector("#horaquatro");
																	const horasTrabalhadasInputd = document.querySelector("#trabalhoquatro");
																	const valorPagoInputd = document.querySelector("#pagoquatro");

																	// Adiciona um listener para quando o usuário digitar um valor no campo "custo de mão de obra"
																	custoMaoDeObraInputd.addEventListener("input", () => {
																	// Divide o valor digitado por 8 e exibe o resultado no campo "Valor Hora"
																	const valorHora = custoMaoDeObraInputd.value / 8;
																	valorHoraInputd.value = valorHora.toFixed(2);
																	});

																	// Adiciona um listener para quando o usuário digitar um valor no campo "Horas Trabalhadas"
																	horasTrabalhadasInputd.addEventListener("input", () => {
																	// Multiplica o valor digitado pelo valor da hora e exibe o resultado no campo "Valor Pago"
																	const valorHora = valorHoraInputd.value;
																	const valorPago = horasTrabalhadasInputd.value * valorHora;
																	valorPagoInputd.value = valorPago.toFixed(2);
																	});


																	</script>


															<hr>
													<h4>Resultado</h4>

													<div class="row">


													<div class="col-md-3">
																<div class="form-group">
																	<label>Quantidade da despolpa</label>
																	<input type="text" class="form-control" name="resulquatro" id="resulquatro" placeholder="00.0">
																</div>
															</div>

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Unidade de medida</label> 
																	<select class="form-control" name="medidaquatro" id="medidaquatro" >
																		<option value="Quilo">Kg</option>
																		<option value="Litro">L</option>
																	</select> 
																</div>						
																</div>

																<div class="col-md-3">
																<div class="form-group">
																	<label>Perda Na despolpa</label>
																	<input type="text" class="form-control" name="perdaquatro" id="perdaquatro" placeholder="">
																</div>
															</div>

															<div class="col-md-3">
																<div class="form-group">
																	<label>Rendimento</label><!--perda/entrada da valor em %-->
																	<input type="text" class="form-control" name="percequatro" id="percequatro" placeholder="">
																</div>
															</div>


															
															
													</div>	

													<script>
													const entradasd = document.getElementById('entraquatro');
													const unidadeEntradasd = document.getElementById('unquatro');
													const higienizadasd = document.getElementById('resulquatro');
													const unidadeHigienizadad = document.getElementById('medidaquatro');
													const perdasd = document.getElementById('perdaquatro');
													const percentualsd = document.getElementById('percequatro');

													// adiciona um evento ao input de higienizada para atualizar os valores
													higienizadasd.addEventListener('input', () => {
													// converte as quantidades para números
													const entradaNum = parseFloat(entradasd.value);
													const higienizadaNum = parseFloat(higienizadasd.value);

													// calcula a perda e o percentual de perda
													const perdaNum = entradaNum - higienizadaNum;
													const percentualNum = (perdaNum / entradaNum) * 100;

													// atualiza os valores dos inputs
													perdasd.value = perdaNum.toFixed(2); // arredonda para 2 casas decimais
													percentualsd.value = percentualNum.toFixed(2) + '%'; // adiciona o símbolo de porcentagem
													});

													</script>

													<hr>
													<div align="right">
													<button type="button" id="voltar_aba3" name="voltar_aba3" class="btn btn-secondary">Voltar</button>
													<button type="button" id="seguinte_aba5" name="seguinte_aba5" class="btn btn-primary">Seguinte</button>
													</div>
											</div><!--fim começo despolpa-->								






		
										
										<!--//////presagem///-->


							
										<div class="tab-pane fade" id="presagem" role="tabpanel" aria-labelledby="presagem-tab"><!--fim e começo prensagem-->
																	<br>
																	<h4>Prensagem</h4>
																	<hr>
																	<h4>Entrada</h4>
																	<div class="row">
																		<div class="col-md-3">
																		<div class="form-group"> 
																			<label>Quantidade de entrada</label> 
																			<input type="text" class="form-control" name="entracinco" id="entracinco" placeholder="00.0" > 
																		</div>
																	</div>

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Unidade de medida</label> 
																	<select class="form-control" name="uncinco" id="uncinco" >
																		<option value="Quilo">Kg</option>
																		<option value="Litro">L</option>
																	</select> 
																</div>						
															</div>

													</div>

																	<hr>
																<h4>Maquina</h4>
																<br>
													<div class="row">


														<div class="col-md-3">
															<div class="form-group"> 
																<label>Nome da maquina</label> 
																<input type="text" class="form-control" name="maqcinco" id="maqcinco" placeholder="" > 
															</div>
															</div>


														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Fonte de energia</label> 
																<select class="form-control" name="maqfontecinco" id="maqfontecinco" >
																<option value="Motor Estacionário">Motor Estacionário</option>
																<option value="Rede Elétrica">Rede Elétrica</option>
																	
																</select> 
															</div>						
														</div>	

														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Consumo de energia</label> 
																<select class="form-control" name="maqconsumocinco" id="maqconsumocinco" >
																	<option value="Diesel">Diesel</option>
																	<option value="Gasolina">Gasolina</option>
																	<option value="Energia Solar">Energia Solar</option>
																	<option value="Energia Solar">kW</option>
																					
																		</select> 
																	</div>						
															</div>





														</div>






												<div class="row">

													<hr>
													<h4>Ferramenta</h4>
													<br>
														

												<div class="col-md-3">						
															<div class="form-group"> 
																<label>Nome de ferramenta</label> 
																<input type="text" class="form-control" name="fercinco" id="fercinco" > 
															</div>						
														</div>	

														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Fonte de energia</label> 
																<select class="form-control" name="ferfontecinco" id="ferfontecinco" >
																<option value="Motor Estacionário">Motor Estacionário</option>
																<option value="Rede Elétrica">Rede Elétrica</option>
																	
																</select> 
															</div>						
														</div>	

														<div class="col-md-3">						
															<div class="form-group"> 
																<label>Consumo de energia</label> 
																<select class="form-control" name="ferconsumocinco" id="ferconsumocinco" >
																	<option value="Diesel">Diesel</option>
																	<option value="Gasolina">Gasolina</option>
																	<option value="Energia Solar">Energia Solar</option>
																	<option value="Energia Solar">kW</option>
																					
																		</select> 
																	</div>						
															</div>



												

												
												</div>					




											<div class="row">
											<hr>
											<h4>Maquinario/depreciação</h4>
											<br>



											<div class="col-md-3">						
														<div class="form-group"> 
															<label>Data de aquisição</label> 
															<input type="date" class="form-control" name="data_aquicinco" id="data_aquicinco" value="<?php echo date('Y-m-d') ?>"> 
														</div>						
													</div>	



												<div class="col-md-3">
													<div class="form-group">
														<label>Valor custo</label>
														<input type="text" class="form-control" name="custocinco" id="custocinco" placeholder="">
													</div>
												</div>






													<div class="col-md-3">
															<div class="form-group">
																<label>Valor residual</label>
																<input type="text" class="form-control" name="residualcinco" id="residualcinco" placeholder="">
															</div>
														</div>						



																	<div class="col-md-3">
														<div class="form-group">
															<label>Vida útil (anos)</label>
															<input type="text" class="form-control" name="anoscinco" id="anoscinco" placeholder="">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label>Depreciação anual</label>
															<input type="text" class="form-control" name="depreciacaocinco" id="depreciacaocinco" placeholder="">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label>Depreciação por dia</label>
															<input type="text" class="form-control" name="diacinco" id="diacinco" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
												<div class="form-group">
													<label>dias utilizados</label><!--depreciaçao por dia*dias utlizados-->
													<input type="text" class="form-control" name="utilcinco" id="utilcinco" placeholder="00.0" >
												</div>
											</div>
											<div class="col-md-3">
												<div class="form-group">
													<label>valor total da depreciação</label>
													<input type="text" class="form-control" name="vdcinco" id="vdcinco" placeholder="" >
												</div>
											</div>		


											</div>	
																								<script>
														// Adicionando evento de change nos inputs
														document.getElementById("custocinco").addEventListener("change", calcularDepreciacao);
														document.getElementById("residualcinco").addEventListener("change", calcularDepreciacao);
														document.getElementById("anoscinco").addEventListener("change", calcularDepreciacao);

														function calcularDepreciacao() {
															var valorpg = document.getElementById("custocinco").value;
															var residual = document.getElementById("residualcinco").value;
															var vida = document.getElementById("anoscinco").value;
															var depreciacaoAnual = (valorpg - residual) / vida;
															var depreciacaoDia = depreciacaoAnual / 365.25;
															document.getElementById("depreciacaocinco").value = depreciacaoAnual;
															document.getElementById("diacinco").value = depreciacaoDia;
															document.getElementById("diacinco").value = depreciacaoDia.toFixed(2);

														}

	
															</script>
															<script>
																// Captura os inputs de depreciação por dia, dias utilizados e valor total da depreciação
															const depreciacaoDiap = document.getElementById("diacinco");
															const diasUtilizadosp = document.getElementById("utilcinco");
															const valorTotalDepreciacaop = document.getElementById("vdcinco");

															// Adiciona um evento para detectar quando o usuário digita no input de dias utilizados
															diasUtilizadosp.addEventListener("input", function() {
															// Converte os valores dos inputs para números
															const valorDepreciacaoDia = Number(depreciacaoDiap.value);
															const valorDiasUtilizados = Number(diasUtilizadosp.value);
															
															// Calcula o valor total da depreciação e exibe no input correspondente
															const valorTotal = valorDepreciacaoDia * valorDiasUtilizados;
															valorTotalDepreciacaop.value = valorTotal;
															});


															</script>




							<hr>
								<h4>Mão de obra</h4>
								<br>	
											




									<div class="row">

												<div class="col-md-3">
													<div class="form-group">
														<label>custo de mão de obra</label>
														<input type="text" class="form-control" name="obracinco" id="obracinco" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label>Valor hora</label>
														<input type="text" class="form-control" name="horacinco" id="horacinco" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
																	<div class="form-group">
																		<label>Horas trabalhadas</label>
																		<input type="text" class="form-control" name="trabalhocinco" id="trabalhocinco" placeholder="00.0">
																	</div>
																</div>


												<div class="col-md-3">
													<div class="form-group">
														<label>Valor pago</label>
														<input type="text" class="form-control" name="pagocinco" id="pagocinco" placeholder="">
													</div>
												</div>

									</div>

													<script>
														// Seleciona os inputs pelos seus IDs
													const custoMaoDeObraInputp = document.querySelector("#obracinco");
													const valorHoraInputp = document.querySelector("#horacinco");
													const horasTrabalhadasInputp = document.querySelector("#trabalhocinco");
													const valorPagoInputp = document.querySelector("#pagocinco");

													// Adiciona um listener para quando o usuário digitar um valor no campo "custo de mão de obra"
													custoMaoDeObraInputp.addEventListener("input", () => {
													// Divide o valor digitado por 8 e exibe o resultado no campo "Valor Hora"
													const valorHora = custoMaoDeObraInputp.value / 8;
													valorHoraInputp.value = valorHora.toFixed(2);
													});

													// Adiciona um listener para quando o usuário digitar um valor no campo "Horas Trabalhadas"
													horasTrabalhadasInputp.addEventListener("input", () => {
													// Multiplica o valor digitado pelo valor da hora e exibe o resultado no campo "Valor Pago"
													const valorHora = valorHoraInputp.value;
													const valorPago = horasTrabalhadasInputp.value * valorHora;
													valorPagoInputp.value = valorPago.toFixed(2);

													});
													</script>

													<hr>
										<h4>Resultado</h4>

										<div class="row">


										<div class="col-md-3">
														<div class="form-group">
															<label>Quant. da prensagem</label>
															<input type="text" class="form-control" name="resulcinco" id="resulcinco" placeholder="00.0">
														</div>
													</div>
										
													<div class="col-md-3">						
														<div class="form-group"> 
															<label>Unidade de medida</label> 
															<select class="form-control" name="medidacinco" id="medidacinco" >
																<option value="Quilo">Kg</option>
																<option value="Litro">L</option>
															</select> 
														</div>						
														</div>

														<div class="col-md-3">
														<div class="form-group">
															<label>Perda Na prensagem</label>
															<input type="text" class="form-control" name="perdacinco" id="perdacinco" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label>Rendimento</label><!--perda/entrada da valor em %-->
															<input type="text" class="form-control" name="percecinco" id="percecinco" placeholder="">
														</div>
													</div>


													
													
										</div>	

											<script>
											const entradasp = document.getElementById('entracinco');
											const unidadeEntradasp = document.getElementById('uncinco');
											const higienizadasp = document.getElementById('resulcinco');
											const unidadeHigienizadap = document.getElementById('medidacinco');
											const perdasp = document.getElementById('perdacinco');
											const percentualsp = document.getElementById('percecinco');

											// adiciona um evento ao input de higienizada para atualizar os valores
											higienizadasp.addEventListener('input', () => {
											// converte as quantidades para números
											const entradaNum = parseFloat(entradasp.value);
											const higienizadaNum = parseFloat(higienizadasp.value);

											// calcula a perda e o percentual de perda
											const perdaNum = entradaNum - higienizadaNum;
											const percentualNum = (perdaNum / entradaNum) * 100;

											// atualiza os valores dos inputs
											perdasp.value = perdaNum.toFixed(2); // arredonda para 2 casas decimais
											percentualsp.value = percentualNum.toFixed(2) + '%'; // adiciona o símbolo de porcentagem
											});

											</script>



									<hr>
								<h4>armazenamento de Insumos</h4>
								<br>
										<div class="row">
											

											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Produto</label> 
													<input type="text" class="form-control" name="produtoum" id="produtoum"  placeholder="o.e breu,óleo copaíba.."> 
												</div>
											</div>

											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Insumos</label> 
													<input type="text" class="form-control" name="insumoum" id="insumoum" placeholder="saco,balde.."> 
												</div>
											</div>



											<div class="col-md-3">						
											<div class="form-group"> 
												<label>Unidade de medida</label> 
												<select class="form-control" name="medidauma" id="medidauma" >
													<option value="Quilo">Kg</option>
													<option value="Litro">L</option>
													<option value="Litro">UN</option>
												</select> 
											</div>						
											</div>

											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Data da embalagem</label> 
													<input type="date" class="form-control" name="data_emum" id="data_emum"> 
												</div>						
											</div>	





										</div>


										<hr>		
										<div class="row">
											

											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Produto</label> 
													<input type="text" class="form-control" name="produtodois" id="produtodois" placeholder="o.e breu,óleo copaíba.." > 
												</div>
											</div>

											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Insumos</label> 
													<input type="text" class="form-control" name="insumodois" id="insumodois"placeholder="saco,balde.." > 
												</div>
											</div>



											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Unidade de medida</label> 
													<select class="form-control" name="medidasegun" id="medidasegun" >
														<option value="Quilo">Kg</option>
														<option value="Litro">L</option>
														<option value="Litro">UN</option>
													</select> 
												</div>						
												</div>

											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Data da embalagem</label> 
													<input type="date" class="form-control" name="data_emdois" id="data_emdois"> 
												</div>						
											</div>	





										</div>



								<hr>
								<div align="right">
								<button type="button" id="voltar_aba4" name="voltar_aba4" class="btn btn-secondary">Voltar</button>
								<button type="button" id="seguinte_aba6" name="seguinte_aba6" class="btn btn-primary">Seguinte</button>
							
								
								</div>
							</div><!--fim e começo prensagem-->


										<!--//////filtragem///-->

										<div class="tab-pane fade" id="filtragem" role="tabpanel" aria-labelledby="filtragem-tab"><!--fim e começo filtragen-->
											<br>
											<h4>Filtragem/Embalagem/Armazenamento</h4>
											<hr>
																	<h4>Entrada</h4>
																	<div class="row">
																		<div class="col-md-3">
																		<div class="form-group"> 
																			<label>Quantidade de entrada</label> 
																			<input type="text" class="form-control" name="entraseis" id="entraseis" placeholder="00.0" > 
																		</div>
																	</div>

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Unidade de medida</label> 
																	<select class="form-control" name="unseis" id="unseis" >
																		<option value="Quilo">Kg</option>
																		<option value="Litro">L</option>
																	</select> 
																</div>						
															</div>

													</div>


											<hr>
											<h4>Maquina</h4>
											<br>
											<div class="row">

															

															<div class="col-md-3">
																<div class="form-group"> 
																	<label>Nome da maquina</label> 
																	<input type="text" class="form-control" name="maqseis" id="maqseis" placeholder="" > 
																</div>
																</div>


															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Fonte de energia</label> 
																	<select class="form-control" name="maqfonteseis" id="maqfonteseis">
																	<option value="Motor Estacionário">Motor Estacionário</option>
																	<option value="Rede Elétrica">Rede Elétrica</option>
																		
																	</select> 
																</div>						
															</div>	

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Consumo de energia</label> 
																	<select class="form-control" name="maqconsumoseis" id="maqconsumoseis">
																		<option value="Diesel">Diesel</option>
																		<option value="Gasolina">Gasolina</option>
																		<option value="Energia Solar">Energia Solar</option>
																		<option value="Energia Solar">kW</option>
																		
																				
																	</select> 
																</div>						
															</div>




													</div>



														<div class="row">

														<hr>
														<h4>Ferramenta</h4>
														<br>

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Nome da ferramenta</label> 
																	<input type="text" class="form-control" name="ferseis" id="ferseis" > 
																</div>						
															</div>		

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Fonte de energia</label> 
																	<select class="form-control" name="ferfonteseis" id="ferfonteseis">
																	<option value="Motor Estacionário">Motor Estacionário</option>
																	<option value="Rede Elétrica">Rede Elétrica</option>
																		
																	</select> 
																</div>						
															</div>	

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Consumo De energia</label> 
																	<select class="form-control" name="ferconsumoseis" id="ferconsumoseis">
																		<option value="Diesel">Diesel</option>
																		<option value="Gasolina">Gasolina</option>
																		<option value="Energia Solar">Energia Solar</option>
																		<option value="Energia Solar">kW</option>
																				
																	</select> 
																</div>						
															</div>


															

														</div>					




															<div class="row">
															<hr>
															<h4>Maquinario/depreciação</h4>
															<br>



															<div class="col-md-3">						
															<div class="form-group"> 
																<label>Data de aquisição</label> 
																<input type="date" class="form-control" name="data_aquiseis" id="data_aquiseis" value="<?php echo date('Y-m-d') ?>"> 
															</div>						
															</div>	



															<div class="col-md-3">
															<div class="form-group">
															<label>Valor custo</label>
															<input type="text" class="form-control" name="custoseis" id="custoseis" placeholder="">
															</div>
															</div>

															<div class="col-md-3">
																<div class="form-group">
																	<label>Valor residual</label>
																	<input type="text" class="form-control" name="residualseis" id="residualseis" placeholder="">
																</div>
															</div>						



																		<div class="col-md-3">
															<div class="form-group">
																<label>Vida útil (anos)</label>
																<input type="text" class="form-control" name="anosseis" id="anosseis" placeholder="">
															</div>
															</div>
															<div class="col-md-3">
															<div class="form-group">
																<label>Depreciação anual</label>
																<input type="text" class="form-control" name="depreciacaoseis" id="depreciacaoseis" placeholder="">
															</div>
															</div>
															<div class="col-md-3">
															<div class="form-group">
																<label>Depreciação por dia</label>
																<input type="text" class="form-control" name="diaseis" id="diaseis" placeholder="">
															</div>
															</div>

															<div class="col-md-3">
																<div class="form-group">
																	<label>dias utilizados</label><!--depreciaçao por dia*dias utlizados-->
																	<input type="text" class="form-control" name="utilseis" id="utilseis" placeholder="00.0" >
																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label>valor total da depreciação</label>
																	<input type="text" class="form-control" name="vdseis" id="vdseis" placeholder="" >
																</div>
															</div>		


															</div>	
																														<script>
																// Adicionando evento de change nos inputs
																document.getElementById("custoseis").addEventListener("change", calcularDepreciacao);
																document.getElementById("residualseis").addEventListener("change", calcularDepreciacao);
																document.getElementById("anosseis").addEventListener("change", calcularDepreciacao);

																function calcularDepreciacao() {
																	var valorpg = document.getElementById("custoseis").value;
																	var residual = document.getElementById("residualseis").value;
																	var vida = document.getElementById("anosseis").value;
																	var depreciacaoAnual = (valorpg - residual) / vida;
																	var depreciacaoDia = depreciacaoAnual / 365.25;
																	document.getElementById("depreciacaoseis").value = depreciacaoAnual;
																	document.getElementById("diaseis").value = depreciacaoDia;
																	document.getElementById("diaseis").value = depreciacaoDia.toFixed(2);

																}

	
															</script>
															<script>
																// Captura os inputs de depreciação por dia, dias utilizados e valor total da depreciação
															const depreciacaoDiaf = document.getElementById("diaseis");
															const diasUtilizadosf = document.getElementById("utilseis");
															const valorTotalDepreciacaof = document.getElementById("vdseis");

															// Adiciona um evento para detectar quando o usuário digita no input de dias utilizados
															diasUtilizadosf.addEventListener("input", function() {
															// Converte os valores dos inputs para números
															const valorDepreciacaoDia = Number(depreciacaoDiaf.value);
															const valorDiasUtilizados = Number(diasUtilizadosf.value);
															
															// Calcula o valor total da depreciação e exibe no input correspondente
															const valorTotal = valorDepreciacaoDia * valorDiasUtilizados;
															valorTotalDepreciacaof.value = valorTotal;
															});


															</script>



														<hr>
															<h4>Mão de obra</h4>
															<br>	





															<div class="row">

															<div class="col-md-3">
															<div class="form-group">
															<label>custo de mão de obra</label>
															<input type="text" class="form-control" name="obraseis" id="obraseis" placeholder="">
															</div>
															</div>

															<div class="col-md-3">
															<div class="form-group">
															<label>Valor hora</label>
															<input type="text" class="form-control" name="horaseis" id="horaseis" placeholder="">
															</div>
															</div>

															<div class="col-md-3">
																	<div class="form-group">
																		<label>Horas trabalhadas</label>
																		<input type="text" class="form-control" name="trabalhoseis" id="trabalhoseis" placeholder="00.0">
																	</div>
																</div>


															<div class="col-md-3">
															<div class="form-group">
															<label>Valor pago</label>
															<input type="text" class="form-control" name="pagoseis" id="pagoseis" placeholder="">
															</div>
															</div>

															</div>

													<script>
															// Seleciona os inputs pelos seus IDs
													const custoMaoDeObraInputf = document.querySelector("#obraseis");
													const valorHoraInputf = document.querySelector("#horaseis");
													const horasTrabalhadasInputf = document.querySelector("#trabalhoseis");
													const valorPagoInputf = document.querySelector("#pagoseis");

													// Adiciona um listener para quando o usuário digitar um valor no campo "custo de mão de obra"
													custoMaoDeObraInputf.addEventListener("input", () => {
													// Divide o valor digitado por 8 e exibe o resultado no campo "Valor Hora"
													const valorHora = custoMaoDeObraInputf.value / 8;
													valorHoraInputf.value = valorHora.toFixed(2);
													});

													// Adiciona um listener para quando o usuário digitar um valor no campo "Horas Trabalhadas"
													horasTrabalhadasInputf.addEventListener("input", () => {
													// Multiplica o valor digitado pelo valor da hora e exibe o resultado no campo "Valor Pago"
													const valorHora = valorHoraInputf.value;
													const valorPago = horasTrabalhadasInputf.value * valorHora;
													valorPagoInputf.value = valorPago.toFixed(2);

													});

													</script>

													<hr>
										<h4>Resultado</h4>

										<div class="row">


										<div class="col-md-3">
														<div class="form-group">
															<label>Quantidade da filtragem</label>
															<input type="text" class="form-control" name="resulseis" id="resulseis" placeholder="00.0">
														</div>
													</div>
										
													<div class="col-md-3">						
														<div class="form-group"> 
															<label>Unidade de medida</label> 
															<select class="form-control" name="medidaseis" id="medidaseis" >
																<option value="Quilo">Kg</option>
																<option value="Litro">L</option>
															</select> 
														</div>						
														</div>

														<div class="col-md-3">
														<div class="form-group">
															<label>Perda na filtragem</label>
															<input type="text" class="form-control" name="perdaseis" id="perdaseis" placeholder="">
														</div>
													</div>

													<div class="col-md-3">
														<div class="form-group">
															<label>Rendimento</label><!--perda/entrada da valor em %-->
															<input type="text" class="form-control" name="perceseis" id="perceseis" placeholder="">
														</div>
													</div>


													
													
										</div>	

											<script>
											const entradasf = document.getElementById('entraseis');
											const unidadeEntradasf = document.getElementById('unseis');
											const higienizadasf = document.getElementById('resulseis');
											const unidadeHigienizadaf = document.getElementById('medidaseis');
											const perdasf = document.getElementById('perdaseis');
											const percentualsf = document.getElementById('perceseis');

											// adiciona um evento ao input de higienizada para atualizar os valores
											higienizadasf.addEventListener('input', () => {
											// converte as quantidades para números
											const entradaNum = parseFloat(entradasf.value);
											const higienizadaNum = parseFloat(higienizadasf.value);

											// calcula a perda e o percentual de perda
											const perdaNum = entradaNum - higienizadaNum;
											const percentualNum = (perdaNum / entradaNum) * 100;

											// atualiza os valores dos inputs
											perdasf.value = perdaNum.toFixed(2); // arredonda para 2 casas decimais
											percentualsf.value = percentualNum.toFixed(2) + '%'; // adiciona o símbolo de porcentagem
											});

											</script>


															<hr>
															<br>
															<h4>Embalagem/Envase</h4>
															<br>
														
															
													
										<div class="row">
											

											<div class="col-md-3">			
												<div class="form-group"> 
													<label>Produto</label> 
													<input type="text" class="form-control" name="produtotres" id="produtotres" placeholder="o.e breu,óleo copaíba.." > 
												</div>
											</div>

											<div class="col-md-2">
															<div class="form-group">
																<label>Quantidade </label>
																<input type="text" class="form-control" name="armaztres" id="armaztres" placeholder="00.0">
															</div>
													</div>	



											<div class="col-md-3">						
											<div class="form-group"> 
												<label>Unidade de medida</label> 
												<select class="form-control" name="medidaterc" id="medidaterc" >
													<option value="Quilo">Kg</option>
													<option value="Litro">L</option>
													<option value="Litro">UN</option>
												</select> 
											</div>						
											</div>

											<div class="col-md-3">						
												<div class="form-group"> 
													<label>Data da embalagem</label> 
													<input type="date" class="form-control" name="data_emtres" id="data_emtres"> 
												</div>						
											</div>	

										</div>
										<hr>
										<br>
										<h4>
											Armazenamento
										</h4>
										<div class="row">
										<div class="col-md-3">
															<div class="form-group">
																<label>Quantidade armazenada</label>
																<input type="text" class="form-control" name="armazquatro" id="armazquatro" placeholder="00.0">
															</div>
													</div>	

													<div class="col-md-3">
														<div class="form-group">
																<label>Unidade de medida</label>
															<select class="form-control" name="medidaquart" id="medidaquart" >
																<option value="Quilo">Kg</option>
																<option value="Litro">L</option>
																<option value="Litro">UN</option>
															</select> 
														</div>
													</div>	



													<div class="col-md-3">
															<div class="form-group">
																<label>Forma armazenamento</label>
																<input type="text" class="form-control" name="formaquatro" id="formaquatro" placeholder="saco,balde..">
															</div>
													</div>	

										</div>



								<hr>
								<div align="right">
								<button type="button" id="voltar_aba5" name="voltar_aba5" class="btn btn-secondary">Voltar</button>
								<button type="button" id="seguinte_aba7" name="seguinte_aba7" class="btn btn-primary">Seguinte</button>
								</div>
							</div><!--fim e começo filtragen-->


									<!--//////destilacao///-->

							<div class="tab-pane fade" id="destilacao" role="tabpanel" aria-labelledby="destilacao-tab"><!--começo e fim destilação-->	
											<br>
											<h4>Destilação</h4>
											<hr>
											<h4>Entrada</h4>
																	<div class="row">
																		<div class="col-md-3">
																		<div class="form-group"> 
																			<label>Quantidade de entrada</label> 
																			<input type="text" class="form-control" name="entrasete" id="entrasete" placeholder="00.0" > 
																		</div>
																	</div>

															<div class="col-md-3">						
																<div class="form-group"> 
																	<label>Unidade de medida</label> 
																	<select class="form-control" name="unsete" id="unsete" >
																		<option value="Quilo">Kg</option>
																		<option value="Litro">L</option>
																	</select> 
																</div>						
															</div>

													</div>


											<hr>
											<h4>Maquina</h4>
											<br>
											<div class="row">

											

												<div class="col-md-3">
													<div class="form-group"> 
														<label>Nome da maquina</label> 
														<input type="text" class="form-control" name="maqsete" id="maqsete" placeholder="" > 
													</div>
													</div>


												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Fonte de energia</label> 
														<select class="form-control" name="maqfontesete" id="maqfontesete" >
														<option value="Motor Estacionário">Motor Estacionário</option>
														<option value="Rede Elétrica">Rede Elétrica</option>
															
														</select> 
													</div>						
												</div>	

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Consumo De energia</label> 
														<select class="form-control" name="maqconsumosete" id="maqconsumosete" >
															<option value="Diesel">Diesel</option>
															<option value="Gasolina">Gasolina</option>
															<option value="Energia Solar">Energia Solar</option>
															<option value="Energia Solar">kW</option>
																	
														</select> 
													</div>						
												</div>




												</div>



												<div class="row">

												<hr>
												<h4>Ferramenta</h4>
												<br>

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Nome da ferramenta</label> 
														<input type="text" class="form-control" name="fersete" id="fersete" > 
													</div>						
												</div>	

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Fonte de energia</label> 
														<select class="form-control" name="ferfontesete" id="ferfontesete" >
														<option value="Motor Estacionário">Motor Estacionário</option>
														<option value="Rede Elétrica">Rede Elétrica</option>
															
														</select> 
													</div>						
												</div>	

												<div class="col-md-3">						
													<div class="form-group"> 
														<label>Consumo de energia</label> 
														<select class="form-control" name="ferconsumosete" id="ferconsumosete" >
															<option value="Diesel">Diesel</option>
															<option value="Gasolina">Gasolina</option>
															<option value="Energia Solar">Energia Solar</option>
															<option value="Energia Solar">kW</option>
																	
														</select> 
													</div>						
												</div>



												


												

												</div>					




												<div class="row">
												<hr>
												<h4>Maquinario/depreciação</h4>
												<br>


												<div class="col-md-3">						
														<div class="form-group"> 
															<label>Data de aquisição</label> 
															<input type="date" class="form-control" name="data_aquisete" id="data_aquisete"> 
														</div>						
													</div>	



												<div class="col-md-3">
													<div class="form-group">
														<label>Valor custo</label>
														<input type="text" class="form-control" name="custosete" id="custosete" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
														<div class="form-group">
															<label>Valor residual</label>
															<input type="text" class="form-control" name="residualsete" id="residualsete" placeholder="">
														</div>
													</div>						



																<div class="col-md-3">
													<div class="form-group">
														<label>Vida útil (anos)</label>
														<input type="text" class="form-control" name="anossete" id="anossete" placeholder="">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Depreciação anual</label>
														<input type="text" class="form-control" name="depreciacaosete" id="depreciacaosete" placeholder="">
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
														<label>Depreciação por dia</label>
														<input type="text" class="form-control" name="diasete" id="diasete" placeholder="">
													</div>
												</div>

												<div class="col-md-3">
																<div class="form-group">
																	<label>dias utilizados</label><!--depreciaçao por dia*dias utlizados-->
																	<input type="text" class="form-control" name="utilsete" id="utilsete" placeholder="00.0" >
																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label>valor total da depreciação</label>
																	<input type="text" class="form-control" name="vdsete" id="vdsete" placeholder="" >
																</div>
															</div>		




												</div>
																										<script>
															// Adicionando evento de change nos inputs
															document.getElementById("custosete").addEventListener("change", calcularDepreciacao);
															document.getElementById("residualsete").addEventListener("change", calcularDepreciacao);
															document.getElementById("anossete").addEventListener("change", calcularDepreciacao);

															function calcularDepreciacao() {
																var valorpg = document.getElementById("custosete").value;
																var residual = document.getElementById("residualsete").value;
																var vida = document.getElementById("anossete").value;
																var depreciacaoAnual = (valorpg - residual) / vida;
																var depreciacaoDia = depreciacaoAnual / 365.25;
																document.getElementById("depreciacaosete").value = depreciacaoAnual;
																document.getElementById("diasete").value = depreciacaoDia;
																document.getElementById("diasete").value = depreciacaoDia.toFixed(2);

															}

															
														</script>

														<script>
															// Captura os inputs de depreciação por dia, dias utilizados e valor total da depreciação
														const depreciacaoDiaff = document.getElementById("diasete");
														const diasUtilizadosff = document.getElementById("utilsete");
														const valorTotalDepreciacaoff = document.getElementById("vdsete");

														// Adiciona um evento para detectar quando o usuário digita no input de dias utilizados
														diasUtilizadosff.addEventListener("input", function() {
														// Converte os valores dos inputs para números
														const valorDepreciacaoDia = Number(depreciacaoDiaff.value);
														const valorDiasUtilizados = Number(diasUtilizadosff.value);
														
														// Calcula o valor total da depreciação e exibe no input correspondente
														const valorTotal = valorDepreciacaoDia * valorDiasUtilizados;
														valorTotalDepreciacaoff.value = valorTotal;
														});


														</script>



															<hr>
															<h4>Mão de obra</h4>
															<br>	

													<div class="row">

																<div class="col-md-3">
																	<div class="form-group">
																		<label>custo de mão de obra</label>
																		<input type="text" class="form-control" name="obrasete" id="obrasete" placeholder="">
																	</div>
																</div>

																<div class="col-md-3">
																	<div class="form-group">
																		<label>Valor hora</label>
																		<input type="text" class="form-control" name="horasete" id="horasete" placeholder="">
																	</div>
																</div>

																<div class="col-md-3">
																	<div class="form-group">
																		<label>Horas trabalhadas</label>
																		<input type="text" class="form-control" name="trabalhosete" id="trabalhosete" placeholder="">
																	</div>
																</div>


																<div class="col-md-3">
																	<div class="form-group">
																		<label>Valor pago</label>
																		<input type="text" class="form-control" name="pagosete" id="pagosete" placeholder="">
																	</div>
																</div>

													</div>

																										<script>
													// Seleciona os inputs pelos seus IDs
													const custoMaoDeObraInputff = document.querySelector("#obrasete");
													const valorHoraInputff = document.querySelector("#horasete");
													const horasTrabalhadasInputff = document.querySelector("#trabalhosete");
													const valorPagoInputff = document.querySelector("#pagosete");

													// Adiciona um listener para quando o usuário digitar um valor no campo "custo de mão de obra"
													custoMaoDeObraInputff.addEventListener("input", () => {
													// Divide o valor digitado por 8 e exibe o resultado no campo "Valor Hora"
													const valorHora = custoMaoDeObraInputff.value / 8;
													valorHoraInputff.value = valorHora.toFixed(2);
													});

													// Adiciona um listener para quando o usuário digitar um valor no campo "Horas Trabalhadas"
													horasTrabalhadasInputff.addEventListener("input", () => {
													// Multiplica o valor digitado pelo valor da hora e exibe o resultado no campo "Valor Pago"
													const valorHora = valorHoraInputff.value;
													const valorPago = horasTrabalhadasInputff.value * valorHora;
													valorPagoInputff.value = valorPago.toFixed(2);

													});


													</script>
										<hr>
										<h4>Resultado</h4>

										<div class="row">

										<div class="col-md-3">
														<div class="form-group">
															<label>Quantidade destilada</label>
															<input type="text" class="form-control" name="resulsete" id="resulsete" placeholder="">
														</div>
													</div>

												
													<div class="col-md-3">						
														<div class="form-group"> 
															<label>Unidade de medida</label> 
															<select class="form-control" name="medidasete" id="medidasete" >
																<option value="Quilo">Kg</option>
																<option value="Litro">L</option>
															</select> 
														</div>						
														</div>
														<div class="col-md-3">
														<div class="form-group">
															<label>Perda na destilação</label>
															<input type="text" class="form-control" name="perdasete" id="perdasete" placeholder="">
														</div>
													</div>

												<div class="col-md-3">
														<div class="form-group">
															<label>Rendimento</label><!--perda/entrada da valor em %-->
															<input type="text" class="form-control" name="percesete" id="percesete" placeholder="">
														</div>
													</div>

													
													
										</div>	
											<script>
												const entradasfd = document.getElementById('entrasete');
											const unidadeEntradasfd = document.getElementById('unsete');
											const higienizadasfd = document.getElementById('resulsete');
											const unidadeHigienizadafd = document.getElementById('medidasete');
											const perdasfd = document.getElementById('perdasete');
											const percentualsfd = document.getElementById('percesete');

											// adiciona um evento ao input de higienizada para atualizar os valores
											higienizadasfd.addEventListener('input', () => {
											// converte as quantidades para números
											const entradaNum = parseFloat(entradasfd.value);
											const higienizadaNum = parseFloat(higienizadasfd.value);

											// calcula a perda e o percentual de perda
											const perdaNum = entradaNum - higienizadaNum;
											const percentualNum = (perdaNum / entradaNum) * 100;

											// atualiza os valores dos inputs
											perdasfd.value = perdaNum.toFixed(2); // arredonda para 2 casas decimais
											percentualsfd.value = percentualNum.toFixed(2) + '%'; // adiciona o símbolo de porcentagem
											});

											</script>																				
																						
											<hr>
											<div align="right">
												<button type="button" id="voltar_aba6" name="voltar_aba6" class="btn btn-secondary">Voltar</button>
												<button type="button" id="seguinte_aba8" name="seguinte_aba8" class="btn btn-primary">Seguinte</button>
											</div>
							</div><!--começo e fim destilação-->
							
							<!--//////produto final///-->
								 
							<div class="tab-pane fade" id="final" role="tabpanel" aria-labelledby="final-tab"><!--começo e fim produto-->
								
							
									<br>
											<h4>Produto final</h4>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label>Nome produto</label>
													<input type="text" class="form-control" name="np" id="np" placeholder="">
												</div>
											</div>

											<div class="col-md-3">
												<div class="form-group">
													<label>Quantidade</label>
													<input type="text" class="form-control" name="qua" id="qua" placeholder="00.0">
												</div>
											</div>

											<div class="col-md-3">						
										<div class="form-group"> 
											<label>Unidade de medida</label> 
											<select class="form-control" name="umed" id="umed">
												<option value="Quilo">Kg</option>
												<option value="Litro">L</option>
											</select> 
										</div>						
										</div>

											

											

										</div>
							
										<hr>
											<div align="right">
												<button type="button" id="voltar_aba7" name="voltar_aba7" class="btn btn-secondary">Voltar</button>
												<button type="button" id="seguinte_aba9" name="seguinte_aba9" class="btn btn-primary">Seguinte</button>
											</div>
							
							</div><!--começo e fim produto-->

							<!--//////resultados///-->

							<div class="tab-pane fade" id="resultados" role="tabpanel" aria-labelledby="resultados-tab"><!--fim começo resultado-->
							<br>
													<h4>Resultados</h4>
									<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label>custo materia prima</label>
															<input type="text" class="form-control" name="totalmateria" id="totalmateria" placeholder="">
														</div>
													</div>


													<script>
													const vdInputll = document.getElementById('totalll');
													const totalDepreOutputlll = document.getElementById('totalmateria');

													// Adicionar um event listener para quando o usuário alterar algum input
													document.addEventListener('change', function () {
														const vdValuell = parseFloat(vdInputll.value) || 0;
														const totallValuell = vdValuell;

													// Exibir o resultado no output
													totalDepreOutputlll.value = totallValuell.toFixed(2);
													});

													</script>

											

											<div class="col-md-3">
												<div class="form-group">
													<label>Depreciação total</label>
													<input type="text" class="form-control" name="totaldepre" id="totaldepre" placeholder="">
												</div>
											</div>
											<script>
												// // Obter referências para os inputs e output
											const vdInput = document.getElementById('vd');
											const vddoisInput = document.getElementById('vddois');
											const vdtresInput = document.getElementById('vdtres');
											const vdquatroInput = document.getElementById('vdquatro');
											const vdcincoInput = document.getElementById('vdcinco');
											const vdseisInput = document.getElementById('vdseis');
											const vdseteInput = document.getElementById('vdsete');
											const totalDepreOutput = document.getElementById('totaldepre');

											// Adicionar um event listener para quando o usuário alterar algum input
											document.addEventListener('change', function () {
											// Obter os valores dos inputs e somá-los
											const vdValue = parseFloat(vdInput.value) || 0;
											const vddoisValue = parseFloat(vddoisInput.value) || 0;
											const vdtresValue = parseFloat(vdtresInput.value) || 0;
											const vdquatroValue = parseFloat(vdquatroInput.value) || 0;
											const vdcincoValue = parseFloat(vdcincoInput.value) || 0;
											const vdseisValue = parseFloat(vdseisInput.value) || 0;
											const vdseteValue = parseFloat(vdseteInput.value) || 0;
											const totallValue = vdValue + vddoisValue + vdtresValue + vdquatroValue + vdcincoValue + vdseisValue + vdseteValue;

											// Exibir o resultado no output
											totalDepreOutput.value = totallValue.toFixed(2);
											});



											</script>											

											<div class="col-md-3">
												<div class="form-group">
													<label>Redimento produtivo</label>
													<input type="text" class="form-control" name="totalrend" id="totalrend" placeholder="">
												</div>
											</div>

									

									</div>


									<script>
										
// Obter referências aos elementos HTML relevantes
const quantidadeInput = document.getElementById("quantidade");
const quaInput = document.getElementById("qua");
const totalrendInput = document.getElementById("totalrend");

// Função para calcular a porcentagem e atualizar o valor no input totalrend
function calcularPorcentagem() {
  // Obter os valores dos inputs e converter para números
  const quantidade = Number(quantidadeInput.value);
  const qua = Number(quaInput.value);

  // Calcular a porcentagem
  const porcentagem = (qua / quantidade) * 100;

  // Atualizar o valor no input totalrend
  totalrendInput.value = porcentagem + "%";
}

// Adicionar um ouvinte de eventos para quando o valor de qualquer input mudar
quantidadeInput.addEventListener("change", calcularPorcentagem);
quaInput.addEventListener("change", calcularPorcentagem);

								// Obter os valores de entrada
									//const quantidadee = document.getElementById("quantidade").value;
									//const quaeee = document.getElementById("qua").value;

									// Calcular a porcentagem
									//const totalrendddd = (quantidadee / quaeee) * 100;

									// Mostrar o resultado no input "totalrend"
									//document.getElementById("totalrend").value = totalrendddd + "%";
			
									</script>		


									<div class="row">
										<div class="col-md-3">
												<div class="form-group">
													<label>Custo total de mão de obra</label>
													<input type="text" class="form-control" name="totalobra" id="totalobra" placeholder="">
												</div>
											</div>

														<script>
															// // Obter referências para os inputs e output
														const pagoInput = document.getElementById('pago');
														const pagodoisInput = document.getElementById('pagodois');
														const pagotresInput = document.getElementById('pagotres');
														const pagoquatroInput = document.getElementById('pagoquatro');
														const pagocincoInput = document.getElementById('pagocinco');
														const pagoseisInput = document.getElementById('pagoseis');
														const pagoseteInput = document.getElementById('pagosete');
														const totalObraOutput = document.getElementById('totalobra');

														// Adicionar um event listener para quando o usuário alterar algum input
														document.addEventListener('change', function () {
														// Obter os valores dos inputs e somá-los
														const pagoValue = parseFloat(pagoInput.value) || 0;
														const pagodoisValue = parseFloat(pagodoisInput.value) || 0;
														const pagotresValue = parseFloat(pagotresInput.value) || 0;
														const pagoquatroValue = parseFloat(pagoquatroInput.value) || 0;
														const pagocincoValue = parseFloat(pagocincoInput.value) || 0;
														const pagoseisValue = parseFloat(pagoseisInput.value) || 0;
														const pagoseteValue = parseFloat(pagoseteInput.value) || 0;
														const totalValue = pagoValue + pagodoisValue + pagotresValue + pagoquatroValue + pagocincoValue + pagoseisValue + pagoseteValue;

														// Exibir o resultado no output
														totalObraOutput.value = totalValue.toFixed(2);
														});

														</script>											

											<div class="col-md-3">
												<div class="form-group">
													<label>Resultado da produção</label>
													<input type="text" class="form-control" name="totalproducao" id="totalproducao" placeholder="">
												</div>
											</div>

											<script>
													const vdInputlll = document.getElementById('qua');
													const totalDepreOutputllll = document.getElementById('totalproducao');

													 //Adicionar um event listener para quando o usuário alterar algum input
													document.addEventListener('change', function () {
														const vdValuelll = parseFloat(vdInputlll.value) || 0;
														const totallValuelll = vdValuelll;

													//Exibir o resultado no output
													totalDepreOutputllll.value = totallValuelll.toFixed(2);
													});

													</script>

												<!--custo / produção-->

											<div class="col-md-3">
												<div class="form-group">
													<label>Custo total</label>
													<input type="text" class="form-control" name="totalcusto" id="totalcusto" placeholder="">
												</div>
											</div>

											

									

<script>




// Captura os inputs
const inputTotalMateria = document.getElementById("totalmateria");
const inputTotalDepre = document.getElementById("totaldepre");
const inputTotalObra = document.getElementById("totalobra");
const inputTotalCusto = document.getElementById("totalcusto");

// Adicionar um event listener para quando o usuário alterar algum input
document.addEventListener('change', function () {
														// Obter os valores dos inputs e somá-los
    // Obtém os valores digitados nos inputs
    const totalMateria = parseFloat(inputTotalMateria.value) || 0;
    const totalDepre = parseFloat(inputTotalDepre.value) || 0;
    const totalObra = parseFloat(inputTotalObra.value) || 0;
    
    // Calcula a soma dos valores
    const totalCusto = totalMateria + totalDepre + totalObra;
    
    // Exibe o resultado no input "totalcusto"
    inputTotalCusto.value = totalCusto.toFixed(2);
  });


</script>

											<div class="col-md-3">
												<div class="form-group">
													<label>custo unitário</label>
													<input type="text" class="form-control" name="totalcustodois" id="totalcustodois" placeholder="">
												</div>
											</div>


									</div>


<script>


// Captura os inputs
const totalCusto = document.getElementById("totalcusto");
const totalProducao = document.getElementById("totalproducao");
const totalCustoDois = document.getElementById("totalcustodois");

// Adicionar um event listener para quando o usuário alterar algum input
document.addEventListener('change', function () {
														// Obter os valores dos inputs e somá-los
    // Obtém os valores digitados nos inputs
    const totalcusto = parseFloat(totalCusto.value) || 0;
    const totalproducao = parseFloat(totalProducao.value) || 0;
  
    
    // Calcula a soma dos valores
    const custoDois = totalcusto / totalproducao;
    
    // Exibe o resultado no input "totalcusto"
	totalCustoDois.value = custoDois.toFixed(2);
  });



</script>									
											
									<hr>
											<div align="right">
												<button type="button" id="voltar_aba8" name="voltar_aba8" class="btn btn-secondary">Voltar</button>
												<button type="submit" id="salvar" name="salvar" class="btn btn-primary">Salvar</button><!--enviar-->
												
											</div>				

							


							</div><!--fim começo resultado-->						





</div><!--fim nav-->



					

					<br>
					<input type="hidden" name="id" id="id"> 
					<small><div id="mensagem" align="center" class="mt-3"></div></small>


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
				<h4 class="modal-title" id=""><span id=""> </span> <small><span class="ml-4">(processo Óleo: <span id="materia_mostrar"> </span>) </span> </small></h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					
				<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Recepção </b></span><br></div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Matéria-prima </b></span><br>
						<div class="col-md-6">							
							<span><b>Data da Entrada: </b></span>
							<span id="data_entrada_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Matéria-prima: </b></span>
							<span id="materia_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Produtor/Extrativista: </b></span>
							<span id="produtor_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Local de Coleta: </b></span>
							<span id="local_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-4">							
							<span><b>Quantidade: </b></span>
							<span id="quantidade_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medida_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Valor pago: </b></span>
							<span id="totalll_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Maquinário/depreciação </b></span><br>
						<div class="col-md-6">							
							<span><b>Tipo de Máquina: </b></span>
							<span id="maq_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Data de Aquisição: </b></span>
							<span id="data_aquisicao_mostrar"></span>
						</div>
		
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					
						<div class="col-md-6">							
							<span><b>Valor de custo ($:) </b></span>
							<span id="custo_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor residual ($): </b></span>
							<span id="residual_mostrar"></span>							
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Vida útil (em anos): </b></span>
							<span id="anos_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Depreciação Anual ($): </b></span>
							<span id="depreciacao_mostrar"></span>							
						</div>	

						
					</div>	
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Depreciação por dia: </b></span>
							<span id="dia_mostrar"></span>
						</div>
						<div class="col-md-6">							
							<span><b>Dias utilizados: </b></span>
							<span id="util_mostrar"></span>
						</div>
						
					</div>	


					<div class="row" style="border-bottom: 1px solid #cac7c7;">	
					<div class="col-md-6">							
							<span><b>Valor total da depreciação: </b></span>
							<span id="vd_mostrar"></span>
						</div>
						</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Consumo de energia </b></span><br>
						<div class="col-md-6">							
							<span><b>Fonte de energia: </b></span>
							<span id="fonte_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Consumo de energia: </b></span>
							<span id="consumo_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Mão de obra </b></span><br>
						<div class="col-md-6">							
							<span><b>Custo de Mão de Obra: </b></span>
							<span id="obra_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor hora: </b></span>
							<span id="hora_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Horas Trabalhadas: </b></span>
							<span id="trabalho_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor pago: </b></span>
							<span id="pago_mostrar"></span>
						</div>
					</div><br>

  					<!--Higienização e Seleção//-->

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Higienização e Seleção </b></span><br></div>
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Entrada </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade da entrada: </b></span>
							<span id="entradois_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="undois_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Máquina </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome da Máquina: </b></span>
							<span id="maqdois_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="maqfontedois_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="maqconsumodois_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Ferramenta </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome de Ferramenta: </b></span>
							<span id="ferdois_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="ferfontedois_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="ferconsumodois_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Maquinário/depreciação </b></span><br>

						<div class="col-md-6">							
							<span><b>Data de Aquisição: </b></span>
							<span id="data_aquidois_mostrar"></span>
						</div>
		
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					
						<div class="col-md-6">							
							<span><b>Valor de custo ($:) </b></span>
							<span id="custodois_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor residual ($): </b></span>
							<span id="residualdois_mostrar"></span>							
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Vida útil (em anos): </b></span>
							<span id="anosdois_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Depreciação Anual ($): </b></span>
							<span id="depreciacaodois_mostrar"></span>							
						</div>	

						
					</div>	
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Depreciação por dia: </b></span>
							<span id="diadois_mostrar"></span>
						</div>
						<div class="col-md-6">							
							<span><b>Dias utilizados: </b></span>
							<span id="utildois_mostrar"></span>
						</div>
						
					</div>	

					<div class="row" style="border-bottom: 1px solid #cac7c7;">	
					<div class="col-md-6">							
							<span><b>Valor total da depreciação: </b></span>
							<span id="vddois_mostrar"></span>
						</div>
						</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Mão de obra </b></span><br>
						<div class="col-md-6">							
							<span><b>Custo de Mão de Obra: </b></span>
							<span id="obradois_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor hora: </b></span>
							<span id="horadois_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Horas Trabalhadas: </b></span>
							<span id="trabalho_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor pago: </b></span>
							<span id="pagodois_mostrar"></span>
						</div>

						<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Resultado </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade Higienizada: </b></span>
							<span id="resuldois_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medidadois_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Perda Na Higienização: </b></span>
							<span id="perdadois_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Rendimento: </b></span>
							<span id="percedois_mostrar"></span>
						</div>


						<!--Secagem e Refrigeração//-->

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Secagem e Refrigeração </b></span><br></div>
  					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Entrada </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade da entrada: </b></span>
							<span id="entratres_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="untres_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Máquina </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome da Máquina: </b></span>
							<span id="maqtres_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="maqfontetres_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="maqconsumotres_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Ferramenta </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome de Ferramenta: </b></span>
							<span id="fertres_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="ferfontetres_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="ferconsumotres_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Maquinário/depreciação </b></span><br>

						<div class="col-md-6">							
							<span><b>Data de Aquisição: </b></span>
							<span id="data_aquitres_mostrar"></span>
						</div>
		
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					
						<div class="col-md-6">							
							<span><b>Valor de custo ($:) </b></span>
							<span id="custotres_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor residual ($): </b></span>
							<span id="residualtres_mostrar"></span>							
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Vida útil (em anos): </b></span>
							<span id="anostres_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Depreciação Anual ($): </b></span>
							<span id="depreciacaotres_mostrar"></span>							
						</div>	

						
					</div>	
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Depreciação por dia: </b></span>
							<span id="diatres_mostrar"></span>
						</div>
						<div class="col-md-6">							
							<span><b>Dias utilizados: </b></span>
							<span id="utiltres_mostrar"></span>
						</div>
						
					</div>	

					<div class="row" style="border-bottom: 1px solid #cac7c7;">	
					<div class="col-md-6">							
							<span><b>Valor total da depreciação: </b></span>
							<span id="vdtres_mostrar"></span>
						</div>
						</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Mão de obra </b></span><br>
						<div class="col-md-6">							
							<span><b>Custo de Mão de Obra: </b></span>
							<span id="obratres_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor hora: </b></span>
							<span id="horatres_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Horas Trabalhadas: </b></span>
							<span id="trabalhotres_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor pago: </b></span>
							<span id="pagotres_mostrar"></span>
						</div>

						<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Resultado </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade Higienizada: </b></span>
							<span id="resultres_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medidatres_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Perda Na Higienização: </b></span>
							<span id="perdatres_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Rendimento: </b></span>
							<span id="percetres_mostrar"></span>
						</div>


						<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Refrigeração </b></span><br>
						<div class="col-md-6">							
							<span><b>Data Do armazenamento: </b></span>
							<span id="data_arm_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Quantidade Armazenada: </b></span>
							<span id="armazum_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medum_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Forma Armazenamento: </b></span>
							<span id="formaum_mostrar"></span>
						</div>

						<!--Despolpa//-->

						<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Despolpa </b></span><br></div>
  					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Entrada </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade da entrada: </b></span>
							<span id="entraquatro_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="unquatro_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Máquina </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome da Máquina: </b></span>
							<span id="maqquatro_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="maqfontequatro_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="maqconsumoquatro_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Ferramenta </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome de Ferramenta: </b></span>
							<span id="ferquatro_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="ferfontequatro_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="ferconsumoquatro_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Maquinário/depreciação </b></span><br>

						<div class="col-md-6">							
							<span><b>Data de Aquisição: </b></span>
							<span id="data_aquiquatro_mostrar"></span>
						</div>
		
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					
						<div class="col-md-6">							
							<span><b>Valor de custo ($:) </b></span>
							<span id="custoquatro_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor residual ($): </b></span>
							<span id="residualquatro_mostrar"></span>							
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Vida útil (em anos): </b></span>
							<span id="anosquatro_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Depreciação Anual ($): </b></span>
							<span id="depreciacaoquatro_mostrar"></span>							
						</div>	

						
					</div>	
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Depreciação por dia: </b></span>
							<span id="diaquatro_mostrar"></span>
						</div>
						<div class="col-md-6">							
							<span><b>Dias utilizados: </b></span>
							<span id="utilquatro_mostrar"></span>
						</div>
						
					</div>	

					<div class="row" style="border-bottom: 1px solid #cac7c7;">	
					<div class="col-md-6">							
							<span><b>Valor total da depreciação: </b></span>
							<span id="vdquatro_mostrar"></span>
						</div>
						</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Mão de obra </b></span><br>
						<div class="col-md-6">							
							<span><b>Custo de Mão de Obra: </b></span>
							<span id="obraquatro_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor hora: </b></span>
							<span id="horaquatro_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Horas Trabalhadas: </b></span>
							<span id="trabalhoquatro_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor pago: </b></span>
							<span id="pagoquatro_mostrar"></span>
						</div>

						<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Resultado </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade Higienizada: </b></span>
							<span id="resulquatro_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medidaquatro_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Perda Na Higienização: </b></span>
							<span id="perdaquatro_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Rendimento: </b></span>
							<span id="percequatro_mostrar"></span>
						</div>


  						<!--Prensagem//-->

						  <div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Prensagem </b></span><br></div>
  					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Entrada </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade da entrada: </b></span>
							<span id="entracinco_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="uncinco_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Máquina </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome da Máquina: </b></span>
							<span id="maqcinco_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="maqfontecinco_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="maqconsumocinco_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Ferramenta </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome de Ferramenta: </b></span>
							<span id="ferquatro_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="fercinco_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="ferconsumocinco_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Maquinário/depreciação </b></span><br>

						<div class="col-md-6">							
							<span><b>Data de Aquisição: </b></span>
							<span id="data_aquicinco_mostrar"></span>
						</div>
		
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					
						<div class="col-md-6">							
							<span><b>Valor de custo ($:) </b></span>
							<span id="custocinco_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor residual ($): </b></span>
							<span id="residualcinco_mostrar"></span>							
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Vida útil (em anos): </b></span>
							<span id="anoscinco_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Depreciação Anual ($): </b></span>
							<span id="depreciacaocinco_mostrar"></span>							
						</div>	

						
					</div>	
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Depreciação por dia: </b></span>
							<span id="diacinco_mostrar"></span>
						</div>
						<div class="col-md-6">							
							<span><b>Dias utilizados: </b></span>
							<span id="utilcinco_mostrar"></span>
						</div>
						
					</div>	

					<div class="row" style="border-bottom: 1px solid #cac7c7;">	
					<div class="col-md-6">							
							<span><b>Valor total da depreciação: </b></span>
							<span id="vdcinco_mostrar"></span>
						</div>
						</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Mão de obra </b></span><br>
						<div class="col-md-6">							
							<span><b>Custo de Mão de Obra: </b></span>
							<span id="obracinco_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor hora: </b></span>
							<span id="horacinco_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Horas Trabalhadas: </b></span>
							<span id="trabalhocinco_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor pago: </b></span>
							<span id="pagocinco_mostrar"></span>
						</div>

						<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Resultado </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade Higienizada: </b></span>
							<span id="resulcinco_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medidacinco_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Perda Na Higienização: </b></span>
							<span id="perdacinco_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Rendimento: </b></span>
							<span id="percecinco_mostrar"></span>
						</div>
					</div>

						<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>armazenamento de Insumos </b></span><br>
						<div class="col-md-6">							
							<span><b>Produto: </b></span>
							<span id="produtoum_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Insumos: </b></span>
							<span id="insumoum_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medidauma_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Data Da Embalagem: </b></span>
							<span id="data_emum_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Produto: </b></span>
							<span id="produtodois_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Insumos: </b></span>
							<span id="insumodois_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medidasegun_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Data Da Embalagem: </b></span>
							<span id="data_emdois_mostrar"></span>
						</div>
					</div><br>

					

  						<!--Filtragem/Embalagem/Armazenamento//-->

						  <div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Filtragem/Embalagem/Armazenamento </b></span><br></div>
  					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Entrada </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade da entrada: </b></span>
							<span id="entraseis_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="unseis_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Máquina </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome da Máquina: </b></span>
							<span id="maqseis_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="maqfonteseis_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="maqconsumoseis_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Ferramenta </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome de Ferramenta: </b></span>
							<span id="ferseis_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="ferfonteseis_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="ferconsumoseis_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Maquinário/depreciação </b></span><br>

						<div class="col-md-6">							
							<span><b>Data de Aquisição: </b></span>
							<span id="data_aquiseis_mostrar"></span>
						</div>
		
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					
						<div class="col-md-6">							
							<span><b>Valor de custo ($:) </b></span>
							<span id="custoseis_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor residual ($): </b></span>
							<span id="residualseis_mostrar"></span>							
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Vida útil (em anos): </b></span>
							<span id="anosseis_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Depreciação Anual ($): </b></span>
							<span id="depreciacaoseis_mostrar"></span>							
						</div>	

						
					</div>	
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Depreciação por dia: </b></span>
							<span id="diaseis_mostrar"></span>
						</div>
						<div class="col-md-6">							
							<span><b>Dias utilizados: </b></span>
							<span id="utilseis_mostrar"></span>
						</div>
						
					</div>	

					<div class="row" style="border-bottom: 1px solid #cac7c7;">	
					<div class="col-md-6">							
							<span><b>Valor total da depreciação: </b></span>
							<span id="vdseis_mostrar"></span>
						</div>
						</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Mão de obra </b></span><br>
						<div class="col-md-6">							
							<span><b>Custo de Mão de Obra: </b></span>
							<span id="obraseis_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor hora: </b></span>
							<span id="horaseis_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Horas Trabalhadas: </b></span>
							<span id="trabalhoseis_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor pago: </b></span>
							<span id="pagoseis_mostrar"></span>
						</div>

						<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Resultado </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade Higienizada: </b></span>
							<span id="resulseis_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medidaseis_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Perda Na Higienização: </b></span>
							<span id="perdaseis_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Rendimento: </b></span>
							<span id="perceseis_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Embalagem/Envase </b></span><br>
						<div class="col-md-6">							
							<span><b>Produto: </b></span>
							<span id="produtotres_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Quantidade: </b></span>
							<span id="armaztres_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medidatres_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Data da Embalagem: </b></span>
							<span id="data_emtres_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Armazenamento </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade Armazenada: </b></span>
							<span id="armazquatro_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de medida: </b></span>
							<span id="medidaquart_mostrar"></span>
						</div>

						<div class="col-md-6">							
							<span><b>Forma Armazenamento: </b></span>
							<span id="formaquatro_mostrar"></span>
						</div>
					</div><br>

					
  						<!--Destilação//-->

						  <div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Destilação </b></span><br></div>
  					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Entrada </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade da entrada: </b></span>
							<span id="entrasete_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="unsete_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Máquina </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome da Máquina: </b></span>
							<span id="maqsete_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="maqfontesete_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="maqconsumosete_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Ferramenta </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome de Ferramenta: </b></span>
							<span id="fersete_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Fonte de Energia: </b></span>
							<span id="ferfontesete_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Consumo De Enérgia: </b></span>
							<span id="ferconsumosete_mostrar"></span>
						</div>
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Maquinário/depreciação </b></span><br>

						<div class="col-md-6">							
							<span><b>Data de Aquisição: </b></span>
							<span id="data_aquisete_mostrar"></span>
						</div>
		
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					
						<div class="col-md-6">							
							<span><b>Valor de custo ($:) </b></span>
							<span id="custosete_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor residual ($): </b></span>
							<span id="residualsete_mostrar"></span>							
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Vida útil (em anos): </b></span>
							<span id="anossete_mostrar"></span>							
						</div>

						<div class="col-md-6">							
							<span><b>Depreciação Anual ($): </b></span>
							<span id="depreciacaosete_mostrar"></span>							
						</div>	

						
					</div>	
					
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						
						<div class="col-md-6">							
							<span><b>Depreciação por dia: </b></span>
							<span id="diasete_mostrar"></span>
						</div>
						<div class="col-md-6">							
							<span><b>Dias utilizados: </b></span>
							<span id="utilsete_mostrar"></span>
						</div>
						
					</div>	

					<div class="row" style="border-bottom: 1px solid #cac7c7;">	
					<div class="col-md-6">							
							<span><b>Valor total da depreciação: </b></span>
							<span id="vdsete_mostrar"></span>
						</div>
						</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Mão de obra </b></span><br>
						<div class="col-md-6">							
							<span><b>Custo de Mão de Obra: </b></span>
							<span id="obrasete_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor hora: </b></span>
							<span id="horasete_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Horas Trabalhadas: </b></span>
							<span id="trabalhosete_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Valor pago: </b></span>
							<span id="pagosete_mostrar"></span>
						</div>

						<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Resultado </b></span><br>
						<div class="col-md-6">							
							<span><b>Quantidade Higienizada: </b></span>
							<span id="resulsete_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Unidade de Medida: </b></span>
							<span id="medidasete_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Perda Na Higienização: </b></span>
							<span id="perdasete_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Rendimento: </b></span>
							<span id="percesete_mostrar"></span>
						</div>
					</div><br>

  						<!--produto final-->
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>Produto final </b></span><br>
						<div class="col-md-4">							
							<span><b>Nome produto: </b></span>
							<span id="np_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Quantidade: </b></span>
							<span id="qua_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>Unidade de Medida: </b></span>
							<span id="umed_mostrar"></span>							
						</div>
						
					</div>

					<!--resultados-->
					<div class="row" style="border-bottom: 1px solid #cac7c7;">
					<span><b>resultados </b></span><br>
						<div class="col-md-4">							
							<span><b>custo materia prima: </b></span>
							<span id="totalmateria_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>depreciação total: </b></span>
							<span id="totaldepre_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>redimento produtivo: </b></span>
							<span id="totalrend_mostrar"></span>							
						</div>
						
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
		
						<div class="col-md-4">							
							<span><b>custo total de mão de obra: </b></span>
							<span id="totalobra_mostrar"></span>							
						</div>
						<div class="col-md-4">							
							<span><b>Resultado da produção: </b></span>
							<span id="totalproducao_mostrar"></span>
						</div>
						<div class="col-md-4">							
							<span><b>custo total: </b></span>
							<span id="totalcusto_mostrar"></span>							
						</div>
						
					</div>

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
		
						<div class="col-md-4">							
							<span><b>custo unitario: </b></span>
							<span id="totalcustodois_mostrar"></span>							
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

<script>
	$(document).ready(function() {
  // Ao clicar no botão "Seguinte" da primeira aba, vá para a próxima aba
  $('#seguinte_aba2').click(function() {
    $('#myTab a[href="#higienizacao"]').tab('show');
  });

  // Ao clicar no botão "Seguinte" da segunda aba, vá para a próxima aba
  $('#seguinte_aba3').click(function() {
    $('#myTab a[href="#secagem"]').tab('show');
  });

  // Ao clicar no botão "Seguinte" da terceira aba, vá para a próxima aba
  $('#seguinte_aba4').click(function() {
    $('#myTab a[href="#despolpa"]').tab('show');
  });

  $('#seguinte_aba5').click(function() {
    $('#myTab a[href="#presagem"]').tab('show');
  });

  $('#seguinte_aba6').click(function() {
    $('#myTab a[href="#filtragem"]').tab('show');
  });

  $('#seguinte_aba7').click(function() {
    $('#myTab a[href="#destilacao"]').tab('show');
  });

  $('#seguinte_aba8').click(function() {
    $('#myTab a[href="#final"]').tab('show');
  });

  $('#seguinte_aba9').click(function() {
    $('#myTab a[href="#resultados"]').tab('show');
  });

///////////////////////////////////////
  // Ao clicar no botão "Anterior" para primeira aba, volte para a aba anterior
  $('#voltar_aba1').click(function() {
    $('#myTab a[href="#recepcion"]').tab('show');
  });
  // Ao clicar no botão "Anterior" da segunda aba, volte para a aba anterior
  $('#voltar_aba2').click(function() {
    $('#myTab a[href="#higienizacao"]').tab('show');
  });

  // Ao clicar no botão "Anterior" da segunda aba, volte para a aba anterior
  $('#voltar_aba3').click(function() {
    $('#myTab a[href="#secagem"]').tab('show');
  });

  $('#voltar_aba4').click(function() {
    $('#myTab a[href="#despolpa"]').tab('show');
  });

  $('#voltar_aba5').click(function() {
    $('#myTab a[href="#presagem"]').tab('show');
  });

  $('#voltar_aba6').click(function() {
    $('#myTab a[href="#filtragem"]').tab('show');
  });

  $('#voltar_aba7').click(function() {
    $('#myTab a[href="#destilacao"]').tab('show');
  });

  $('#voltar_aba8').click(function() {
    $('#myTab a[href="#final"]').tab('show');
  });

  $('#voltar_aba9').click(function() {
    $('#myTab a[href="#final"]').tab('show');
  });
  

});


</script>

<script type="text/javascript">
	$(document).ready(function() {

		$('#myTab a[href="#recepcion"]').tab('show');

		//$('.sel2').select2({
			//dropdownParent: $('#modalForm')
		//});


		
	});
</script>

