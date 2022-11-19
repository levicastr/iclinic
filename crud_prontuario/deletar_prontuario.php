<?php
	include_once('../classes/prontuario.php');
    $id = $_GET['id'];
	
    $a = new prontuario();
	$a->deletar_prontuario($id);
?>