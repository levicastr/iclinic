<?php
  $login_cookie = $_COOKIE['login'];
  if(isset($login_cookie)){

	include_once('../classes/prontuario.php');
	//CRIANDO UM OBJETO	
	$a = new prontuario();
	//
	$todos = $a->listar_prontuario();
	
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>Prontuario</title>
    <!-- Bootstrap core CSS -->
    <link href="../btp/bootstrap.min.css" rel="stylesheet">
    <link href="../btp/style.css" rel="stylesheet">
    <link href="../paginascss/consulta.css" rel="stylesheet" > 
    
  </head>
  <body>
    <nav class="navbar navbar-expand-xl navbar-dark ">
        <img src="../login.images/logo_iclinic.jpeg" class="rounded-lg position-static"  alt="" loading="lazy">
		<a class="navbar-brand" href="#" >Iclinic</a>
		
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" ><span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        <div>
          <input type="button" value="voltar" style="color: lime; background-color: black; border: black;" onclick="history.go(-1)">
        </div>
    </nav>
    <h3>Lista de Prontuários</h3>
    <div class="table-responsive-sm">
        <table  class="table table-hover table-sm">
            <thead class="thead-dark "> 
                <tr>
                    <th class="text-center text-uppercase" scope="col">Id</th>
                    <th class="text-center text-uppercase" scope="col">Nome</th>
                    <th class="text-center text-uppercase" scope="col">data de nascimento</th>
                    <th class="text-center text-uppercase" scope="col">CPF</th>
                    <th class="text-center text-uppercase" scope="col">RG</th>
                    <th class="text-center text-uppercase" scope="col">Data de Registro</th>
                    <th class="text-center text-uppercase" scope="col">Sintomas</th>
                    <th class="text-center text-uppercase" scope="col">Histórico de Saúde</th>
                    <th class="text-center text-uppercase" scope="col">Medicações em Uso</th>  
                    <th class="text-center text-uppercase" scope="col">Alérgico Medicações</th>
                    <th class="text-center text-uppercase" scope="col">Prescrição Médica</th>
                    <th class="text-center text-uppercase" scope="col">Exames Indicados</th>
				          	<th class="text-center text-uppercase" scope="col">Estado do Paciente</th>  
                    <th class="text-center text-uppercase" scope="col" colspan="2">AÇÕES</th>
                </tr>        
	<?php		
	foreach($todos as $prontuario){
			echo "
				<tr>
					<td class='text-center'>".$prontuario['id']."</td>
					<td class='text-center'>".$prontuario['nome']."</td>
					<td class='text-center'>".$prontuario['data_nascimento']."</td>
					<td class='text-center'>".$prontuario['CPF']."</td>
					<td class='text-center'>".$prontuario['RG']."</td>
					<td class='text-center'>".$prontuario['data_registro']."</td>
					<td class='text-center'>".$prontuario['sintomas']."</td>
					<td class='text-center'>".$prontuario['historico_saude']."</td>
          <td class='text-center'>".$prontuario['uso_medicacoes']."</td>
          <td class='text-center'>".$prontuario['alergico_medicacao']."</td>
					<td class='text-center'>".$prontuario['prescricao_medica']."</td>
          <td class='text-center'>".$prontuario['exames_indicados']."</td>
          <td class='text-center'>".$prontuario['estado_paciente']."</td>
					<td class='text-center'>
					  <a href='adicionar_prontuario.php?id=".$prontuario['id']."'>Adiconar novo</a>
						<a href='editar_prontuario.php?id=".$prontuario['id']."'>Editar</a>
            <a href='deletar_prontuario.php?id=".$prontuario['id']."'>Excluir</a>
					</td>
				</tr>
			";
		}
		
	?>
</table>
  <script>
  function sair(){
        window.location.href="logout.php";
      }
  </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="btp/jquery-3.4.1.slim.min.js"></script>
    <script src="btp/popper.min.js"></script>
    <script src="btp/bootstrap.min.js"></script>
	</body>
</html>
<?php
}else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.php'>Faça Login</a> Para ver o conteúdo";
	}
?>	