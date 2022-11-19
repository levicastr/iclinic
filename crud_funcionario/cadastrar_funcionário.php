<?php
	include_once('classes/funcionário.php');
	$a = new funcionario();
?>

<?php 
	@$nome = $_POST['nome'];
	@$data_nascimento = $_POST['data_nascimento'];	
	@$CPF = $_POST['CPF'];
	@$RG = $_POST['RG'];
	@$endereco = $_POST['endereco'];
    @$numero= $_POST['numero'];
    @$bairro = $_POST['bairro'];
	@$estado = $_POST['estado'];
	@$cidade = $_POST['cidade'];
    @$telefone = $_POST['telefone'];
	@$email = $_POST['email'];
	@$senha = $_POST['senha'];
	if($nome != ''){
		$a->adicionar_paciente($nome, $data_nascimento, $CPF, $RG, $endereco, $numero, $bairro, $estado, $cidade,
		  $telefone, $email, $senha);
	}
	else{
		echo "Preencha os campos do formulario!";
	}
?>
		
