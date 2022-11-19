<?php
	include_once('../classes/prontuario.php');
	$a = new prontuario();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Prontuario</title>
     
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
                <img src="../login.images/logo_iclinic.jpeg"  alt="logomarca">
              <div>
                <input type="button" value="voltar" onclick="history.go(-1)">
              </div>
            </header>     
            <form method="post" action="adicionar_prontuario.php">
                <h1>Cadastro do Prontuário</h1>
                
                <fieldset>
                    <legend>
                        <h2>Dados do Prontuário</h2>
                    </legend>

                    <div class="field">
                        <label for="name">Nome</label>
                        <input type="text" name="nome" id="nome" required>
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
                            <label for="date">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" id="data_nascimento" required>
                        </div>
                        <div class="field"> 
						   <label for="date">Data de Registro</label>
                            <input type="date" name="data_registro" id="data_registro" required>
                        </div>   
					</div>
					
                    <div class="field_real">
                        <label for="address">Sintomas</label>						
						<textarea name="sintomas" id="" cols="30" rows="10" required></textarea>
					</div>

                    <div class="field_real">
                        <label for="address">Histórico de Saúde</label>						
						<textarea name="historico_saude" id="" cols="30" rows="10" required></textarea>
					</div>
					
                    <div class="field_real">
                        <label for="uso">Medicações em Uso</label>
						<textarea name="uso_medicacoes" id="" cols="30" rows="10" required></textarea>
                    </div>   
                    
                    <div class="field_real">
                        <label for="alergico">Alérgico a Medicações</label>
                        <textarea name="alergico_medicacao" id="" cols="30" rows="10" required></textarea>
					</div> 
					
                    <div class="field_real">
                        <label for="prescricao">Prescrição Médica</label>
                        <textarea name="prescricao_medica" id="" cols="30" rows="10" required></textarea>
					</div>  
					 
                    <div class="field_real">
                        <label for="exames_pacientes">Exames indicados para o Paciente</label>
						<textarea name="exames_indicados" id="" cols="30" rows="10" required></textarea>
                    </div>   
                   
                    <div class="field_real">
                        <label for="telefone">Estado do Paciente</label>
                        <textarea name="estado_paciente" id="" cols="30" rows="10" required></textarea>
                    </div>
                    
                </fieldset>

                <button type="submit" value="Enviar"> Cadastrar </button>

            </form>       
          
        </div>
    </div> 
<?php 
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
	
	if($nome != ''){
        $a-> adicionar_prontuario($nome, $data_nascimento, $CPF, $RG, $data_registro, $sintomas, $historico_saude,
         $uso_medicacoes, $alergico_medicacao, $prescricao_medica, $exames_indicados, $estado_paciente);
	}
?>
</body>
</html>