<?php
	include_once('../classes/marcar_consultas.php');
	
	@$id= $_GET['id'];
	$a = new marcar_consultas();
	@$todos = $a->marcar_consultas_por_id($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
     
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
	   <form method="post" action="editar_consulta.php">
       <h1>Editar Funcionário</h1>
	   <fieldset>
	   <legend>
            <h2> Editar Dados do Funcionário </h2>
        </legend>		
<?php
	if ($id != ""){
	foreach($todos as $funcionarios){ ?>
	<input type="hidden" name="id" value="<?php echo $funcionarios['id'] ?>">
	<table border ="0 ">
	<tr>
	<div class="field">
        <label for="name">Nome</label>
        <input type="text" name="nome" maxlength="120" value="<?= $funcionarios['nome'] ?>" required>
    </div>
	</tr>
	<tr>
	<div class="field-group">
       <div class="field">
            <label for="date">Data de Nascimento</label>
			<input type="date" name="data_nascimento" maxlength="120" value="<?= $funcionarios['data_nascimento'] ?>" required>
        </div>                 
	    <div class="field"> 
        </div>  
	 </div>	
	</tr> 
    <tr>             
    <div class="field-group">
        <div class="field">
            <label for="CPF">CPF</label>
            <input type="text" name="CPF" maxlength="120" value="<?= $funcionarios['CPF'] ?>" required>
        </div>
        <div class="field">
            <label for="RG">RG</label>
            <input type="text" name="RG" maxlength="120" value="<?= $funcionarios['RG'] ?>" required>
        </div>   
    </div>
    </tr>                 
	<tr>               
	<tr>
	<div class="field-group">
        <div class="field">
            <label for="date">Data da Conculta</label>
            <input type="date" name="data_consulta" maxlength="120" value="<?= $funcionarios['data_consulta'] ?>" required>
        </div>  
        <div class="field">
            <label for="Tipo de Consulta">Bairro</label>
            <input type="text" name="tipo" id="tipo" maxlength="120" value="<?= $funcionarios['tipo'] ?>" required>
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
     @$data_nascimento = $_POST['data_nascimento'];
     @$CPF = $_POST['CPF'];
     @$RG = $_POST['RG'];
     @$data_consulta = $_POST['data_consulta'];
     @$tipo = $_POST['tipo'];
    
	if($id != ''){
		$a->editar_marcar_consultas($id,$nome, $data_nascimento, $CPF, $RG, $data_consulta, $tipo);
	}
?>
</body>
</html>