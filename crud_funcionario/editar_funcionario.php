<?php
	include_once('../classes/funcionarios.php');
	
	@$id = $_GET['id'];
	$a = new funcionarios();
	@$todos = $a->funcionario_por_id($id);
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
	   <form method="post" action="editar_funcionario.php">
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
	<div class="field">
        <label for="address">Endereço</label>
        <input type="text" name="endereco" maxlength="120" value="<?= $funcionarios['endereco'] ?>" required>
    </div> 
    </tr>                
	<tr>
	<div class="field-group">
        <div class="field">
            <label for="number">Número</label>
            <input type="number" name="numero" maxlength="120" value="<?= $funcionarios['numero'] ?>" required>
        </div>  
        <div class="field">
            <label for="bairro">Bairro</label>
            <input type="text" name="bairro" id="bairro" maxlength="120" value="<?= $funcionarios['bairro'] ?>" required>
        </div>
    </div>
	</tr>
	<tr>
    <div class="field-group"> 
        <div class="field">
            <label for="state">Estado</label>
            <select name="uf" required>
                <option n maxlength="120" value="<?= $funcionarios['state'] ?>"><?= $funcionarios['estado'] ?></option>
            </select>
            <input type="hidden" name="state" maxlength="120" value="<?= $funcionarios['estado'] ?>" required>
        </div>   
        <div class="field">
            <label for="city">Cidade</label>
            <select name="city" disabled required> 
                <option value="" name="city" maxlength="120" value="<?= $funcionarios['cidade'] ?>" required><?= $funcionarios['cidade'] ?></option> 
            </select>
        </div>   
    </div>
	</tr>
	<tr>
    <div class="field-group">
        <div class="field">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" maxlength="120" value="<?= $funcionarios['telefone'] ?>"required>
            </div>
            <div class="field"> 
            </div>   
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
	@$endereco = $_POST['endereco'];
	@$numero= $_POST['numero'];
	@$bairro = $_POST['bairro'];
    @$estado = $_POST['state'];
    @$cidade = $_POST['city'];
    @$telefone = $_POST['telefone'];
    
	if($id != ''){
		$a->editar_funcionarios($id, $nome,$data_nascimento, $CPF,$RG,$endereco,$numero,$bairro,$estado,$cidade, $telefone);
	}	
?>
	<script src="../scripts/create-point.js"></script>	
</body>
</html>