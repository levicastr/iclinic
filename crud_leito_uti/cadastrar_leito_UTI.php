<?php
	include_once('classes/leito_UTI.php');
	$a = new leito_uti();
?>
<?php 
   @$CPF = $_POST['CPF'];
   @$RG = $_POST['RG'];
   @$data_entrada = $_POST['data_entrada'];
   @$data_saida = $_POST['data_saida'];
   
	if($CPF != ''){
		$a->adicionar_leito_uti( $RG,$CPF,$data_entrada,$data_saida);
	}
	else{
		echo "Preencha os campos do formulario!";
	}
?>
		