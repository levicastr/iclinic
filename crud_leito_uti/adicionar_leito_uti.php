<?php
	include_once('../classes/leito_uti.php');
	$a = new leito_uti();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro leito</title>
     
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
            <form method="post" action="adicionar_leito_uti.php">
                <h1>Cadastro do paciente no leito</h1>
                
                <fieldset>
                    <legend>
                        <h2>Dados do paciente </h2>
                    </legend>
                    <div class="field">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" required>
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
                            <label for="address">Data de entrada</label>
                            <input type="date" name="data_entrada" required>
                        </div>
                        <div class="field">
                            <label for="data_saida">Data de saída</label>
                            <input type="date" name="data_saida" >
                        </div>   
                    </div>
                </fieldset>
                <button type="submit" value="Enviar"> cadastrar </button>
            </form>        
        </div>
    </div> 
<?php 
   @$nome = $_POST['nome'];
   @$CPF = $_POST['CPF'];
   @$RG = $_POST['RG'];
   @$data_entrada = $_POST['data_entrada'];
   @$data_saida = $_POST['data_saida'];
   
	if($CPF != ''){
		$a->adicionar_leito_uti( $nome,$RG,$CPF,$data_entrada,$data_saida);
	}
?>
 </body>
</html>
		