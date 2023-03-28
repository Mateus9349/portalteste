<?php 
$tabela = 'bairros';
require_once("../../conexao.php");


$materia = $_POST['materia'];
$produtor = $_POST['produtor'];
$local = $_POST['local'];
$quantidade= $_POST['quantidade'];
$medida = $_POST['medida'];
$totalll = $_POST['totalll'];
$data_entrada = $_POST['data_entrada'];
$fonte = $_POST['fonte'];
$consumo = $_POST['consumo'];
$data_aquisicao = $_POST['data_aquisicao'];
$maq = $_POST['maq'];
$custo = $_POST['custo'];
$residual = $_POST['residual'];
$anos = $_POST['anos'];
$depreciacao = $_POST['depreciacao'];
$dia = $_POST['dia'];
$util = $_POST['util'];
$vd = $_POST['vd'];
$obra = $_POST['obra'];
$hora = $_POST['hora'];
$trabalho = $_POST['trabalho'];
$pago = $_POST['pago'];
$entradois = $_POST['entradois'];
$undois = $_POST['undois'];
$maqdois = $_POST['maqdois'];
$maqfontedois = $_POST['maqfontedois'];
$maqconsumodois = $_POST['maqconsumodois'];
$ferdois = $_POST['ferdois'];
$ferfontedois = $_POST['ferfontedois'];
$ferconsumodois = $_POST['ferconsumodois'];
$data_aquidois = $_POST['data_aquidois'];
$custodois = $_POST['custodois'];
$residualdois = $_POST['residualdois'];
$anosdois = $_POST['anosdois'];
$depreciacaodois = $_POST['depreciacaodois'];
$diadois = $_POST['diadois'];
$utildois = $_POST['utildois'];
$vddois = $_POST['vddois'];
$obradois = $_POST['obradois'];
$horadois = $_POST['horadois'];
$trabalhadois = $_POST['trabalhadois'];
$pagodois = $_POST['pagodois'];
$resuldois = $_POST['resuldois'];
$medidadois = $_POST['medidadois'];
$perdadois = $_POST['perdadois'];
$percedois = $_POST['percedois'];
$entratres = $_POST['entratres'];
$untres = $_POST['untres'];
$maqtres = $_POST['maqtres'];
$maqfontetres = $_POST['maqfontetres'];
$maqconsumotres = $_POST['maqconsumotres'];
$fertres = $_POST['fertres'];
$ferfontetres = $_POST['ferfontetres'];
$ferconsumotres = $_POST['ferconsumotres'];
$data_aquitres = $_POST['data_aquitres'];
$custotres = $_POST['custotres'];
$residualtres = $_POST['residualtres'];
$anostres = $_POST['anostres'];
$depreciacaotres = $_POST['depreciacaotres'];
$diatres = $_POST['diatres'];
$utiltres = $_POST['utiltres'];
$vdtres = $_POST['vdtres'];
$obratres = $_POST['obratres'];
$horatres = $_POST['horatres'];
$trabalhotres = $_POST['trabalhotres'];
$pagotres = $_POST['pagotres'];
$resultres = $_POST['resultres'];
$medidatres = $_POST['medidatres'];
$perdatres = $_POST['perdatres'];
$percetres = $_POST['percetres'];
$data_arm = $_POST['data_arm'];
$armazum = $_POST['armazum'];
$medum = $_POST['medum'];
$formaum = $_POST['formaum'];
$entraquatro = $_POST['entraquatro'];
$unquatro = $_POST['unquatro'];
$maqquatro = $_POST['maqquatro'];
$maqfontequatro = $_POST['maqfontequatro'];
$maqconsumoquatro = $_POST['maqconsumoquatro'];
$ferquatro = $_POST['ferquatro'];
$ferfontequatro = $_POST['ferfontequatro'];
$ferconsumoquatro = $_POST['ferconsumoquatro'];
$data_aquiquatro = $_POST['data_aquiquatro'];
$custoquatro = $_POST['custoquatro'];
$residualquatro = $_POST['residualquatro'];
$anosquatro = $_POST['anosquatro'];
$depreciacaoquatro = $_POST['depreciacaoquatro'];
$diaquatro = $_POST['diaquatro'];
$utilquatro = $_POST['utilquatro'];
$vdquatro = $_POST['vdquatro'];
$obraquatro = $_POST['obraquatro'];
$horaquatro = $_POST['horaquatro'];
$trabalhoquatro = $_POST['trabalhoquatro'];
$pagoquatro = $_POST['pagoquatro'];
$resulquatro = $_POST['resulquatro'];
$medidaquatro = $_POST['medidaquatro'];
$perdaquatro = $_POST['perdaquatro'];
$percequatro = $_POST['percequatro'];
$entracinco = $_POST['entracinco'];
$uncinco = $_POST['uncinco'];
$maqcinco = $_POST['maqcinco'];
$maqfontecinco = $_POST['maqfontecinco'];
$maqconsumocinco = $_POST['maqconsumocinco'];
$fercinco = $_POST['fercinco'];
$ferfontecinco = $_POST['ferfontecinco'];
$ferconsumocinco = $_POST['ferconsumocinco'];
$data_aquicinco = $_POST['data_aquicinco'];
$custocinco = $_POST['custocinco'];
$residualcinco = $_POST['residualcinco'];
$anoscinco = $_POST['anoscinco'];
$depreciacaocinco = $_POST['depreciacaocinco'];
$diacinco = $_POST['diacinco'];
$utilcinco = $_POST['utilcinco'];
$vdcinco = $_POST['vdcinco'];
$obracinco = $_POST['obracinco'];
$horacinco = $_POST['horacinco'];
$trabalhocinco = $_POST['trabalhocinco'];
$pagocinco = $_POST['pagocinco'];
$resulcinco = $_POST['resulcinco'];
$medidacinco = $_POST['medidacinco'];
$perdacinco = $_POST['perdacinco'];
$percecinco = $_POST['percecinco'];
$produtoum = $_POST['produtoum'];
$insumoum = $_POST['insumoum'];
$medidauma = $_POST['medidauma'];
$data_emum = $_POST['data_emum'];
$produtodois = $_POST['produtodois'];
$insumodois = $_POST['insumodois'];
$medidasegun = $_POST['medidasegun'];
$data_emdois = $_POST['data_emdois'];
$entraseis = $_POST['entraseis'];
$unseis = $_POST['unseis'];
$maqseis = $_POST['maqseis'];
$maqfonteseis = $_POST['maqfonteseis'];
$maqconsumoseis = $_POST['maqconsumoseis'];
$ferseis = $_POST['ferseis'];
$ferfonteseis = $_POST['ferfonteseis'];
$ferconsumoseis = $_POST['ferconsumoseis'];
$data_aquiseis = $_POST['data_aquiseis'];
$custoseis = $_POST['custoseis'];
$residualseis = $_POST['residualseis'];
$anosseis = $_POST['anosseis'];
$depreciacaoseis = $_POST['depreciacaoseis'];
$diaseis = $_POST['diaseis'];
$utilseis = $_POST['utilseis'];
$vdseis = $_POST['vdseis'];
$obraseis = $_POST['obraseis'];
$horaseis = $_POST['horaseis'];
$trabalhoseis = $_POST['trabalhoseis'];
$pagoseis = $_POST['pagoseis'];
$resulseis = $_POST['resulseis'];
$medidaseis = $_POST['medidaseis'];
$perdaseis = $_POST['perdaseis'];
$perceseis = $_POST['perceseis'];
$produtotres = $_POST['produtotres'];
$armaztres = $_POST['armaztres'];
$medidaterc = $_POST['medidaterc'];
$data_emtres = $_POST['data_emtres'];
$armazquatro = $_POST['armazquatro'];
$medidaquart = $_POST['medidaquart'];
$formaquatro = $_POST['formaquatro'];
$entrasete = $_POST['entrasete'];
$unsete = $_POST['unsete'];
$maqsete = $_POST['maqsete'];
$maqfontesete = $_POST['maqfontesete'];
$maqconsumosete = $_POST['maqconsumosete'];
$fersete = $_POST['fersete'];
$ferfontesete = $_POST['ferfontesete'];
$ferconsumosete = $_POST['ferconsumosete'];
$data_aquisete = $_POST['data_aquisete'];
$custosete = $_POST['custosete'];
$residualsete = $_POST['residualsete'];
$anossete = $_POST['anossete'];
$depreciacaosete = $_POST['depreciacaosete'];
$diasete = $_POST['diasete'];
$utilsete = $_POST['utilsete'];
$vdsete = $_POST['vdsete'];
$obrasete = $_POST['obrasete'];
$horasete = $_POST['horasete'];
$trabalhosete = $_POST['trabalhosete'];
$pagosete = $_POST['pagosete'];
$resulsete = $_POST['resulsete'];
$medidasete = $_POST['medidasete'];
$perdasete = $_POST['perdasete'];
$percesete = $_POST['percesete'];
$np = $_POST['np'];
$qua = $_POST['qua'];
$umed = $_POST['umed'];
$totalmateria = $_POST['totalmateria'];
$totaldepre = $_POST['totaldepre'];
$totalrend = $_POST['totalrend'];
$totalobra = $_POST['totalobra'];
$totalproducao = $_POST['totalproducao'];
$totalcusto = $_POST['totalcusto'];
$totalcustodois = $_POST['totalcustodois'];
$id = $_POST['id'];



