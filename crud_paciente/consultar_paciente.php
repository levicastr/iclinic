<?php
  $login_cookie = $_COOKIE['login'];
  if(isset($login_cookie)){

	include_once('../classes/paciente.php');
	//CRIANDO UM OBJETO	
	$a = new paciente();
	//
	$todos = $a->listar_paciente();
	
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>Pacientes</title>
    <!-- Bootstrap core CSS -->
    <link href="../btp/bootstrap.min.css" rel="stylesheet">
    <link href="../btp/style.css" rel="stylesheet">
    <link href="../paginascss/consulta.css" rel="stylesheet" > 
    
  </head>
  <body >
    <nav class="navbar navbar-expand-xl navbar-dark ">
        <img src="../login.images/logo_iclinic.jpeg" class="rounded-lg position-static"  alt="" loading="lazy">
		<a class="navbar-brand" href="#" >Iclinic</a>
		<div>
          <input type="button" value="voltar" style="color: lime; background-color: black; border: black;" onclick="history.go(-1)">
          </div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" ><span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
    </nav>
    <h3>Lista de Pacientes</h3>
    <div class="table-responsive-sm position-static">
        <table  class="table table-hover table-sm">
            <thead class="thead-dark "> 
                <tr>
                    <th class="text-center text-uppercase" scope="col">Id</th>
                    <th class="text-center text-uppercase" scope="col">Nome</th>
                    <th class="text-center text-uppercase" scope="col">data de nascimento</th>
                    <th class="text-center text-uppercase" scope="col">CPF</th>
                    <th class="text-center text-uppercase" scope="col">RG</th>
                    <th class="text-center text-uppercase" scope="col">Nome do Responsável</th>
                    <th class="text-center text-uppercase" scope="col">CPF do Responsável</th>
                    <th class="text-center text-uppercase" scope="col">RG do Responsável</th>
                    <th class="text-center text-uppercase" scope="col">Endereço</th>  
                    <th class="text-center text-uppercase" scope="col">Número</th>
                    <th class="text-center text-uppercase" scope="col">Bairro</th>
                    <th class="text-center text-uppercase" scope="col">Estado</th>
					          <th class="text-center text-uppercase" scope="col">Cidade</th> 
                    <th class="text-center text-uppercase" scope="col">Telefone</th> 
                    <th class="text-center text-uppercase" scope="col" colspan="2">AÇÕES</th>
                </tr>

	<?php		
	foreach($todos as $paciente){
			echo "
				<tr>
					<td class='text-center'>".$paciente['id']."</td>
					<td class='text-center'>".$paciente['nome']."</td>
					<td class='text-center'>".$paciente['data_nascimento']."</td>
					<td class='text-center'>".$paciente['CPF']."</td>
					<td class='text-center'>".$paciente['RG']."</td>
					<td class='text-center'>".$paciente['nome_responsavel']."</td>
					<td class='text-center'>".$paciente['CPF_responsavel']."</td>
					<td class='text-center'>".$paciente['RG_responsavel']."</td>
					<td class='text-center'>".$paciente['endereco']."</td>
					<td class='text-center'>".$paciente['numero']."</td>
					<td class='text-center'>".$paciente['bairro']."</td>
					<td class='text-center'>".$paciente['estado']."</td>
                    <td class='text-center'>".$paciente['cidade']."</td>
					<td class='text-center'>".$paciente['telefone']."</td>
					<td class='text-center'> 
					    <a href='adicionar_paciente.php?id=".$paciente['id']."'>Adicionar novo</a>
						<a href='editar_paciente.php?id=".$paciente['id']."'>editar</a>
                        <a href='deletar_paciente.php?id=".$paciente['id']."'>excluir</a>
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