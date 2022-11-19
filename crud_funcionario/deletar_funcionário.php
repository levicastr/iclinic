<?php
	include_once('classes/funcionário.php');
    $id = $_GET['id'];
	
    $a = new Funcionario();
	$a->deletar_aluno($id);
?>