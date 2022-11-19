<?php
	include_once('classes/paciente.php');
	$a = new Paciente();
?>

<?php 
	@$nome = $_POST['nome'];
	@$data_nasciemnto = $_POST['data_nascimento'];
    @$CPF = $_POST['CPF'];
    @$RG = $_POST['RG'];
	@$responsavel_nome = $_POST['responsavel_nome'];
	@$CPF_responsavel = $_POST['CPF_responsavel'];
    @$RG_responsavel = $_POST['RG_responsavel'];
	@$endereco = $_POST['endereco'];
	@$numero= $_POST['numero'];
	@$bairro = $_POST['bairro'];
	 @$estado = $_POST['estado'];
    @$cidade = $_POST['cidade'];
    @$telefone = $_POST['telefone'];
	if($nome != ''){
		$a->adicionar_paciente($nome, $CPF, $RG, $responsavel_nome, $CPF_responsavel, $RG_responsavel, $endereco , 
		    $numero, $bairro, $estado, $cidade, $telefone);
	}
	else{
		echo "Preencha os campos do formulario!";
	}
?>
		
