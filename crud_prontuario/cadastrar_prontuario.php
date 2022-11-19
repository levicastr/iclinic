<?php
	include_once('classes/prontuario.php');
	$a = new prontuario();
?>

<?php 
	@$nome = $_POST['nome'];
	@$data_nascimento = $_POST['data_nascimento'];	
    @$CPF = $_POST['CPF'];
    @$RG = $_POST['RG'];
    @$data_registro= $_POST['data_registro'];
	@$sintomas = $_POST['sintomas'];
	@$historico_saude = $_POST['historico_saude'];
    @$uso_meedicacoes= $_POST['uso_meedicacoes'];
    @$alergico_medicacoes = $_POST['alergico_medicacoes'];
	@$prescricao_medica = $_POST['prescricao_medica'];
	@$exames_indicados = $_POST['exames_indicados'];
    @$estado_paciente = $_POST['estado_paciente'];
	
	if($nome != ''){
        $a->adicionar_paciente($nome, $data_nascimento, $CPF, $RG, $data_registro, $sintomas, $historico_saude,
         $uso_meedicacoes, $alergico_medicacoes, $prescricao_medica, $exames_indicados, $estado_paciente);
	}
	else{
		echo "Preencha os campos do formulario!";
	}
?>