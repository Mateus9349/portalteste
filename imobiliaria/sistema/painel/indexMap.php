<?php
    require("../bd.php");
    
    if(isset($_GET['a'])){
        $sql = sprintf("INSERT INTO imovel (titulo, lat, lng) VALUE ('%s', '%s','%s')",$_POST['titulo'], $_POST['lat'], $_POST['long']);
        
        $query = $mysqli->query($sql);
    }
    
    $sql = "SELECT id, titulo, lat, lng FROM imovel";
    $query = $mysqli->query($sql);
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
                        echo "imoveis.push({id:".$dados['id'].",titulo:'".$dados['titulo']."',lat:'".$dados['lat']."', long:'".$dados['lng']."'});";
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
                             
                                  '<span>Local:</span><h3>'+imovel.titulo+'</h3>'+
                                  '<span>Latitude:</span><h3><h3>'+imovel.lat+'</h3>'+
                                  '<span>Longitude:</span><h3><h3>'+imovel.long+'</h3>'+
                                  '<a href="'+imovel.id+'"></a>'+
                                  '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm" onclick="buscarImovel(imovel.id)">Editar</button>'+
                                  '</div>';
                    
                    var marker = new google.maps.Marker({
                        position : new google.maps.LatLng(imovel.lat, imovel.long),
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
         <a href="index.php?pagina=locais">Volta Para Locais de Coleta</a><br><br>

        <a href="cadastrar.php" type="button" class="btn btn-primary btn-flat btn-pri" ><i class="fa fa-plus" aria-hidden="true"></i>Cadastrar Nome Do Local</a>
        <br><br>
        <div id="mapa">
        
        </div>
    </body>
</html>