if($id == ""){
	//$query = $pdo->prepare("INSERT INTO $tabela SET corretor = '$corretor', materia = :materia, descricao = :descricao, tipo = '$tipo', cidade = '$cidade', bairro = '$bairro', valor = :valor, ano = :ano, area_total = :area_total, area_construida = :area_construida, quartos = :quartos, banheiros = :banheiros, suites = :suites, garagens = :garagens, piscinas = :piscinas, img_principal = '$img_principal', img_banner = '$img_banner', img_planta = '$img_planta'");
	$query = $pdo->prepare("INSERT INTO $tabela SET  materia = :materia, produtor = :produtor, local = :local, quantidade = :quantidade, medida = :medida, totalll = :totalll, data_entrada = :data_entrada, fonte = :fonte, consumo = :consumo, data_aquisicao = :data_aquisicao, maq = :maq, custo = :custo, residual = :residual, anos = :anos, depreciacao = :depreciacao, dia = :dia, util = :util, vd = :vd, obra = :obra, hora = :hora, trabalho = :trabalho, pago = :pago, entradois = :entradois,
	undois = :undois,
	maqdois = :maqdois,
	maqfontedois = :maqfontedois,
	maqconsumodois = :maqconsumodois,
	ferdois = :ferdois,
	ferfontedois = :ferfontedois,
	ferconsumodois = :ferconsumodois,
	data_aquidois = :data_aquidois,
	custodois = :custodois,
	residualdois = :residualdois,
	anosdois = :anosdois,
	depreciacaodois = :depreciacaodois,
	diadois = :diadois,
	utildois = :utildois,
	vddois = :vddois,
	obradois = :obradois,
	horadois = :horadois,
	trabalhadois = :trabalhadois,
	pagodois = :pagodois,
	resuldois = :resuldois,
	medidadois = :medidadois,
	perdadois = :perdadois,
	percedois = :percedois,
entratres = :entratres,
untres = :untres,
maqtres = :maqtres,
maqfontetres = :maqfontetres,
maqconsumotres = :maqconsumotres,
fertres = :fertres,
ferfontetres = :ferfontetres,
ferconsumotres = :ferconsumotres,
data_aquitres = :data_aquitres,
custotres = :custotres,
residualtres = :residualtres,
anostres = :anostres,
depreciacaotres = :depreciacaotres,
diatres = :diatres,
utiltres = :utiltres,
vdtres = :vdtres,
obratres = :obratres,
horatres = :horatres,
trabalhotres = :trabalhotres,
pagotres = :pagotres,
resultres = :resultres,
medidatres = :medidatres,
perdatres = :perdatres,
percetres = :percetres,
data_arm = :data_arm,
armazum = :armazum,
medum = :medum,
formaum = :formaum,
entraquatro = :entraquatro,
unquatro = :unquatro,
maqquatro = :maqquatro,
maqfontequatro = :maqfontequatro,
maqconsumoquatro = :maqconsumoquatro,
ferquatro = :ferquatro,
ferfontequatro = :ferfontequatro,
ferconsumoquatro = :ferconsumoquatro,
data_aquiquatro = :data_aquiquatro,
custoquatro = :custoquatro,
residualquatro = :residualquatro,
anosquatro = :anosquatro,
depreciacaoquatro = :depreciacaoquatro,
diaquatro = :diaquatro,
utilquatro = :utilquatro,
vdquatro = :vdquatro,
obraquatro = :obraquatro,
horaquatro = :horaquatro,
trabalhoquatro = :trabalhoquatro,
pagoquatro = :pagoquatro,
resulquatro = :resulquatro,
medidaquatro = :medidaquatro,
perdaquatro = :perdaquatro,
percequatro = :percequatro,
entracinco = :entracinco,
uncinco = :uncinco,
maqcinco = :maqcinco,
maqfontecinco = :maqfontecinco,
maqconsumocinco = :maqconsumocinco,
fercinco = :fercinco,
ferfontecinco = :ferfontecinco,
ferconsumocinco = :ferconsumocinco,
data_aquicinco = :data_aquicinco,
custocinco = :custocinco,
residualcinco = :residualcinco,
anoscinco = :anoscinco,
depreciacaocinco = :depreciacaocinco,
diacinco = :diacinco,
utilcinco = :utilcinco,
vdcinco = :vdcinco,
obracinco = :obracinco,
horacinco = :horacinco,
trabalhocinco = :trabalhocinco,
pagocinco = :pagocinco,
resulcinco = :resulcinco,
medidacinco = :medidacinco,
perdacinco = :perdacinco,
percecinco = :percecinco,
produtoum = :produtoum,
insumoum = :insumoum,
medidauma = :medidauma,
data_emum = :data_emum,
produtodois = :produtodois,
insumodois = :insumodois,
medidasegun = :medidasegun,
data_emdois = :data_emdois, 
entraseis = :entraseis,
unseis = :unseis,
maqseis = :maqseis,
maqfonteseis = :maqfonteseis,
maqconsumoseis = :maqconsumoseis,
ferseis = :ferseis,
ferfonteseis = :ferfonteseis,
ferconsumoseis = :ferconsumoseis,
data_aquiseis = :data_aquiseis,
custoseis = :custoseis,
residualseis = :residualseis,
anosseis = :anosseis,
depreciacaoseis = :depreciacaoseis,
diaseis = :diaseis,
utilseis = :utilseis,
vdseis = :vdseis,
obraseis = :obraseis,
horaseis = :horaseis,
trabalhoseis = :trabalhoseis,
pagoseis = :pagoseis,
resulseis = :resulseis,
medidaseis = :medidaseis,
perdaseis = :perdaseis,
perceseis = :perceseis,
produtotres = :produtotres,
armaztres = :armaztres,
medidaterc = :medidaterc,
data_emtres = :data_emtres,
armazquatro = :armazquatro,
medidaquart = :medidaquart,
formaquatro = :formaquatro,
entrasete = :entrasete,
unsete = :unsete,
maqsete = :maqsete,
maqfontesete = :maqfontesete,
maqconsumosete = :maqconsumosete,
fersete = :fersete,
ferfontesete = :ferfontesete,
ferconsumosete = :ferconsumosete,
data_aquisete = :data_aquisete,
custosete = :custosete,
residualsete = :residualsete,
anossete = :anossete,
depreciacaosete = :depreciacaosete,
diasete = :diasete,
utilsete = :utilsete,
vdsete = :vdsete,
obrasete = :obrasete,
horasete = :horasete,
trabalhosete = :trabalhosete,
pagosete = :pagosete, resulsete = :resulsete, medidasete = :medidasete, perdasete = :perdasete, percesete = :percesete, np = :np, qua = :qua, umed = :umed, totalmateria = :totalmateria, totaldepre = :totaldepre, totalrend = :totalrend, totalobra = :totalobra, totalproducao = :totalproducao, totalcusto = :totalcusto, totalcustodois = :totalcustodois");
}else{
	$query = $pdo->prepare("UPDATE $tabela SET  materia = :materia, produtor = :produtor, local = :local, quantidade = :quantidade, medida = :medida, totalll = :totalll, data_entrada = :data_entrada, fonte = :fonte, consumo = :consumo, data_aquisicao = :data_aquisicao, maq = :maq, custo = :custo, residual = :residual, anos = :anos, depreciacao = :depreciacao, dia = :dia, util = :util, vd = :vd, obra = :obra, hora = :hora, trabalho = :trabalho, pago = :pago, entradois = :entradois,
	undois = :undois,
	maqdois = :maqdois,
	maqfontedois = :maqfontedois,
	maqconsumodois = :maqconsumodois,
	ferdois = :ferdois,
	ferfontedois = :ferfontedois,
	ferconsumodois = :ferconsumodois,
	data_aquidois = :data_aquidois,
	custodois = :custodois,
	residualdois = :residualdois,
	anosdois = :anosdois,
	depreciacaodois = :depreciacaodois,
	diadois = :diadois,
	utildois = :utildois,
	vddois = :vddois,
	obradois = :obradois,
	horadois = :horadois,
	trabalhadois = :trabalhadois,
	pagodois = :pagodois,
	resuldois = :resuldois,
	medidadois = :medidadois,
	perdadois = :perdadois,
	percedois = :percedois,
entratres = :entratres,
untres = :untres,
maqtres = :maqtres,
maqfontetres = :maqfontetres,
maqconsumotres = :maqconsumotres,
fertres = :fertres,
ferfontetres = :ferfontetres,
ferconsumotres = :ferconsumotres,
data_aquitres = :data_aquitres,
custotres = :custotres,
residualtres = :residualtres,
anostres = :anostres,
depreciacaotres = :depreciacaotres,
diatres = :diatres,
utiltres = :utiltres,
vdtres = :vdtres,
obratres = :obratres,
horatres = :horatres,
trabalhotres = :trabalhotres,
pagotres = :pagotres,
resultres = :resultres,
medidatres = :medidatres,
perdatres = :perdatres,
percetres = :percetres,
data_arm = :data_arm,
armazum = :armazum,
medum = :medum,
formaum = :formaum,
entraquatro = :entraquatro,
unquatro = :unquatro,
maqquatro = :maqquatro,
maqfontequatro = :maqfontequatro,
maqconsumoquatro = :maqconsumoquatro,
ferquatro = :ferquatro,
ferfontequatro = :ferfontequatro,
ferconsumoquatro = :ferconsumoquatro,
data_aquiquatro = :data_aquiquatro,
custoquatro = :custoquatro,
residualquatro = :residualquatro,
anosquatro = :anosquatro,
depreciacaoquatro = :depreciacaoquatro,
diaquatro = :diaquatro,
utilquatro = :utilquatro,
vdquatro = :vdquatro,
obraquatro = :obraquatro,
horaquatro = :horaquatro,
trabalhoquatro = :trabalhoquatro,
pagoquatro = :pagoquatro,
resulquatro = :resulquatro,
medidaquatro = :medidaquatro,
perdaquatro = :perdaquatro,
percequatro = :percequatro,
entracinco = :entracinco,
uncinco = :uncinco,
maqcinco = :maqcinco,
maqfontecinco = :maqfontecinco,
maqconsumocinco = :maqconsumocinco,
fercinco = :fercinco,
ferfontecinco = :ferfontecinco,
ferconsumocinco = :ferconsumocinco,
data_aquicinco = :data_aquicinco,
custocinco = :custocinco,
residualcinco = :residualcinco,
anoscinco = :anoscinco,
depreciacaocinco = :depreciacaocinco,
diacinco = :diacinco,
utilcinco = :utilcinco,
vdcinco = :vdcinco,
obracinco = :obracinco,
horacinco = :horacinco,
trabalhocinco = :trabalhocinco,
pagocinco = :pagocinco,
resulcinco = :resulcinco,
medidacinco = :medidacinco,
perdacinco = :perdacinco,
percecinco = :percecinco,
produtoum = :produtoum,
insumoum = :insumoum,
medidauma = :medidauma,
data_emum = :data_emum,
produtodois = :produtodois,
insumodois = :insumodois,
medidasegun = :medidasegun,
data_emdois = :data_emdois, 
entraseis = :entraseis,
unseis = :unseis,
maqseis = :maqseis,
maqfonteseis = :maqfonteseis,
maqconsumoseis = :maqconsumoseis,
ferseis = :ferseis,
ferfonteseis = :ferfonteseis,
ferconsumoseis = :ferconsumoseis,
data_aquiseis = :data_aquiseis,
custoseis = :custoseis,
residualseis = :residualseis,
anosseis = :anosseis,
depreciacaoseis = :depreciacaoseis,
diaseis = :diaseis,
utilseis = :utilseis,
vdseis = :vdseis,
obraseis = :obraseis,
horaseis = :horaseis,
trabalhoseis = :trabalhoseis,
pagoseis = :pagoseis,
resulseis = :resulseis,
medidaseis = :medidaseis,
perdaseis = :perdaseis,
perceseis = :perceseis,
produtotres = :produtotres,
armaztres = :armaztres,
medidaterc = :medidaterc,
data_emtres = :data_emtres,
armazquatro = :armazquatro,
medidaquart = :medidaquart,
formaquatro = :formaquatro,
entrasete = :entrasete,
unsete = :unsete,
maqsete = :maqsete,
maqfontesete = :maqfontesete,
maqconsumosete = :maqconsumosete,
fersete = :fersete,
ferfontesete = :ferfontesete,
ferconsumosete = :ferconsumosete,
data_aquisete = :data_aquisete,
custosete = :custosete,
residualsete = :residualsete,
anossete = :anossete,
depreciacaosete = :depreciacaosete,
diasete = :diasete,
utilsete = :utilsete,
vdsete = :vdsete,
obrasete = :obrasete,
horasete = :horasete,
trabalhosete = :trabalhosete,
pagosete = :pagosete, resulsete = :resulsete, medidasete = :medidasete, perdasete = :perdasete, percesete = :percesete, np = :np, qua = :qua, umed = :umed, totalmateria = :totalmateria, totaldepre = :totaldepre, totalrend = :totalrend, totalobra = :totalobra, totalproducao = :totalproducao, totalcusto = :totalcusto, totalcustodois = :totalcustodois WHERE id = '$id'");

}



$query->bindValue(":materia", "$materia");
$query->bindValue(":produtor", "$produtor");
$query->bindValue(":local", "$local");
$query->bindValue(":quantidade", "$quantidade");
$query->bindValue(":medida", "$medida");
$query->bindValue(":totalll", "$totalll");
$query->bindValue(":data_entrada", "$data_entrada");
$query->bindValue(":fonte", "$fonte");
$query->bindValue(":consumo", "$consumo");
$query->bindValue(":data_aquisicao", "$data_aquisicao");
$query->bindValue(":maq", "$maq");
$query->bindValue(":custo", "$custo");
$query->bindValue(":residual", "$residual");
$query->bindValue(":anos", "$anos");
$query->bindValue(":depreciacao", "$depreciacao");
$query->bindValue(":dia", "$dia");
$query->bindValue(":util", "$util");
$query->bindValue(":vd", "$vd");
$query->bindValue(":obra", "$obra");
$query->bindValue(":hora", "$hora");
$query->bindValue(":trabalho", "$trabalho");
$query->bindValue(":pago", "$pago");
$query->bindValue(":entradois", "$entradois");
$query->bindValue(":undois", "$undois");
$query->bindValue(":maqdois", "$maqdois");
$query->bindValue(":maqfontedois", "$maqfontedois");
$query->bindValue(":maqconsumodois", "$maqconsumodois");
$query->bindValue(":ferdois", "$ferdois");
$query->bindValue(":ferfontedois", "$ferfontedois");
$query->bindValue(":ferconsumodois", "$ferconsumodois");
$query->bindValue(":data_aquidois", "$data_aquidois");
$query->bindValue(":custodois", "$custodois");
$query->bindValue(":residualdois", "$residualdois");
$query->bindValue(":anosdois", "$anosdois");
$query->bindValue(":depreciacaodois", "$depreciacaodois");
$query->bindValue(":diadois", "$diadois");
$query->bindValue(":utildois", "$utildois");
$query->bindValue(":vddois", "$vddois");
$query->bindValue(":obradois", "$obradois");
$query->bindValue(":horadois", "$horadois");
$query->bindValue(":trabalhadois", "$trabalhadois");
$query->bindValue(":pagodois", "$pagodois");
$query->bindValue(":resuldois", "$resuldois");
$query->bindValue(":medidadois", "$medidadois");
$query->bindValue(":perdadois", "$perdadois");
$query->bindValue(":percedois", "$percedois");
$query->bindValue(":entratres", "$entratres");
$query->bindValue(":untres", "$untres");
$query->bindValue(":maqtres", "$maqtres");
$query->bindValue(":maqfontetres", "$maqfontetres");
$query->bindValue(":maqconsumotres", "$maqconsumotres");
$query->bindValue(":fertres", "$fertres");
$query->bindValue(":ferfontetres", "$ferfontetres");
$query->bindValue(":ferconsumotres", "$ferconsumotres");
$query->bindValue(":data_aquitres", "$data_aquitres");
$query->bindValue(":custotres", "$custotres");
$query->bindValue(":residualtres", "$residualtres");
$query->bindValue(":anostres", "$anostres");
$query->bindValue(":depreciacaotres", "$depreciacaotres");
$query->bindValue(":diatres", "$diatres");
$query->bindValue(":utiltres", "$utiltres");
$query->bindValue(":vdtres", "$vdtres");
$query->bindValue(":obratres", "$obratres");
$query->bindValue(":horatres", "$horatres");
$query->bindValue(":trabalhotres", "$trabalhotres");
$query->bindValue(":pagotres", "$pagotres");
$query->bindValue(":resultres", "$resultres");
$query->bindValue(":medidatres", "$medidatres");
$query->bindValue(":perdatres", "$perdatres");
$query->bindValue(":percetres", "$percetres");
$query->bindValue(":data_arm", "$data_arm");
$query->bindValue(":armazum", "$armazum");
$query->bindValue(":medum", "$medum");
$query->bindValue(":formaum", "$formaum");
$query->bindValue(":entraquatro", "$entraquatro");
$query->bindValue(":unquatro", "$unquatro");
$query->bindValue(":maqquatro", "$maqquatro");
$query->bindValue(":maqfontequatro", "$maqfontequatro");
$query->bindValue(":maqconsumoquatro", "$maqconsumoquatro");
$query->bindValue(":ferquatro", "$ferquatro");
$query->bindValue(":ferfontequatro", "$ferfontequatro");
$query->bindValue(":ferconsumoquatro", "$ferconsumoquatro");
$query->bindValue(":data_aquiquatro", "$data_aquiquatro");
$query->bindValue(":custoquatro", "$custoquatro");
$query->bindValue(":residualquatro", "$residualquatro");
$query->bindValue(":anosquatro", "$anosquatro");
$query->bindValue(":depreciacaoquatro", "$depreciacaoquatro");
$query->bindValue(":diaquatro", "$diaquatro");
$query->bindValue(":utilquatro", "$utilquatro");
$query->bindValue(":vdquatro", "$vdquatro");
$query->bindValue(":obraquatro", "$obraquatro");
$query->bindValue(":horaquatro", "$horaquatro");
$query->bindValue(":trabalhoquatro", "$trabalhoquatro");
$query->bindValue(":pagoquatro", "$pagoquatro");
$query->bindValue(":resulquatro", "$resulquatro");
$query->bindValue(":medidaquatro", "$medidaquatro");
$query->bindValue(":perdaquatro", "$perdaquatro");
$query->bindValue(":percequatro", "$percequatro");
$query->bindValue(":entracinco", "$entracinco");
$query->bindValue(":uncinco", "$uncinco");
$query->bindValue(":maqcinco", "$maqcinco");
$query->bindValue(":maqfontecinco", "$maqfontecinco");
$query->bindValue(":maqconsumocinco", "$maqconsumocinco");
$query->bindValue(":fercinco", "$fercinco");
$query->bindValue(":ferfontecinco", "$ferfontecinco");
$query->bindValue(":ferconsumocinco", "$ferconsumocinco");
$query->bindValue(":data_aquicinco", "$data_aquicinco");
$query->bindValue(":custocinco", "$custocinco");
$query->bindValue(":residualcinco", "$residualcinco");
$query->bindValue(":anoscinco", "$anoscinco");
$query->bindValue(":depreciacaocinco", "$depreciacaocinco");
$query->bindValue(":diacinco", "$diacinco");
$query->bindValue(":utilcinco", "$utilcinco");
$query->bindValue(":vdcinco", "$vdcinco");
$query->bindValue(":obracinco", "$obracinco");
$query->bindValue(":horacinco", "$horacinco");
$query->bindValue(":trabalhocinco", "$trabalhocinco");
$query->bindValue(":pagocinco", "$pagocinco");
$query->bindValue(":resulcinco", "$resulcinco");
$query->bindValue(":medidacinco", "$medidacinco");
$query->bindValue(":perdacinco", "$perdacinco");
$query->bindValue(":percecinco", "$percecinco");
$query->bindValue(":produtoum", "$produtoum");
$query->bindValue(":insumoum", "$insumoum");
$query->bindValue(":medidauma", "$medidauma");
$query->bindValue(":data_emum", "$data_emum");
$query->bindValue(":produtodois", "$produtodois");
$query->bindValue(":insumodois", "$insumodois");
$query->bindValue(":medidasegun", "$medidasegun");
$query->bindValue(":data_emdois", "$data_emdois");
$query->bindValue(":entraseis", "$entraseis");
$query->bindValue(":unseis", "$unseis");
$query->bindValue(":maqseis", "$maqseis");
$query->bindValue(":maqfonteseis", "$maqfonteseis");
$query->bindValue(":maqconsumoseis", "$maqconsumoseis");
$query->bindValue(":ferseis", "$ferseis");
$query->bindValue(":ferfonteseis", "$ferfonteseis");
$query->bindValue(":ferconsumoseis", "$ferconsumoseis");
$query->bindValue(":data_aquiseis", "$data_aquiseis");
$query->bindValue(":custoseis", "$custoseis");
$query->bindValue(":residualseis", "$residualseis");
$query->bindValue(":anosseis", "$anosseis");
$query->bindValue(":depreciacaoseis", "$depreciacaoseis");
$query->bindValue(":diaseis", "$diaseis");
$query->bindValue(":utilseis", "$utilseis");
$query->bindValue(":vdseis", "$vdseis");
$query->bindValue(":obraseis", "$obraseis");
$query->bindValue(":horaseis", "$horaseis");
$query->bindValue(":trabalhoseis", "$trabalhoseis");
$query->bindValue(":pagoseis", "$pagoseis");
$query->bindValue(":resulseis", "$resulseis");
$query->bindValue(":medidaseis", "$medidaseis");
$query->bindValue(":perdaseis", "$perdaseis");
$query->bindValue(":perceseis", "$perceseis");
$query->bindValue(":produtotres", "$produtotres");
$query->bindValue(":armaztres", "$armaztres");
$query->bindValue(":medidaterc", "$medidaterc");
$query->bindValue(":data_emtres", "$data_emtres");
$query->bindValue(":armazquatro", "$armazquatro");
$query->bindValue(":medidaquart", "$medidaquart");
$query->bindValue(":formaquatro", "$formaquatro");
$query->bindValue(":entrasete", "$entrasete");
$query->bindValue(":unsete", "$unsete");
$query->bindValue(":maqsete", "$maqsete");
$query->bindValue(":maqfontesete", "$maqfontesete");
$query->bindValue(":maqconsumosete", "$maqconsumosete");
$query->bindValue(":fersete", "$fersete");
$query->bindValue(":ferfontesete", "$ferfontesete");
$query->bindValue(":ferconsumosete", "$ferconsumosete");
$query->bindValue(":data_aquisete", "$data_aquisete");
$query->bindValue(":custosete", "$custosete");
$query->bindValue(":residualsete", "$residualsete");
$query->bindValue(":anossete", "$anossete");
$query->bindValue(":depreciacaosete", "$depreciacaosete");
$query->bindValue(":diasete", "$diasete");
$query->bindValue(":utilsete", "$utilsete");
$query->bindValue(":vdsete", "$vdsete");
$query->bindValue(":obrasete", "$obrasete");
$query->bindValue(":horasete", "$horasete");
$query->bindValue(":trabalhosete", "$trabalhosete");
$query->bindValue(":pagosete", "$pagosete");
$query->bindValue(":resulsete", "$resulsete");
$query->bindValue(":medidasete", "$medidasete");
$query->bindValue(":perdasete", "$perdasete");
$query->bindValue(":percesete", "$percesete");
$query->bindValue(":np", "$np");
$query->bindValue(":qua", "$qua");
$query->bindValue(":umed", "$umed");
$query->bindValue(":totalmateria", "$totalmateria");
$query->bindValue(":totaldepre", "$totaldepre");
$query->bindValue(":totalrend", "$totalrend");
$query->bindValue(":totalobra", "$totalobra");
$query->bindValue(":totalproducao", "$totalproducao");
$query->bindValue(":totalcusto", "$totalcusto");
$query->bindValue(":totalcustodois", "$totalcustodois");
$query->execute();

echo 'Salvo com Sucesso'; 

?>