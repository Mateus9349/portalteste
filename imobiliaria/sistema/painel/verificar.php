<?php 
@session_start();
if(@$_SESSION['id_usuario'] == "" or  @$_SESSION['nivel_usuario'] == "Cliente"){
	echo "<script>window.location='../index.php'</script>";
	}
?>
