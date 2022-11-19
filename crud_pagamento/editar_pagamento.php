<?php
	include_once('../classes/pagamento.php');
	
	@$id= $_GET['id'];
	$a = new pagamento();
	@$todos = $a->pagamento_por_id($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pagamento</title>
     
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
	   <form method="post" action="editar_pagamento.php">
       <h1>Editar Pagamento</h1>
	   <fieldset>
	   <legend>
            <h2> Editar Dados do Pagamento </h2>
        </legend>		
<?php
	if ($id != ""){
	foreach($todos as $pagamento){ ?>
	<input type="hidden" name="id" value="<?php echo $pagamento['id'] ?>">
	<table border ="0 ">
	<tr>
	<div class="field">
        <label for="name">Nome</label>
        <input type="text" name="nome" maxlength="120" value="<?= $pagamento['nome'] ?>" required>
    </div>
	</tr>
	<tr>
	<div class="field-group">
       <div class="field">
            <label for="date">Data de Nascimento</label>
			<input type="date" name="data_nascimento" maxlength="120" value="<?= $pagamento['data_nascimento'] ?>" required>
        </div>                 
	    <div class="field"> 
        </div>  
	 </div>	
	</tr> 
    <tr>             
    <div class="field-group">
        <div class="field">
            <label for="CPF">CPF</label>
            <input type="text" name="CPF" maxlength="120" value="<?= $pagamento['CPF'] ?>" required>
        </div>
        <div class="field">
            <label for="RG">RG</label>
            <input type="text" name="RG" maxlength="120" value="<?= $pagamento['RG'] ?>" required>
        </div>   
    </div>
    </tr>                               
	<tr>
	<div class="field-group">
        <div class="field">
            <label for="number">Data do pagamento</label>
            <input type="date" name="data_pagamento" maxlength="120" value="<?= $pagamento['data_pagamento'] ?>" required>
        </div>  
        <div class="field">
            <label for="bairro">Valor do Pagamento</label>
            <input type="text" name="valor" id="valor" maxlength="120" value="<?= $pagamento['valor'] ?>" >
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
	 @$data_pagamento = $_POST['data_pagamento'];
     @$valor = $_POST['valor'];
    
	if($id != ''){
		$a->editar_pagamento($id,$nome, $data_nascimento, $CPF, $RG,$data_pagamento, $valor);
	}	
?>
</body>
</html>