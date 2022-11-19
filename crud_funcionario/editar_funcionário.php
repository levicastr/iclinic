a<?php
	include_once('classes/funcionário.php');
	
	@$id_paciente = $_GET['id_funcionário'];
	$a = new Paciente();
	@$todos = $a->paciente_por_id($id_funcionário);
?>
<html>
<head></head>
<body>
<h3>Editar Paciente</h3>
<form method="post" action="editar_funcionário.php"> 
<?php
	if ($id != ""){
	foreach($todos as $aluno){ ?>
	<input type="hidden" name="id_funcionário" value="<?php echo $funcionário['id_funcionário'] ?>">
	<table border ="0 ">
		<tr>
			<td>Nome:</td>
			<td>
	<input type="text" name="nome" maxlength="120" value="<?= $nome['nome'] ?>"></td>
	</tr>
	<tr>
	<td>data_nascimento:</td>
	<td>
	<input type="text" id="data_nascimento" name="data_nascimento" maxlength="15" value="<?php echo $data_nascimento['data_nascimento'] ?>"></td>
	</tr>
	<tr>
	<td>CPF:</td>
	<td>
	<input type="CPF" name="CPF" value="<?php echo $CPF['CPF'] ?>"></td></tr>
	<tr>
    <tr>
	<td>RG:</td>
	<td>
	<input type="text" name="RG" maxlength="15" value="<?php echo $RG['RG'] ?>"></td>
	</tr>
    <td>telefone:</td>
	<td>
	<input type="text" id="telefone" name="telefone" maxlength="15" value="<?php echo $telefone['telefone'] ?>"></td>
	</tr>
    </td>email:</td>
	<td>
	<input type="text" id="email" name="email" maxlength="15" value="<?php echo $email['email'] ?>"></td>
	</tr>
    <td>senha:</td>
	<td>
	<input type="text" id="senha" name="senha" maxlength="15" value="<?php echo $RG_responsavel['senha'] ?>"></td>
	</tr>
    <td>rua:</td>
	<td>
	<input type="text" id="rua" name="rua" maxlength="15" value="<?php echo $endereço['rua'] ?>"></td>
	</tr>
    <td>numero:</td>
	<td>
	<input type="text" id="numero" name="numero" maxlength="15" value="<?php echo $numero['numero'] ?>"></td>
	</tr>
    <td>bairro:</td>
	<td>
	<input type="text" id="bairro" name="bairro" maxlength="15" value="<?php echo $bairro['bairro'] ?>"></td>
	</tr>
    <td>estado:</td>
	<td>
	<input type="text" id="estado" name="estado" maxlength="15" value="<?php echo $estado['estado'] ?>"></td>
	</tr>
    <td>cidade:</td>
	<td>
	<input type="text" id="cidade" name="cidade" maxlength="15" value="<?php echo $cidade['cidade'] ?>"></td>
	</tr>
    
	<td colspan='2'align="center">
	<input type="submit" value="Enviar">
	</td>
	</tr>
<?php } } ?>
</form>

<?php 
	@$id_paciente = $_POST['id_funcionario'];
	@$nome = $_POST['nome'];
	@$telefone = $_POST['telefone'];
    @$rua = $_POST['rua'];
    @$cidade = $_POST['cidade'];
    @$estado = $_POST['estado'];
    @$bairro = $_POST['bairro'];
    @$numero= $_POST['numero'];
    @$CPF = $_POST['CPF'];
    @$RG = $_POST['RG'];
    @$senha = $_POST['senha'];
    @$data_nascimento = $_POST['data_nascimento'];
    @$email = $_POST['email'];

    
    
    
	if($nome != ''){
		$a->editar_funcionário($id_funcionário, $nome,$CPF,$RG,$telefone,$rua,$cidade,$estado, $bairro,$numero,$email,$senha,$data_nascimento);
	}
	else{
		echo "Edite os campos do formulario!";
	}
?>
		
</body>
</html>