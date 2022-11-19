<?php
	include_once('../classes/paciente.php');
	$id_paciente = $_GET['id'];
	
	$a = new Paciente();
	$a->deletar_paciente($id);
?>