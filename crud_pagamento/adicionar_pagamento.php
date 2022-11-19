<?php
	include_once('../classes/pagamento.php');
	$a = new pagamento();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
     
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
                <img src="../login.images/logo_iclinic.jpeg"  alt="logomarca">
              <div>
                <input type="button" value="voltar" onclick="history.go(-1)">
              </div>
            </header>     
            <form method="post" action="adicionar_pagamento.php">
                <h1>Pagamento</h1>
                
                <fieldset>
                    <legend>
                        <h2>Dados para Pagamento </h2>
                    </legend>
                    <div class="field">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" required>
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <label for="date">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" required>
                        </div>
                        <div class="field">
                        </div>
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <label for="CPF">CPF</label>
                            <input type="text" name="CPF" required>
                        </div>
                        <div class="field">
                            <label for="RG">RG</label>
                            <input type="text" name="RG" required>
                        </div>   
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <label for="date">Data de Pagamento</label>
                            <input type="date" name="data_pagamento" required>
                        </div>
                        <div class="field">
                            <label for="valor">Valor do Pagamento</label>
                            <input type="text" name="valor" required>
                        </div>   
                    </div>
                </fieldset>
                <button type="submit" value="Enviar"> cadastrar </button>
            </form>        
        </div>
    </div> 
<?php 
   @$nome = $_POST['nome']; 
   @$data_nascimento = $_POST['data_nascimento'];
   @$CPF = $_POST['CPF'];
   @$RG = $_POST['RG'];
   @$data_pagamento = $_POST['data_pagamento'];
   @$valor = $_POST['valor'];
  
	if($CPF != ''){
		$a->adicionar_pagamento($nome, $data_nascimento, $CPF, $RG, $data_pagamento, $valor);
	}
?>
</body>
</html>