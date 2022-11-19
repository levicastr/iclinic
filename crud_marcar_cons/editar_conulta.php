<?php
	include_once('classes/marcar_consultas.php');
	
	@$id= $_GET['id'];
	$a = new consulta();
	@$todos = $a->leito_por_id($id);
?>


<?php 
	 @$nome = $_POST['nome']; 
     @$data_nascimento = $_POST['data_nascimento'];
     @$CPF = $_POST['CPF'];
     @$RG = $_POST['RG'];
     @$data_consulta = $_POST['data_consulta'];
     @$tipo = $_POST['tipo'];
    
	if($nome != ''){
		$a->editar_consulta($nome, $data_nascimento, $CPF, $RG, $data_consulta, $tipo);
	}
	else{
		echo "Edite os campos do formulario!";
	}
?>