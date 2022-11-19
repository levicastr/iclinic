<?php
	include_once('../classes/leito_clinico.php');
	
	@$id = $_GET['id'];
	$a = new leito_clinico();
	@$todos = $a->leito_clinico_por_id($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Leito</title>
     
    <link rel="stylesheet" href="../styles/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../styles/main.css"> 
    <link rel="stylesheet" href="../styles/create-point.css">
    
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
	   <form method="post" action="editar_leito_clinico.php">
       <h1>Editar Leito</h1>
	   <fieldset>
	   <legend>
            <h2> Editar Dados do Paciente </h2>
        </legend>		
<?php
	if ($id != ""){
	foreach($todos as $leito){ ?>
	<input type="hidden" name="id" value="<?php echo $leito['id'] ?>">
	<table border ="0 ">
	<tr>
	<div class="field">
        <label for="name">Nome</label>
        <input type="text" name="nome" maxlength="120" value="<?= $leito['nome'] ?>" required>
    </div>
	</tr>
    <tr>             
    <div class="field-group">
        <div class="field">
            <label for="CPF">CPF</label>
            <input type="text" name="CPF" maxlength="120" value="<?= $leito['CPF'] ?>" required>
        </div>
        <div class="field">
            <label for="RG">RG</label>
            <input type="text" name="RG" maxlength="120" value="<?= $leito['RG'] ?>" required>
        </div>   
    </div>
    </tr>                               
	<tr>
	<div class="field-group">
        <div class="field">
            <label for="number">Data de Entrada</label>
            <input type="date" name="data_entrada" maxlength="120" value="<?= $leito['data_entrada'] ?>" required>
        </div>  
        <div class="field">
            <label for="bairro">Data de Saída</label>
            <input type="date" name="data_saida" id="bairro" maxlength="120" value="<?= $leito['data_saida'] ?>" >
        </div>
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
    @$data_entrada = $_POST['data_entrada'];
    @$data_saida = $_POST['data_saida'];
      
	if($id != ''){
		$a->editar_leito_clinico($id,$nome,$CPF,$RG,$data_entrada,$data_saida);
	}
	
?>	
</body>
</html>		