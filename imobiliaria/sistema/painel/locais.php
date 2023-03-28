<?php 
require_once("verificar.php");
require_once("../conexao.php");
//require("../bd.php");
$pag = 'locais';







//maps
//AIzaSyDAwwRsZOzOIj8Fl0bqE2ldYGeiSu0U67Q   api google maps

//if(isset($_GET['a'])){
	//$sql = sprintf("INSERT INTO imovel (titulo, lat, lng) VALUE ('%s', '%s','%s')",$_POST['titulo'], $_POST['lat'], $_POST['long']);
	
	//$query = $mysqli->query($sql);
///}

//$sql = "SELECT id, titulo, lat, lng FROM imovel";
//$query = $mysqli->query($sql);
//



 ?>

 <button onclick="inserir()" type="button" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Novo Local De Coleta</button>

<div class="bs-example widget-shadow" style="padding:15px" id="listar">
	
</div>




<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="">Coletas - Inserir Local De Coleta</h4>
				<button id="btn-fechar" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" id="form">
				<div class="modal-body">

				<div class="row">
					
				<div class="col-md-2">
						<div class="form-group">
    					<label>ID do Local</label>
    					<input type="text" class="form-control" name="id" id="id" onkeyup="preencherCampos()">




  						</div>
					</div>


						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Nome do Local</label> 
								<input type="text" class="form-control" name="local" id="local" required> 
							</div>						
						</div>


						<div class="col-md-4">						
							<div class="form-group"> 
								<label>Localização</label> 
								<input type="text" class="form-control" name="comunidade" id="comunidade" required placeholder="comunidade/distrito/rio/igarapé"> 
							</div>						
						</div>



						<div class="col-md-2">						
							<div class="form-group"> 
								<label>Municipio/UF</label> 
								<select class="form-control" name="municipio" id="municipio" required>
									<option value="Apui-AM">Apui-AM</option>
									
								</select> 
							</div>						
						</div>

						


						


					</div>

					<div class="row">
					<div class="col-md-5">						
							<div class="form-group"> 
								<label>Latitude</label> 
								<input type="text" class="form-control" name="lat" id="lat" required> 
							</div>						
						</div>

					
						<div class="col-md-5">						
							<div class="form-group"> 
								<label>Longitude</label> 
								<input type="text" class="form-control" name="lon" id="lon" required> 
							</div>						
						</div>

						

						<div class="col-md-2">
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
						<div class="col-md-12">
							<div class="form-group"> 
								<label>Descrição <small>(Max 500 Caracteres)</small></label> 
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

<br><br>


<script>
function buscarImovel(id) {
    //Faz uma requisição AJAX para o servidor passando o ID do imóvel
    $.ajax({
        url: 'buscar_imovel.php',
        data: { id: id },
        type: 'GET',
        dataType: 'json',
        success: function(imovel) {
            //Atualiza os campos do formulário com as informações retornadas
			$("#id").val(imovel.id);
            $("#local").val(imovel.titulo);
            $("#lat").val(imovel.lat);
            $("#lon").val(imovel.lng);
        }
    });
}
</script>





<!--index.php-->

<?php
    require("../bd.php");
    
    if(isset($_GET['a'])){
        $sql = sprintf("INSERT INTO imovel (titulo, lat, lng) VALUE ('%s', '%s','%s')",$_POST['titulo'], $_POST['lat'], $_POST['lng']);
        
        $query = $mysqli->query($sql);
    }
    
    $sql = "SELECT id, titulo, lat, lng FROM imovel";
    $query = $mysqli->query($sql);

	//if(isset($_GET['id'])){
        //$id = $_GET['id'];
        //$sql = "SELECT * FROM imovel WHERE id = $id";
        //$query = $mysqli->query($sql);
       // $imovel = $query->fetch_assoc();

       // echo json_encode($imovel);
   // }

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$sql = "SELECT titulo, lat, lng FROM imovel WHERE id = $id";
		$query = $mysqli->query($sql);
		$imovel = $query->fetch_assoc();

		echo json_encode($imovel);
	}
	
