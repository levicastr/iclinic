<?php
	include_once('../classes/funcionarios.php');
	$a = new funcionarios();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Funcionário</title>
     
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
            <form method="post" action="adicionar_funcionario.php">
                <h1>Cadastro do Funcionário</h1>
                
                <fieldset>
                    <legend>
                        <h2>Dados do Funcionário </h2>
                    </legend>

                    <div class="field">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" id="nome" required>
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <label for="date">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" id="data_nascimento" required>
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
                    <div class="field">
                            <label for="address">Endereço</label>
                            <input type="text" name="endereco" required>
                    </div> 
                    <div class="field-group">
                        <div class="field">
                            <label for="number">Número</label>
                            <input type="number" name="numero" required>
                        </div>  
                        <div class="field">
                          <label for="bairro">Bairro</label>
                           <input type="text" name="bairro" id="bairro" required>
                        </div>
                    </div>
                    <div class="field-group"> 
                        <div class="field">
                            <label for="state">Estado</label>
                            <select name="uf" required>
                            <option value="">Selecione o Estado</option>
                            </select>
                            <input type="hidden" name="state">
                        </div>   
                        <div class="field">
                            <label for="city">Cidade</label>
                            <select name="city" disabled required> 
                            <option value="" name="cidade">Selecione a cidade</option> 
                            </select>
                        </div>   
                    </div>
                    <div class="field-group">
                        <div class="field">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" required>
                        </div>
                        <div class="field"> 
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
	@$endereco = $_POST['endereco'];
    @$numero= $_POST['numero'];
    @$bairro = $_POST['bairro'];
	@$estado = $_POST['state'];
	@$cidade = $_POST['cidade'];
    @$telefone = $_POST['telefone'];
    
	if($nome != ''){
		$a->adicionar_funcionarios($nome, $data_nascimento, $CPF, $RG, $endereco, $numero, $bairro, $estado, $cidade,
		  $telefone);
	}
?>
<script src="../scripts/create-point.js"></script>
</body>
</html>		

