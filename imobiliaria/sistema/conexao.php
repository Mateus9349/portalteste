<?php
date_default_timezone_set('America/Sao_Paulo'); 


//conexao local
$usuario = 'root';
$senha = '';
$banco = 'imobiliaria';
$servidor = 'localhost';

try {
	$pdo = new PDO("mysql:dbname=$banco;host=$servidor", "$usuario", "$senha");
} catch (Exception $e) {
	echo 'Erro ao Conectar com o banco de dados! <br><br>';
	echo $e;
}








//VARIAVEIS GLOBAIS DO SISTEMA
$nome_site = 'Inatú Amazônia Painel Beta';
$email_adm = 'contato@hugocursos.com.br';



//inserir registros na tabela config
$query = $pdo->query("SELECT * FROM config");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($res);
if($total_reg == 0){
	$pdo->query("INSERT INTO config SET nome = '$nome_sistema', email = '$email_adm',  logo = 'logo.png', favicon = 'favicon.ico', logo_rel = 'logo.jpg',  relatorio = 'pdf' ");
}


//VARIAVEIS DE CONFIGURAÇÕES DA TABELA CONFIG
$query = $pdo->query("SELECT * FROM config");
$res = $query->fetchAll(PDO::FETCH_ASSOC);

$nome_sistema = $res[0]['nome'];
$email_adm = $res[0]['email'];
$tel_sistema = $res[0]['telefone'];
$end_sistema = $res[0]['endereco'];
$logo = $res[0]['logo'];
$favicon = $res[0]['favicon'];
$logo_rel = $res[0]['logo_rel'];
$relatorio_pdf = $res[0]['relatorio'];






 ?>