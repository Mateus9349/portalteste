<?php

    require_once("../conexao.php");
    require("../bd.php");

    $sql = "SELECT id, titulo, lat, lng FROM imovel";
    $query = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="../imagens/icon-folha.svg" type="image/x-icon">
        <title><?php echo $nome_site; ?></title>
        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDAwwRsZOzOIj8Fl0bqE2ldYGeiSu0U67Q&sensor=true"></script>
        
        <script>
            var map;
            var markers = [];
            
            function addMarker(pos, map){
                document.getElementById("lat").value = pos.lat();
                document.getElementById("long").value = pos.lng();
                
                var marker = new google.maps.Marker({
                    position:pos,
                    animation:google.maps.Animation.BOUNCE,
                    icon:'../imagens/icone.png'
                });
                
                marker.setMap(map);
                markers.push(marker);
            }
            
            function removeMarkers(){
                for(var i = 0; i < markers.length; i++){
                    markers[i].setMap(null);
                }
            }
            
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
                
                google.maps.event.addListener(map, 'click', function(event){
                    // remover todos os markers
                    removeMarkers();
                    // adicionar um novo marker em nosso mapa
                    console.log(event.LatLng);
                    addMarker(event.latLng, map);
                });
                
            }
            
            google.maps.event.addDomListener(window, 'load', init);
        </script>
        
        <style>
            #mapa {
                width:100%;
                height:500px;
                border:1px solid black;
            }

            .b{
                border:2px solid #3A2212;
                padding: 5px;
                color:#3A2212;
             
            }

            input{
                padding: 5px;
                font-size:15px;
                
            }

          

        </style>
        
    </head>
    <body>
        <a href="index.php?pagina=indexMap"><i class="fa fa-angle-right"></i>Volta Para Mapa de Locais</a>
        <form method="post" action="indexMap.php?a=cad">
            
           <a class="b"> Nome do Local:</a> <input type="text" name="titulo" required/>
            
            <input type="hidden" name="lat" id="lat" />
            <input type="hidden" name="long" id="long" />
            
            <input type="submit" value="Cadastrar"        />
        </form>
        <br><br>
        <div id="mapa">
        
        </div>
    </body>
</html>