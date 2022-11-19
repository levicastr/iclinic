<?php
  
	include_once('../classes/funcionarios.php');
    $id= $_GET['id'];
	
    $a = new funcionarios();
	$a->deletar_funcionarios($id);
?>

