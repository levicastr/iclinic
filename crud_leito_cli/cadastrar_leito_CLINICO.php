<?php
	include_once('classes/leito_CLINICO.php');
	$a = new leito_clinico();
?>
<?php 
   @$CPF = $_POST['CPF'];
   @$RG = $_POST['RG'];
   @$data_entrada = $_POST['data_entrada'];
   @$data_saida = $_POST['data_saida'];
   
	if($CPF != ''){
		$a->adicionar_leito_CLINICO( $RG,$CPF,$data_entrada,$data_saida);
	}
	else{
		echo "Preencha os campos do formulario!";
	}
?>
		