<?php
	include_once('../classes/marcar_consultas.php');
    $id = $_GET['id'];
	
    $a = new marcar_consultas();
	$a->deletar_marcar_consultas($id);
?>