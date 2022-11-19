<?php
	include_once('../classes/marcar_consultas.php');
	$a = new marcar_consultas();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Consulta</title>
     
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
            <form method="post" action="adicionar_consultas.php">
                <h1>Marcar consulta</h1>
                
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
                            <label for="address">Data de Nascimento</label>
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
                            <label for="address">Data da Consulta</label>
                            <input type="date" name="data_entrada" required>
                        </div>
                        <div class="field">
                            <label for="tipo">Tipo da Consulta</label>
                            <input type="text" name="tipo" required >
                        </div>   
                    </div>
                </fieldset>
                <button type="submit" value="Enviar"> Cadastrar Consulta </button>
            </form>        
        </div>
    </div> 
<?php 
   @$nome = $_POST['nome']; 
   @$data_nascimento = $_POST['data_nascimento'];
   @$CPF = $_POST['CPF'];
   @$RG = $_POST['RG'];
   @$data_consulta = $_POST['data_consulta'];
   @$tipo = $_POST['tipo'];
   
	if($CPF != ''){
		$a->adicionar_consultas($nome, $data_nascimento, $CPF, $RG, $data_consulta, $tipo);
	}
?>
 </body>
</html>