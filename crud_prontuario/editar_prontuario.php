<?php
	include_once('../classes/prontuario.php');
	
	@$id= $_GET['id'];
	$a = new prontuario();
	@$todos = $a->paciente_por_id($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prontuário</title>
     
    <link rel="stylesheet" href="../styles/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../styles/main.css"> 
    <link rel="stylesheet" href="../styles/prontuario.css">
    
    <link rel="stylesheet" href="../styles/responsive.css">

</head>
<body>
   <div id="page-create-point">
    <div class="content">
        <header>
            <img src="../login.images/logo_iclinic.jpeg"  alt="logomarca" >
            <div>
                <input type="button" value="voltar" onclick="history.go(-1)">
            </div>
        </header>     
	   <form method="post" action="editar_prontuario.php">
       <h1>Editar Prontuário</h1>
	   <fieldset>
	   <legend>
            <h2> Editar Dados do Prontuário </h2>
        </legend>		
<?php
	if ($id != ""){
	foreach($todos as $prontuario){ ?>
	<input type="hidden" name="id" value="<?php echo $prontuario['id'] ?>">
	<table border ="0 ">
	<tr>
	<div class="field">
        <label for="name">Nome</label>
        <input type="text" name="nome" maxlength="120" value="<?= $prontuario['nome'] ?>" required>
    </div>
	</tr>
	<tr>             
    <div class="field-group">
        <div class="field">
            <label for="CPF">CPF</label>
            <input type="text" name="CPF" maxlength="120" value="<?= $prontuario['CPF'] ?>" required>
        </div>
        <div class="field">
            <label for="RG">RG</label>
            <input type="text" name="RG" maxlength="120" value="<?= $prontuario['RG'] ?>" required>
        </div>   
    </div>
    </tr>  
	<tr>
	<div class="field-group">
       <div class="field">
            <label for="date">Data de Nascimento</label>
			<input type="date" name="data_nascimento" maxlength="120" value="<?= $prontuario['data_nascimento'] ?>" required>
        </div>                 
	    <div class="field"> 
		    <label for="date">Data de Registro</label>
			<input type="date" name="data_registro" maxlength="120" value="<?= $prontuario['data_registro'] ?>" required>
        </div>  
	 </div>	
	</tr> 
	<tr>
	<div class="field">
	<label for="namer">Sintomas</label>
	<textarea name="sintomas" id="" cols="30" rows="10" value="<?= $prontuario['sintomas'] ?>" 
	required><?= $prontuario['sintomas'] ?></textarea>
    </div>
	</tr>               
	<tr>
	<div class="field">
        <label for="name">Histórico de Saúde</label>
        <textarea name="historico_saude" id="" cols="30" rows="10" value="<?= $prontuario['historico_saude'] ?>" 
		required><?= $prontuario['historico_saude'] ?></textarea>
    </div>
	</tr>   
	<tr>
	<div class="field">
        <label for="name">Medicações em Uso</label>
        <textarea name="uso_medicacoes" id="" cols="30" rows="10" value="<?= $prontuario['uso_medicacoes'] ?>" 
		required><?= $prontuario['uso_medicacoes'] ?></textarea>
    </div>
	</tr>   
	<tr>
	<div class="field">
        <label for="name">Alérgico a Medicações</label>
        <textarea name="alergico_medicacao" id="" cols="30" rows="10" value="<?= $prontuario['alergico_medicacao'] ?>" 
		required><?= $prontuario['alergico_medicacao'] ?></textarea>
    </div>
	</tr>   
	<tr>
	<div class="field">
        <label for="name">Prescrição Médica</label>
        <textarea name="prescricao_medica" id="" cols="30" rows="10" value="<?= $prontuario['prescricao_medica'] ?>" 
		required><?= $prontuario['prescricao_medica'] ?></textarea>
    </div>
	</tr>   
	<tr>
	<div class="field">
        <label for="name">Exames indicados para o Paciente</label>
        <textarea name="exames_indicados" id="" cols="30" rows="10" value="<?= $prontuario['exames_indicados'] ?>" 
		required><?= $prontuario['exames_indicados'] ?></textarea>
    </div>
	</tr>   
	<tr>
	<div class="field">
        <label for="name">Estado do Paciente</label>
        <textarea name="estado_paciente" id="" cols="30" rows="10" value="<?= $prontuario['estado_paciente'] ?>" 
		required><?= $prontuario['estado_paciente'] ?></textarea>
    </div>
	</tr>            
    
	<br>
	<td colspan='2'align="center">
	<button type="submit" value="Enviar">Confirmar</button>
	</td>
	</tr>
<?php } } ?>
       </fieldset>   
    </div>
</div> 
</form>
<?php 
    @$id = $_POST['id'];
	@$nome = $_POST['nome'];
    @$CPF = $_POST['CPF'];
	@$RG = $_POST['RG'];
	@$data_nascimento = $_POST['data_nascimento'];	
    @$data_registro= $_POST['data_registro'];
	@$sintomas = $_POST['sintomas'];
	@$historico_saude = $_POST['historico_saude'];
    @$uso_medicacoes= $_POST['uso_medicacoes'];
    @$alergico_medicacao = $_POST['alergico_medicacao'];
	@$prescricao_medica = $_POST['prescricao_medica'];
	@$exames_indicados = $_POST['exames_indicados'];
    @$estado_paciente = $_POST['estado_paciente'];
    
	if($id != ''){
		$a->editar_prontuario($id, $nome,  $CPF, $RG, $data_nascimento, $data_registro, $sintomas, $historico_saude,
		$uso_medicacoes, $alergico_medicacao, $prescricao_medica, $exames_indicados, $estado_paciente);
	}
	
?>
		
</body>
</html>