?>




<!DOCTYPE html>
<html>
    <head>

        <title><?php echo $nome_site; ?></title>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDAwwRsZOzOIj8Fl0bqE2ldYGeiSu0U67Q&sensor=true"></script>
        
        <script>
            var map;
            var imoveis = [];
            
            <?php 
                if($query->num_rows > 0)
                    while($dados = $query->fetch_array()){
                        echo "imoveis.push({id:".$dados['id'].",titulo:'".$dados['titulo']."',lat:'".$dados['lat']."', lng:'".$dados['lng']."'});";
                    }
            ?>
            
            
            function init(){
                var param = {
                    center : new google.maps.LatLng(51.508742, -0.120850),
                    zoom : 12,
                    mapTypeId : google.maps.MapTypeId.ROADMAP
                };
                
                map = new google.maps.Map(document.getElementById("mapa"), param);
                
                if(navigator.geolocation){
                    navigator.geolocation.getCurrentPosition(function(position){
                        localizacao = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                        
                        map.setCenter(localizacao);
                    });
                }
                
                for(imovel of imoveis){



					
                    
                    var html = '<div style="width:300px;">'+

								  '<span>ID:</span><h3>'+imovel.id+'</h3>'+
                                  '<span>Nome do Local:</span><h3>'+imovel.titulo+'</h3>'+
                                  '<span>Latitude:</span><h3><h3>'+imovel.lat+'</h3>'+
                                  '<span>Longitude:</span><h3><h3>'+imovel.lng+'</h3>'+
								
                                  '<a href="'+imovel.id+'"></a>'+
								  '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm" onclick="buscarImovel(imovel.id)">Cadastrar</button>'+
                                  '</div>';
                    
                    var marker = new google.maps.Marker({
                        position : new google.maps.LatLng(imovel.lat, imovel.lng),
                        icon:'../imagens/icone.png',
                        html: html
                    });
                    
                    marker.setMap(map);
                    
                    var info = new google.maps.InfoWindow({
                        content : "Carregando..."
                    });
                    
                    google.maps.event.addListener(marker, 'click', function(){
                        info.setContent(this.html);
                        info.open(map, this);
                    });
                }
                
            }
            
            google.maps.event.addDomListener(window, 'load', init);
        </script>
        
        <style>
            #mapa {
                width:100%;
                height:500px;
                border:1px solid black;
            }
        </style>
        
    </head>
    <body>
		
        <a href="cadastrar.php" type="button" class="btn btn-primary btn-flat btn-pri" ><i class="fa fa-plus" aria-hidden="true">
		
	   </i>Cadastrar Nome Do Local</a>
        <br><br>
        <div id="mapa">
        
        </div>
    </body>
</html>






<!--index.php-->
























<!-- ModalMostrar -->
<div class="modal fade" id="modalMostrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id=""><span id=""> </span> <small><span class="ml-4"><span id=""> </span> </span> </small>Coletas - Local Da Coleta</h4>
				<button id="btn-fechar-excluir" type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -20px">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
				<div class="modal-body">			
					


				<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Nome do Local: </b></span>
							<span id="local_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Comunidade: </b></span>
							<span id="comunidade_mostrar"></span>
						</div>
					</div>


					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-4">							
							<span><b>Municipio: </b></span>
							<span id="municipio_mostrar"></span>							
						</div>

						<div class="col-md-5">							
							<span><b>Data de Cadastro: </b></span>
							<span id="data_cad_mostrar"></span>
						</div>				



						<div class="col-md-3">							
							<span><b>Responsavel: </b></span>
							<span id="corretor_mostrar"></span>
						</div>


					</div>


					

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-6">							
							<span><b>Latitude: </b></span>
							<span id="lat_mostrar"></span>							
						</div>
						<div class="col-md-6">							
							<span><b>Longitude: </b></span>
							<span id="lon_mostrar"></span>
						</div>
					</div>		

					

					<div class="row" style="border-bottom: 1px solid #cac7c7;">
						<div class="col-md-12">							
							<span><b>Descrição: </b></span>
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