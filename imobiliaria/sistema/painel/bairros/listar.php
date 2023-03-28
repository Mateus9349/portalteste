<?php 
require_once("../../conexao.php");
$data_atual = date('Y-m-d');
echo <<<HTML
<small>
HTML;
$query = $pdo->query("SELECT * FROM bairros ORDER BY id desc");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg > 0){
	echo <<<HTML
	<table class="table table-hover" id="tabela">
	<thead> 
	<tr> 
	<th>Custo materia prima</th>
	<th>Depreciação total</th>		
	<th>Custo total de mão de obra</th>
	<th>Resultado da produção</th>
	<th>custo total</th>
	<th>custo unitario</th>
	</tr> 
	</thead> 
	<tbody> 
	HTML;
	for($i=0; $i < $total_reg; $i++){
		foreach ($res[$i] as $key => $value){}
			$id = $res[$i]['id'];
			$materia = $res[$i]['materia'];
			$produtor = $res[$i]['produtor'];
			$local = $res[$i]['local'];
			$quantidade = $res[$i]['quantidade'];
			$medida = $res[$i]['medida'];
			$totalll = $res[$i]['totalll'];
			$data_entrada = $res[$i]['data_entrada'];
			$fonte = $res[$i]['fonte'];
			$consumo = $res[$i]['consumo'];
			$data_aquisicao = $res[$i]['data_aquisicao'];
			$maq = $res[$i]['maq'];
			$custo = $res[$i]['custo'];
			$residual = $res[$i]['residual'];
			$anos = $res[$i]['anos'];
			$depreciacao = $res[$i]['depreciacao'];
			$dia = $res[$i]['dia'];
			$util = $res[$i]['util'];
			$vd = $res[$i]['vd'];
			$obra = $res[$i]['obra'];
			$hora = $res[$i]['hora'];
			$trabalho = $res[$i]['trabalho'];
			$pago = $res[$i]['pago'];
			$entradois = $res[$i]['entradois'];
			$undois = $res[$i]['undois'];
			$maqdois = $res[$i]['maqdois'];
			$maqfontedois = $res[$i]['maqfontedois'];
			$maqconsumodois = $res[$i]['maqconsumodois'];
			$ferdois = $res[$i]['ferdois'];
			$ferfontedois = $res[$i]['ferfontedois'];
			$ferconsumodois = $res[$i]['ferconsumodois'];
			$data_aquidois = $res[$i]['data_aquidois'];
			$custodois = $res[$i]['custodois'];
			$residualdois = $res[$i]['residualdois'];
			$anosdois = $res[$i]['anosdois'];
			$depreciacaodois = $res[$i]['depreciacaodois'];
			$diadois = $res[$i]['diadois'];
			$utildois = $res[$i]['utildois'];
			$vddois = $res[$i]['vddois'];
			$obradois = $res[$i]['obradois'];
			$horadois = $res[$i]['horadois'];
			$trabalhadois = $res[$i]['trabalhadois'];
			$pagodois = $res[$i]['pagodois'];
			$resuldois = $res[$i]['resuldois'];
			$medidadois = $res[$i]['medidadois'];
			$perdadois = $res[$i]['perdadois'];
			$percedois = $res[$i]['percedois'];
			$entratres = $res[$i]['entratres'];
			$untres = $res[$i]['untres'];
			$maqtres = $res[$i]['maqtres'];
			$maqfontetres = $res[$i]['maqfontetres'];
			$maqconsumotres = $res[$i]['maqconsumotres'];
			$fertres = $res[$i]['fertres'];
			$ferfontetres = $res[$i]['ferfontetres'];
			$ferconsumotres = $res[$i]['ferconsumotres'];
			$data_aquitres = $res[$i]['data_aquitres'];
			$custotres = $res[$i]['custotres'];
			$residualtres = $res[$i]['residualtres'];
			$anostres = $res[$i]['anostres'];
			$depreciacaotres = $res[$i]['depreciacaotres'];
			$diatres = $res[$i]['diatres'];
			$utiltres = $res[$i]['utiltres'];
			$vdtres = $res[$i]['vdtres'];
			$obratres = $res[$i]['obratres'];
			$horatres = $res[$i]['horatres'];
			$trabalhotres = $res[$i]['trabalhotres'];
			$pagotres = $res[$i]['pagotres'];
			$resultres = $res[$i]['resultres'];
			$medidatres = $res[$i]['medidatres'];
			$perdatres = $res[$i]['perdatres'];
			$percetres = $res[$i]['percetres'];
			$data_arm = $res[$i]['data_arm'];
			$armazum = $res[$i]['armazum'];
			$medum = $res[$i]['medum'];
			$formaum = $res[$i]['formaum'];
			$entraquatro = $res[$i]['entraquatro'];
			$unquatro = $res[$i]['unquatro'];
			$maqquatro = $res[$i]['maqquatro'];
			$maqfontequatro = $res[$i]['maqfontequatro'];
			$maqconsumoquatro = $res[$i]['maqconsumoquatro'];
			$ferquatro = $res[$i]['ferquatro'];
			$ferfontequatro = $res[$i]['ferfontequatro'];
			$ferconsumoquatro = $res[$i]['ferconsumoquatro'];
			$data_aquiquatro = $res[$i]['data_aquiquatro'];
			$custoquatro = $res[$i]['custoquatro'];
			$residualquatro = $res[$i]['residualquatro'];
			$anosquatro = $res[$i]['anosquatro'];
			$depreciacaoquatro = $res[$i]['depreciacaoquatro'];
			$diaquatro = $res[$i]['diaquatro'];
			$utilquatro = $res[$i]['utilquatro'];
			$vdquatro = $res[$i]['vdquatro'];
			$obraquatro = $res[$i]['obraquatro'];
			$horaquatro = $res[$i]['horaquatro'];
			$trabalhoquatro = $res[$i]['trabalhoquatro'];
			$pagoquatro = $res[$i]['pagoquatro'];
			$resulquatro = $res[$i]['resulquatro'];
			$medidaquatro = $res[$i]['medidaquatro'];
			$perdaquatro = $res[$i]['perdaquatro'];
			$percequatro = $res[$i]['percequatro'];
			$entracinco = $res[$i]['entracinco'];
			$uncinco = $res[$i]['uncinco'];
			$maqcinco = $res[$i]['maqcinco'];
			$maqfontecinco = $res[$i]['maqfontecinco'];
			$maqconsumocinco = $res[$i]['maqconsumocinco'];
			$fercinco = $res[$i]['fercinco'];
			$ferfontecinco = $res[$i]['ferfontecinco'];
			$ferconsumocinco = $res[$i]['ferconsumocinco'];
			$data_aquicinco = $res[$i]['data_aquicinco'];
			$custocinco = $res[$i]['custocinco'];
			$residualcinco = $res[$i]['residualcinco'];
			$anoscinco = $res[$i]['anoscinco'];
			$depreciacaocinco = $res[$i]['depreciacaocinco'];
			$diacinco = $res[$i]['diacinco'];
			$utilcinco = $res[$i]['utilcinco'];
			$vdcinco = $res[$i]['vdcinco'];
			$obracinco = $res[$i]['obracinco'];
			$horacinco = $res[$i]['horacinco'];
			$trabalhocinco = $res[$i]['trabalhocinco'];
			$pagocinco = $res[$i]['pagocinco'];
			$resulcinco = $res[$i]['resulcinco'];
			$medidacinco = $res[$i]['medidacinco'];
			$perdacinco = $res[$i]['perdacinco'];
			$percecinco = $res[$i]['percecinco'];
			$produtoum = $res[$i]['produtoum'];
			$insumoum = $res[$i]['insumoum'];
			$medidauma = $res[$i]['medidauma'];
			$data_emum = $res[$i]['data_emum'];
			$produtodois = $res[$i]['produtodois'];
			$insumodois = $res[$i]['insumodois'];
			$medidasegun = $res[$i]['medidasegun'];
			$data_emdois = $res[$i]['data_emdois'];
			$entraseis = $res[$i]['entraseis'];
			$unseis = $res[$i]['unseis'];
			$maqseis = $res[$i]['maqseis'];
			$maqfonteseis = $res[$i]['maqfonteseis'];
			$maqconsumoseis = $res[$i]['maqconsumoseis'];
			$ferseis = $res[$i]['ferseis'];
			$ferfonteseis = $res[$i]['ferfonteseis'];
			$ferconsumoseis = $res[$i]['ferconsumoseis'];
			$data_aquiseis = $res[$i]['data_aquiseis'];
			$custoseis = $res[$i]['custoseis'];
			$residualseis = $res[$i]['residualseis'];
			$anosseis = $res[$i]['anosseis'];
			$depreciacaoseis = $res[$i]['depreciacaoseis'];
			$diaseis = $res[$i]['diaseis'];
			$utilseis = $res[$i]['utilseis'];
			$vdseis = $res[$i]['vdseis'];
			$obraseis = $res[$i]['obraseis'];
			$horaseis = $res[$i]['horaseis'];
			$trabalhoseis = $res[$i]['trabalhoseis'];
			$pagoseis = $res[$i]['pagoseis'];
			$resulseis = $res[$i]['resulseis'];
			$medidaseis = $res[$i]['medidaseis'];
			$perdaseis = $res[$i]['perdaseis'];
			$perceseis = $res[$i]['perceseis'];
			$produtotres = $res[$i]['produtotres'];
			$armaztres = $res[$i]['armaztres'];
			$medidaterc = $res[$i]['medidaterc'];
			$data_emtres = $res[$i]['data_emtres'];
			$armazquatro = $res[$i]['armazquatro'];
			$medidaquart = $res[$i]['medidaquart'];
			$formaquatro = $res[$i]['formaquatro'];
			$entrasete = $res[$i]['entrasete'];
			$unsete = $res[$i]['unsete'];
			$maqsete = $res[$i]['maqsete'];
			$maqfontesete = $res[$i]['maqfontesete'];
			$maqconsumosete = $res[$i]['maqconsumosete'];
			$fersete = $res[$i]['fersete'];
			$ferfontesete = $res[$i]['ferfontesete'];
			$ferconsumosete = $res[$i]['ferconsumosete'];
			$data_aquisete = $res[$i]['data_aquisete'];
			$custosete = $res[$i]['custosete'];
			$residualsete = $res[$i]['residualsete'];
			$anossete = $res[$i]['anossete'];
			$depreciacaosete = $res[$i]['depreciacaosete'];
			$diasete = $res[$i]['diasete'];
			$utilsete = $res[$i]['utilsete'];
			$vdsete = $res[$i]['vdsete'];
			$obrasete = $res[$i]['obrasete'];
			$horasete = $res[$i]['horasete'];
			$trabalhosete = $res[$i]['trabalhosete'];
			$pagosete = $res[$i]['pagosete'];
			$resulsete = $res[$i]['resulsete'];
			$medidasete = $res[$i]['medidasete'];
			$perdasete = $res[$i]['perdasete'];
			$percesete = $res[$i]['percesete'];
			$np = $res[$i]['np'];
			$qua = $res[$i]['qua'];
			$umed = $res[$i]['umed'];
			$totalmateria = $res[$i]['totalmateria'];
			$totaldepre = $res[$i]['totaldepre'];
			$totalrend = $res[$i]['totalrend'];
			$totalobra = $res[$i]['totalobra'];
			$totalproducao = $res[$i]['totalproducao'];
			$totalcusto = $res[$i]['totalcusto'];
			$totalcustodois = $res[$i]['totalcustodois'];
					
		
		



		echo <<<HTML
		<tr>
		<td class="esc">{$totalmateria}	</td>  
		<td class="esc">{$totaldepre}	</td> 
		<td class="esc">{$totalobra}</td>
		<td class="esc">{$totalproducao}</td>
		<td class="esc">{$totalcusto}</td>
		<td class="esc">{$totalcustodois}</td>
		<td>
	

		<big><a href="#" onclick="editar('{$id}', '{$materia}', '{$produtor}', '{$local}', '{$quantidade}', '{$medida}', '{$totalll}', '{$data_entrada}', '{$fonte}', '{$consumo}', '{$data_aquisicao}', '{$maq}', '{$custo}', '{$residual}',  '{$anos}', '{$depreciacao}', '{$dia}', '{$util}', '{$vd}', '{$obra}', '{$hora}', '{$trabalho}', '{$pago}', '{$entradois}', '{$undois}', '{$maqdois}', '{$maqfontedois}', '{$maqconsumodois}', '{$ferdois}', '{$ferfontedois}', '{$ferconsumodois}', '{$data_aquidois}', '{$custodois}', '{$residualdois}', '{$anosdois}', '{$depreciacaodois}', '{$diadois}', '{$utildois}', '{$vddois}', '{$obradois}', '{$horadois}', '{$trabalhadois}', '{$pagodois}', '{$resuldois}', '{$medidadois}', '{$perdadois}', '{$percedois}', '{$entratres}', '{$untres}', '{$maqtres}', '{$maqfontetres}', '{$maqconsumotres}', '{$fertres}', '{$ferfontetres}', '{$ferconsumotres}', '{$data_aquitres}', '{$custotres}', '{$residualtres}', '{$anostres}', '{$depreciacaotres}', '{$diatres}', '{$utiltres}', '{$vdtres}', '{$obratres}', '{$horatres}', '{$trabalhotres}', '{$pagotres}', '{$resultres}', '{$medidatres}', '{$perdatres}', '{$percetres}', '{$data_arm}', '{$armazum}', '{$medum}', '{$formaum}', '{$entraquatro}', '{$unquatro}', '{$maqquatro}', '{$maqfontequatro}', '{$maqconsumoquatro}', '{$ferquatro}', '{$ferfontequatro}', '{$ferconsumoquatro}', '{$data_aquiquatro}', '{$custoquatro}', '{$residualquatro}', '{$anosquatro}', '{$depreciacaoquatro}', '{$diaquatro}', '{$utilquatro}', '{$vdquatro}', '{$obraquatro}', '{$horaquatro}', '{$trabalhoquatro}', '{$pagoquatro}', '{$resulquatro}', '{$medidaquatro}', '{$perdaquatro}', '{$percequatro}', '{$entracinco}', '{$uncinco}', '{$maqcinco}', '{$maqfontecinco}', '{$maqconsumocinco}', '{$fercinco}', '{$ferfontecinco}', '{$ferconsumocinco}', '{$data_aquicinco}', '{$custocinco}', '{$residualcinco}', '{$anoscinco}', '{$depreciacaocinco}', '{$diacinco}', '{$utilcinco}', '{$vdcinco}', '{$obracinco}', '{$horacinco}', '{$trabalhocinco}', '{$pagocinco}', '{$resulcinco}', '{$medidacinco}', '{$perdacinco}','{$percecinco}','{$produtoum}','{$insumoum}','{$medidauma}','{$data_emum}','{$produtodois}','{$insumodois}','{$medidasegun}','{$data_emdois}', '{$entraseis}', '{$unseis}', '{$maqseis}', '{$maqfonteseis}', '{$maqconsumoseis}', '{$ferseis}', '{$ferfonteseis}', '{$ferconsumoseis}', '{$data_aquiseis}', '{$custoseis}', '{$residualseis}', '{$anosseis}', '{$depreciacaoseis}', '{$diaseis}', '{$utilseis}', '{$vdseis}', '{$obraseis}', '{$horaseis}', '{$trabalhoseis}', '{$pagoseis}', '{$resulseis}', '{$medidaseis}', '{$perdaseis}', '{$perceseis}', '{$produtotres}', '{$armaztres}', '{$medidaterc}', '{$data_emtres}', '{$armazquatro}', '{$medidaquart}', '{$formaquatro}', '{$entrasete}', '{$unsete}', '{$maqsete}', '{$maqfontesete}', '{$maqconsumosete}', '{$fersete}', '{$ferfontesete}', '{$ferconsumosete}', '{$data_aquisete}', '{$custosete}', '{$residualsete}', '{$anossete}', '{$depreciacaosete}', '{$diasete}', '{$utilsete}', '{$vdsete}', '{$obrasete}', '{$horasete}', '{$trabalhosete}', '{$pagosete}', '{$resulsete}', '{$medidasete}', '{$perdasete}', '{$percesete}', '{$np}', '{$qua}', '{$umed}', '{$totalmateria}', '{$totaldepre}', '{$totalrend}', '{$totalobra}', '{$totalproducao}', '{$totalcusto}', '{$totalcustodois}')" title="Editar Dados"><i class="fa fa-edit text-primary"></i></a></big>

		
		<big><a href="#" onclick="mostrar('{$data_entrada}', '{$materia}', '{$produtor}', '{$local}', '{$quantidade}', '{$medida}', '{$totalll}',  '{$fonte}', '{$consumo}', '{$data_aquisicao}', '{$maq}', '{$custo}', '{$residual}',  '{$anos}', '{$depreciacao}', '{$dia}', '{$util}', '{$vd}', '{$obra}', '{$hora}', '{$trabalho}', '{$pago}', '{$entradois}', '{$undois}', '{$maqdois}', '{$maqfontedois}', '{$maqconsumodois}', '{$ferdois}', '{$ferfontedois}', '{$ferconsumodois}', '{$data_aquidois}', '{$custodois}', '{$residualdois}', '{$anosdois}', '{$depreciacaodois}', '{$diadois}', '{$utildois}', '{$vddois}', '{$obradois}', '{$horadois}', '{$trabalhadois}', '{$pagodois}', '{$resuldois}', '{$medidadois}', '{$perdadois}', '{$percedois}', '{$entratres}', '{$untres}', '{$maqtres}', '{$maqfontetres}', '{$maqconsumotres}', '{$fertres}', '{$ferfontetres}', '{$ferconsumotres}', '{$data_aquitres}', '{$custotres}', '{$residualtres}', '{$anostres}', '{$depreciacaotres}', '{$diatres}', '{$utiltres}', '{$vdtres}', '{$obratres}', '{$horatres}', '{$trabalhotres}', '{$pagotres}', '{$resultres}', '{$medidatres}', '{$perdatres}', '{$percetres}', '{$data_arm}', '{$armazum}', '{$medum}', '{$formaum}', '{$entraquatro}', '{$unquatro}', '{$maqquatro}', '{$maqfontequatro}', '{$maqconsumoquatro}', '{$ferquatro}', '{$ferfontequatro}', '{$ferconsumoquatro}', '{$data_aquiquatro}', '{$custoquatro}', '{$residualquatro}', '{$anosquatro}', '{$depreciacaoquatro}', '{$diaquatro}', '{$utilquatro}', '{$vdquatro}', '{$obraquatro}', '{$horaquatro}', '{$trabalhoquatro}', '{$pagoquatro}', '{$resulquatro}', '{$medidaquatro}', '{$perdaquatro}', '{$percequatro}', '{$entracinco}', '{$uncinco}', '{$maqcinco}', '{$maqfontecinco}', '{$maqconsumocinco}', '{$fercinco}', '{$ferfontecinco}', '{$ferconsumocinco}', '{$data_aquicinco}', '{$custocinco}', '{$residualcinco}', '{$anoscinco}', '{$depreciacaocinco}', '{$diacinco}', '{$utilcinco}', '{$vdcinco}', '{$obracinco}', '{$horacinco}', '{$trabalhocinco}', '{$pagocinco}', '{$resulcinco}', '{$medidacinco}', '{$perdacinco}','{$percecinco}','{$produtoum}','{$insumoum}','{$medidauma}','{$data_emum}','{$produtodois}','{$insumodois}','{$medidasegun}','{$data_emdois}', '{$entraseis}', '{$unseis}', '{$maqseis}', '{$maqfonteseis}', '{$maqconsumoseis}', '{$ferseis}', '{$ferfonteseis}', '{$ferconsumoseis}', '{$data_aquiseis}', '{$custoseis}', '{$residualseis}', '{$anosseis}', '{$depreciacaoseis}', '{$diaseis}', '{$utilseis}', '{$vdseis}', '{$obraseis}', '{$horaseis}', '{$trabalhoseis}', '{$pagoseis}', '{$resulseis}', '{$medidaseis}', '{$perdaseis}', '{$perceseis}', '{$produtotres}', '{$armaztres}', '{$medidaterc}', '{$data_emtres}', '{$armazquatro}', '{$medidaquart}', '{$formaquatro}', '{$entrasete}', '{$unsete}', '{$maqsete}', '{$maqfontesete}', '{$maqconsumosete}', '{$fersete}', '{$ferfontesete}', '{$ferconsumosete}', '{$data_aquisete}', '{$custosete}', '{$residualsete}', '{$anossete}', '{$depreciacaosete}', '{$diasete}', '{$utilsete}', '{$vdsete}', '{$obrasete}', '{$horasete}', '{$trabalhosete}', '{$pagosete}', '{$resulsete}', '{$medidasete}', '{$perdasete}', '{$percesete}', '{$np}', '{$qua}', '{$umed}', '{$totalmateria}', '{$totaldepre}', '{$totalrend}', '{$totalobra}', '{$totalproducao}', '{$totalcusto}', '{$totalcustodois}')" title="Ver Dados"><i class="fa fa-info-circle text-secondary"></i></a></big>
		<li class="dropdown head-dpdn2" style="display: inline-block;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><big><i class="fa fa-trash-o text-danger"></i></big></a>

		<ul class="dropdown-menu" style="margin-left:-230px;">
		<li>
		<div class="notification_desc2">
		<p>Confirmar Exclusão? <a href="#" onclick="excluir('{$id}', '{$materia}')"><span class="text-danger">Sim</span></a></p>
		</div>
		</li>										
		</ul>
		</li>

		<a href="#" onclick="arquivo('{$id}', '{$materia}')" title="Inserir / Ver Arquivos"><i class="fa fa-file-o " style="color:#22146e"></i></a>



		


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



	function editar(id, materia, produtor, local, quantidade, medida, totalll, data_entrada, fonte, consumo, data_aquisicao, maq, custo, residual, anos, depreciacao, dia, util, vd, obra, hora, trabalho, pago, entradois,
	undois, maqdois, maqfontedois, maqconsumodois, ferdois, ferfontedois, ferconsumodois, data_aquidois, custodois,
	residualdois, anosdois, depreciacaodois, diadois, utildois, vddois, obradois, horadois,trabalhadois, pagodois,
	resuldois, medidadois, perdadois, percedois, entratres, untres, maqtres, maqfontetres, maqconsumotres, fertres,
	ferfontetres, ferconsumotres, data_aquitres, custotres, residualtres, anostres, depreciacaotres, diatres, utiltres, vdtres, obratres, horatres, trabalhotres, pagotres, resultres,medidatres, perdatres, percetres,data_arm, armazum, medum, formaum, entraquatro, unquatro,maqquatro, maqfontequatro, maqconsumoquatro, ferquatro,ferfontequatro, ferconsumoquatro, data_aquiquatro, custoquatro, residualquatro, anosquatro, depreciacaoquatro, diaquatro, utilquatro, vdquatro, obraquatro, horaquatro, trabalhoquatro, pagoquatro, resulquatro, medidaquatro,perdaquatro, percequatro, entracinco, uncinco, maqcinco, maqfontecinco, maqconsumocinco, fercinco, ferfontecinco,ferconsumocinco, data_aquicinco, custocinco, residualcinco, anoscinco, depreciacaocinco, diacinco, utilcinco,vdcinco, obracinco, horacinco, trabalhocinco, pagocinco, resulcinco, medidacinco, perdacinco, percecinco,produtoum, insumoum, medidauma, data_emum, produtodois, insumodois, medidasegun, data_emdois,  entraseis, unseis,maqseis, maqfonteseis, maqconsumoseis, ferseis, ferfonteseis, ferconsumoseis, data_aquiseis, custoseis, residualseis, anosseis, depreciacaosei, diaseis, utilseis, vdseis, obraseis, horaseis, trabalhoseis, pagoseis,resulseis, medidaseis, perdaseis, perceseis, produtotres, armaztres, medidatres, data_emtres, armazquatro,medidaquart, formaquatro, entrasete, unsete, maqsete, maqfontesete, maqconsumosete, fersete, ferfontesete, ferconsumosete, data_aquisete, custosete, residualsete, anossete, depreciacaosete, diasete, utilsete, vdsete, obrasete, horasete, trabalhosete, pagosete, resulsete, medidasete, perdasete, percesete, np, qua, umed, totalmateria, totaldepre, totalrend, totalobra , totalproducao, totalcusto, totalcustodois){

		
		$('#id').val(id);
		$('#materia').val(materia).change();
		$('#produtor').val(produtor).change();
		$('#local').val(local).change();
		$('#quantidade').val(quantidade).change();
		$('#produtor').val(produtor).change();
		$('#medida').val(medida).change();
		$('#totalll').val(totalll).change();
		$('#materia').val(materia).change();
		$('#data_entrada').val(data_entrada).change();
		$('#fonte').val(fonte).change();
		$('#consumo').val(consumo).change();
		$('#data_aquisicao').val(data_aquisicao).change();
		$('#maq').val(maq).change();
		$('#custo').val(custo).change();
		$('#residual').val(residual).change();
		$('#anos').val(anos).change();
		$('#depreciacao').val(depreciacao).change();
		$('#dia').val(dia).change();
		$('#util').val(util).change();
		$('#vd').val(vd).change();
		$('#obra').val(obra).change();
		$('#hora').val(hora).change();
		$('#trabalho').val(trabalho).change();
		$('#pago').val(pago).change();
		$('#entradodois').val(entradois).change();
$('#undois').val(undois).change();
$('#maqdois').val(maqdois).change();
$('#maqfontedois').val(maqfontedois).change();
$('#maqconsumodois').val(maqconsumodois).change();
$('#ferdois').val(ferdois).change();
$('#ferfontedois').val(ferfontedois).change();
$('#ferconsumodois').val(ferconsumodois).change();
$('#data_aquidois').val(data_aquidois).change();
$('#custodois').val(custodois).change();
$('#residualdois').val(residualdois).change();
$('#anosdois').val(anosdois).change();
$('#depreciacaodois').val(depreciacaodois).change();
$('#diadois').val(diadois).change();
$('#utildois').val(utildois).change();
$('#vddois').val(vddois).change();
$('#obradois').val(obradois).change();
$('#horadois').val(horadois).change();
$('#trabalhodois').val(trabalhadois).change();
$('#pagodois').val(pagodois).change();
$('#resuldois').val(resuldois).change();
$('#medidadois').val(medidadois).change();
$('#perdadois').val(perdadois).change();
$('#percedois').val(percedois).change();
$('#entratres').val(entratres).change();
$('#untres').val(untres).change();
$('#maqtres').val(maqtres).change();
$('#maqfontetres').val(maqfontetres).change();
$('#maqconsumotres').val(maqconsumotres).change();
$('#fertres').val(fertres).change();
$('#ferfontetres').val(ferfontetres).change();
$('#ferconsumotres').val(ferconsumotres).change();
$('#data_aquitres').val(data_aquitres).change();
$('#custotres').val(custotres).change();
$('#residualtres').val(residualtres).change();
$('#anostres').val(anostres).change();
$('#depreciacaotres').val(depreciacaotres).change();
$('#diatres').val(diatres).change();
$('#utiltres').val(utiltres).change();
$('#vdtres').val(vdtres).change();
$('#obratres').val(obratres).change();
$('#horatres').val(horatres).change();
$('#trabalhotres').val(trabalhotres).change();
$('#pagotres').val(pagotres).change();
$('#resultres').val(resultres).change();
$('#medidatres').val(medidatres).change();
$('#perdatres').val(perdatres).change();
$('#percetres').val(percetres).change();
$('#data_arm').val(data_arm).change();
$('#armazum').val(armazum).change();
$('#medum').val(medum).change();
$('#formaum').val(formaum).change();
$('#entraquatro').val(entraquatro).change();
$('#unquatro').val(unquatro).change();
$('#maqquatro').val(maqquatro).change();
$('#maqfontequatro').val(maqfontequatro).change();
$('#maqconsumoquatro').val(maqconsumoquatro).change();
$('#ferquatro').val(ferquatro).change();
$('#ferfontequatro').val(ferfontequatro).change();
$('#ferconsumoquatro').val(ferconsumoquatro).change();
$('#data_aquiquatro').val(data_aquiquatro).change();
$('#custoquatro').val(custoquatro).change();
$('#residualquatro').val(residualquatro).change();
$('#anosquatro').val(anosquatro).change();
$('#depreciacaoquatro').val(depreciacaoquatro).change();
$('#diaquatro').val(diaquatro).change();
$('#utilquatro').val(utilquatro).change();
$('#vdquatro').val(vdquatro).change();
$('#obraquatro').val(obraquatro).change();
$('#horaquatro').val(horaquatro).change();
$('#trabalhoquatro').val(trabalhoquatro).change();
$('#pagoquatro').val(pagoquatro).change();
$('#resulquatro').val(resulquatro).change();
$('#medidaquatro').val(medidaquatro).change();
$('#perdaquatro').val(perdaquatro).change();
$('#percequatro').val(percequatro).change();
$('#entracinco').val(entracinco).change();
$('#uncinco').val(uncinco).change();
$('#maqcinco').val(maqcinco).change();
$('#maqfontecinco').val(maqfontecinco).change();
$('#maqconsumocinco').val(maqconsumocinco).change();
$('#fercinco').val(fercinco).change();
$('#ferfontecinco').val(ferfontecinco).change();
$('#ferconsumocinco').val(ferconsumocinco).change();
$('#data_aquicinco').val(data_aquicinco).change();
$('#custocinco').val(custocinco).change();
$('#residualcinco').val(residualcinco).change();
$('#anoscinco').val(anoscinco).change();
$('#depreciacaocinco').val(depreciacaocinco).change();
$('#diacinco').val(diacinco).change();
$('#utilcinco').val(utilcinco).change();
$('#vdcinco').val(vdcinco).change();
$('#obracinco').val(obracinco).change();
$('#horacinco').val(horacinco).change();
$('#trabalhocinco').val(trabalhocinco).change();
$('#pagocinco').val(pagocinco).change();
$('#resulcinco').val(resulcinco).change();
$('#medidacinco').val(medidacinco).change();
$('#perdacinco').val(perdacinco).change();
$('#percecinco').val(percecinco).change();
$('#produtoum').val(produtoum).change();
$('#insumoum').val(insumoum).change();
$('#medidauma').val(medidauma).change();
$('#data_emum').val(data_emum).change();
$('#produtodois').val(produtodois).change();
$('#insumodois').val(insumodois).change();
$('#medidasegun').val(medidasegun).change();
$('#data_emdois').val(data_emdois).change();
$('#entraseis').val(entraseis).change();
$('#unseis').val(pago).change();
$('#maqseis').val(pago).change();
$('#maqfonteseis').val(pago).change();
$('#maqconsumoseis').val(pago).change();
$('#ferseis').val(pago).change();
$('#ferfonteseis').val(pago).change();
$('#ferconsumoseis').val(pago).change();
$('#data_aquiseis').val(pago).change();
$('#custoseis').val(pago).change();
$('#residualseis').val(pago).change();
$('#anosseis').val(pago).change();
$('#depreciacaosei').val(pago).change();
$('#diaseis').val(pago).change();
$('#utilseis').val(pago).change();
$('#vdseis').val(pago).change();
$('#obraseis').val(pago).change();
$('#horaseis').val(pago).change();
$('#trabalhoseis').val(pago).change();
$('#pagoseis').val(pago).change();
$('#resulseis').val(pago).change();
$('#medidaseis').val(pago).change();
$('#perdaseis').val(pago).change();
$('#perceseis').val(pago).change();
$('#produtotres').val(pago).change();
$('#armaztres').val(pago).change();
$('#medidaterc').val(pago).change();
$('#data_emtres').val(pago).change();
$('#armazquatro').val(pago).change();
$('#medidaquart').val(pago).change();
$('#formaquatro').val(pago).change();
$('#entrasete').val(pago).change();
$('#unsete').val(pago).change();
$('#maqsete').val(pago).change();
$('#maqfontesete').val(pago).change();
$('#maqconsumosete').val(pago).change();
$('#fersete').val(pago).change();
$('#ferfontesete').val(pago).change();
$('#ferconsumosete').val(pago).change();
$('#data_aquisete').val(pago).change();
$('#custosete').val(pago).change();
$('#residualsete').val(pago).change();
$('#anossete').val(pago).change();
$('#depreciacaosete').val(pago).change();
$('#diasete').val(pago).change();
$('#utilsete').val(pago).change();
$('#vdsete').val(pago).change();
$('#obrasete').val(pago).change();
$('#horasete').val(pago).change();
$('#trabalhosete').val(pago).change();
$('#pagosete').val(pago).change();
$('#resulsete').val(pago).change();
$('#medidasete').val(pago).change();
$('#perdasete').val(pago).change();
$('#percesete').val(pago).change();
$('#np').val(pago).change();
$('#qua').val(pago).change();
$('#umed').val(pago).change();
$('#totalmateria').val(pago).change();
$('#totaldepre').val(pago).change();
$('#totalrend').val(pago).change();
$('#totalobra').val(pago).change();
$('#totalproducao').val(totalproducao).change();
$('#totalcusto').val(totalcusto).change();
$('#totalcustodois').val(totalcustodois).change();			
		
		

		$('#tituloModal').text('Editar Registro');
		$('#modalForm').modal('show');
		$('#mensagem').text('');
	}



	function mostrar(data_entrada, materia, produtor, local, quantidade, medida, totalll,  fonte, consumo, data_aquisicao, maq, custo, residual, anos, depreciacao, dia, util, vd, obra, hora, trabalho, pago, entradois,
	undois, maqdois, maqfontedois, maqconsumodois, ferdois, ferfontedois, ferconsumodois, data_aquidois, custodois,
	residualdois, anosdois, depreciacaodois, diadois, utildois, vddois, obradois, horadois,trabalhadois, pagodois,
	resuldois, medidadois, perdadois, percedois, entratres, untres, maqtres, maqfontetres, maqconsumotres, fertres,
	ferfontetres, ferconsumotres, data_aquitres, custotres, residualtres, anostres, depreciacaotres, diatres, utiltres, vdtres, obratres, horatres, trabalhotres, pagotres, resultres,medidatres, perdatres, percetres,data_arm, armazum, medum, formaum, entraquatro, unquatro,maqquatro, maqfontequatro, maqconsumoquatro, ferquatro,ferfontequatro, ferconsumoquatro, data_aquiquatro, custoquatro, residualquatro, anosquatro, depreciacaoquatro, diaquatro, utilquatro, vdquatro, obraquatro, horaquatro, trabalhoquatro, pagoquatro, resulquatro, medidaquatro,perdaquatro, percequatro, entracinco, uncinco, maqcinco, maqfontecinco, maqconsumocinco, fercinco, ferfontecinco,ferconsumocinco, data_aquicinco, custocinco, residualcinco, anoscinco, depreciacaocinco, diacinco, utilcinco,vdcinco, obracinco, horacinco, trabalhocinco, pagocinco, resulcinco, medidacinco, perdacinco, percecinco,produtoum, insumoum, medidauma, data_emum, produtodois, insumodois, medidasegun, data_emdois,  entraseis, unseis,maqseis, maqfonteseis, maqconsumoseis, ferseis, ferfonteseis, ferconsumoseis, data_aquiseis, custoseis, residualseis, anosseis, depreciacaosei, diaseis, utilseis, vdseis, obraseis, horaseis, trabalhoseis, pagoseis,resulseis, medidaseis, perdaseis, perceseis, produtotres, armaztres, medidatres, data_emtres, armazquatro,medidaquart, formaquatro, entrasete, unsete, maqsete, maqfontesete, maqconsumosete, fersete, ferfontesete, ferconsumosete, data_aquisete, custosete, residualsete, anossete, depreciacaosete, diasete, utilsete, vdsete, obrasete, horasete, trabalhosete, pagosete, resulsete, medidasete, perdasete, percesete, np, qua, umed, totalmateria, totaldepre, totalrend, totalobra , totalproducao, totalcusto, totalcustodois){

$('#data_entrada_mostrar').text(data_entrada);
$('#materia_mostrar').text(materia);
$('#produtor_mostrar').text(produtor);
$('#local_mostrar').text(local);
$('#quantidade_mostrar').text(quantidade);
$('#medida_mostrar').text(medida);
$('#totalll_mostrar').text(totalll);
$('#fonte_mostrar').text(fonte);
$('#consumo_mostrar').text(consumo);
$('#data_aquisicao_mostrar').text(data_aquisicao);
$('#maq_mostrar').text(maq);
$('#custo_mostrar').text(custo);
$('#residual_mostrar').text(residual);
$('#anos_mostrar').text(anos);
$('#depreciacao_mostrar').text(depreciacao);
$('#dia_mostrar').text(dia);
$('#util_mostrar').text(util);
$('#vd_mostrar').text(vd);
$('#obra_mostrar').text(obra);
$('#hora_mostrar').text(hora);
$('#trabalho_mostrar').text(trabalho);
$('#pago_mostrar').text(pago);
$('#entradois_mostrar').text(entradois);
$('#undois_mostrar').text(undois);
$('#maqdois_mostrar').text(maqdois);
$('#maqfontedois_mostrar').text(maqfontedois);
$('#maqconsumodois_mostrar').text(maqconsumodois);
$('#ferdois_mostrar').text(ferdois);
$('#ferfontedois_mostrar').text(ferfontedois);
$('#ferconsumodois_mostrar').text(ferconsumodois);
$('#data_aquidois_mostrar').text(data_aquidois);
$('#custodois_mostrar').text(custodois);
$('#residualdois_mostrar').text(residualdois);
$('#anosdois_mostrar').text(anosdois);
$('#depreciacaodois_mostrar').text(depreciacaodois);
$('#diadois_mostrar').text(diadois);
$('#utildois_mostrar').text(utildois);
$('#vddois_mostrar').text(vddois);
$('#obradois_mostrar').text(obradois);
$('#horadois_mostrar').text(horadois);
$('#trabalhadois_mostrar').text(trabalhadois);
$('#pagodois_mostrar').text(pagodois);
$('#resuldois_mostrar').text(resuldois);
$('#medidadois_mostrar').text(medidadois);
$('#perdadois_mostrar').text(perdadois);
$('#percedois_mostrar').text(percedois);
$('#entratres_mostrar').text(entratres);
$('#untres_mostrar').text(untres);
$('#maqtres_mostrar').text(maqtres);
$('#maqfontetres_mostrar').text(maqfontetres);
$('#maqconsumotres_mostrar').text(maqconsumotres);
$('#fertres_mostrar').text(fertres);
$('#ferfontetres_mostrar').text(ferfontetres);
$('#ferconsumotres_mostrar').text(ferconsumotres);
$('#data_aquitres_mostrar').text(data_aquitres);
$('#custotres_mostrar').text(custotres);
$('#residualtres_mostrar').text(residualtres);
$('#anostres_mostrar').text(anostres);
$('#depreciacaotres_mostrar').text(depreciacaotres);
$('#diatres_mostrar').text(diatres);
$('#utiltres_mostrar').text(utiltres);
$('#vdtres_mostrar').text(vdtres);
$('#obratres_mostrar').text(obratres);
$('#horatres_mostrar').text(horatres);
$('#trabalhotres_mostrar').text(trabalhotres);
$('#pagotres_mostrar').text(pagotres);
$('#resultres_mostrar').text(resultres);
$('#medidatres_mostrar').text(medidatres);
$('#perdatres_mostrar').text(perdatres);
$('#percetres_mostrar').text(percetres);
$('#data_arm_mostrar').text(data_arm);
$('#armazum_mostrar').text(armazum);
$('#medum_mostrar').text(medum);
$('#formaum_mostrar').text(formaum);
$('#entraquatro_mostrar').text(entraquatro);
$('#unquatro_mostrar').text(unquatro);
$('#maqquatro_mostrar').text(maqquatro);
$('#maqfontequatro_mostrar').text(maqfontequatro);
$('#maqconsumoquatro_mostrar').text(maqconsumoquatro);
$('#ferquatro_mostrar').text(ferquatro);
$('#ferfontequatro_mostrar').text(ferfontequatro);
$('#ferconsumoquatro_mostrar').text(ferconsumoquatro);
$('#data_aquiquatro_mostrar').text(data_aquiquatro);
$('#custoquatro_mostrar').text(custoquatro);
$('#residualquatro_mostrar').text(residualquatro);
$('#anosquatro_mostrar').text(anosquatro);
$('#depreciacaoquatro_mostrar').text(depreciacaoquatro);
$('#diaquatro_mostrar').text(diaquatro);
$('#utilquatro_mostrar').text(utilquatro);
$('#vdquatro_mostrar').text(vdquatro);
$('#obraquatro_mostrar').text(obraquatro);
$('#horaquatro_mostrar').text(horaquatro);
$('#trabalhoquatro_mostrar').text(trabalhoquatro);
$('#pagoquatro_mostrar').text(pagoquatro);
$('#resulquatro_mostrar').text(resulquatro);
$('#medidaquatro_mostrar').text(medidaquatro);
$('#perdaquatro_mostrar').text(perdaquatro);
$('#percequatro_mostrar').text(percequatro);
$('#entracinco_mostrar').text(entracinco);
$('#uncinco_mostrar').text(uncinco);
$('#maqcinco_mostrar').text(maqcinco);
$('#maqfontecinco_mostrar').text(maqfontecinco);
$('#maqconsumocinco_mostrar').text(maqconsumocinco);
$('#fercinco_mostrar').text(fercinco);
$('#ferfontecinco_mostrar').text(ferfontecinco);
$('#ferconsumocinco_mostrar').text(ferconsumocinco);
$('#data_aquicinco_mostrar').text(data_aquicinco);
$('#custocinco_mostrar').text(custocinco);
$('#residualcinco_mostrar').text(residualcinco);
$('#anoscinco_mostrar').text(anoscinco);
$('#depreciacaocinco_mostrar').text(depreciacaocinco);
$('#diacinco_mostrar').text(diacinco);
//$('#diacinco_mostrar').text(diacinco);
$('#utilcinco_mostrar').text(utilcinco);
$('#vdcinco_mostrar').text(vdcinco);
$('#obracinco_mostrar').text(obracinco);
$('#horacinco_mostrar').text(horacinco);
$('#trabalhocinco_mostrar').text(trabalhocinco);
$('#pagocinco_mostrar').text(pagocinco);
$('#resulcinco_mostrar').text(resulcinco);
$('#medidacinco_mostrar').text(medidacinco);
$('#perdacinco_mostrar').text(perdacinco);
$('#percecinco_mostrar').text(percecinco);
$('#produtoum_mostrar').text(produtoum);
$('#insumoum_mostrar').text(insumoum);
$('#medidauma_mostrar').text(medidauma);
$('#data_emum_mostrar').text(data_emum);
$('#produtodois_mostrar').text(produtodois);
$('#insumodois_mostrar').text(insumodois);
$('#medidasegun_mostrar').text(medidasegun);
$('#data_emdois_mostrar').text(data_emdois);
$('#entraseis_mostrar').text(entraseis);
$('#unseis_mostrar').text(unseis);
$('#maqseis_mostrar').text(maqseis);
$('#maqfonteseis_mostrar').text(maqfonteseis);
$('#maqconsumoseis_mostrar').text(maqconsumoseis);
$('#ferseis_mostrar').text(ferseis);
$('#ferfonteseis_mostrar').text(ferfonteseis);
$('#ferconsumoseis_mostrar').text(ferconsumoseis);
$('#data_aquiseis_mostrar').text(data_aquiseis);
$('#custoseis_mostrar').text(custoseis);
$('#residualseis_mostrar').text(residualseis);
$('#anosseis_mostrar').text(anosseis);
$('#depreciacaoseis_mostrar').text(depreciacaosei);
$('#diaseis_mostrar').text(diaseis);
$('#utilseis_mostrar').text(utilseis);
$('#vdseis_mostrar').text(vdseis);
$('#obraseis_mostrar').text(obraseis);
$('#horaseis_mostrar').text(horaseis);
$('#trabalhoseis_mostrar').text(trabalhoseis);
$('#pagoseis_mostrar').text(pagoseis);
$('#resulseis_mostrar').text(resulseis);
$('#medidaseis_mostrar').text(medidaseis);
$('#perdaseis_mostrar').text(perdaseis);
$('#perceseis_mostrar').text(perceseis);
$('#produtotres_mostrar').text(produtotres);
$('#armaztres_mostrar').text(armaztres);
$('#medidatres_mostrar').text(medidatres);
$('#data_emtres_mostrar').text(data_emtres);
$('#armazquatro_mostrar').text(armazquatro);
$('#medidaquart_mostrar').text(medidaquart);
$('#formaquatro_mostrar').text(formaquatro);	
$('#entrasete_mostrar').text(entrasete);
$('#unsete_mostrar').text(unsete);
$('#maqsete_mostrar').text(maqsete);
$('#maqfontesete_mostrar').text(maqfontesete);	
$('#maqconsumosete_mostrar').text(maqconsumosete);
$('#fersete_mostrar').text(fersete);
$('#ferfontesete_mostrar').text(ferfontesete);
$('#ferconsumosete_mostrar').text(ferconsumosete);
$('#data_aquisete_mostrar').text(data_aquisete);
$('#custosete_mostrar').text(custosete);
$('#residualsete_mostrar').text(residualsete);
$('#anossete_mostrar').text(anossete);
$('#depreciacaosete_mostrar').text(depreciacaosete);
$('#diasete_mostrar').text(diasete);
$('#utilsete_mostrar').text(utilsete);
$('#vdsete_mostrar').text(vdsete);
$('#obrasete_mostrar').text(obrasete);
$('#horasete_mostrar').text(horasete);
$('#trabalhosete_mostrar').text(trabalhosete);
$('#pagosete_mostrar').text(pagosete);
$('#resulsete_mostrar').text(resulsete);
$('#medidasete_mostrar').text(medidasete);
$('#perdasete_mostrar').text(perdasete);
$('#percesete_mostrar').text(percesete);
$('#np_mostrar').text(np);
$('#qua_mostrar').text(qua);
$('#umed_mostrar').text(umed);
$('#totalmateria_mostrar').text(totalmateria);
$('#totaldepre_mostrar').text(totaldepre);
$('#totalrend_mostrar').text(totalrend);
$('#totalobra_mostrar').text(totalobra);
$('#totalproducao_mostrar').text(totalproducao);
$('#totalcusto_mostrar').text(totalcusto);
$('#totalcustodois_mostrar').text(totalcustodois);

$('#modalMostrar').modal('show');		
}

function limparCampos(){
$('#id').val('');
$('#materia').val('');
//$('#data_nasc').val('<?=$data_atual?>');

}


function arquivo(id, nome){
$('#id-arquivo').val(id);    
$('#nome-arquivo').text(nome);
$('#modalArquivos').modal('show');
$('#mensagem-arquivo').text(''); 
listarArquivos();   
}


	

</script>



