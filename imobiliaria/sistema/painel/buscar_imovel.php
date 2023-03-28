<?php
require("../bd.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT id,titulo, lat, lng FROM imovel WHERE id = $id";
    $query = $mysqli->query($sql);
    $imovel = $query->fetch_assoc();
    echo json_encode($imovel);
    exit;
}
?>