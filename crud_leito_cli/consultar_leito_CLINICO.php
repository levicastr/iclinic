<?php
  $login_cookie = $_COOKIE['login'];
  if(isset($login_cookie)){

	include_once('../classes/leito_clinico.php');
	//CRIANDO UM OBJETO	
	$a = new leito_clinico();
	//
	$todos = $a-> listar_leito_clinico();
	
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>Leitos</title>
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
    <h3>Lista de Pacientes no Leito</h3>
    <div class="table-responsive-sm">
        <table  class="table table-hover table-sm">
            <thead class="thead-dark "> 
                <tr>
                    <th class="text-center text-uppercase" scope="col">Id</th>
                    <th class="text-center text-uppercase" scope="col">Nome</th>
                    <th class="text-center text-uppercase" scope="col">CPF</th>
					<th class="text-center text-uppercase" scope="col">RG</th>
					<th class="text-center text-uppercase" scope="col">Data de Entrada</th>
                    <th class="text-center text-uppercase" scope="col">Data de Saída</th>
                    <th class="text-center text-uppercase" scope="col" colspan="2">AÇÕES</th>
                </tr>
  <?php			
  foreach($todos as $leito){
			echo "
				<tr>
					<td class='text-center'>".$leito['id']."</td>
					<td class='text-center'>".$leito['nome']."</td>
                    <td class='text-center'>".$leito['CPF']."</td>
                    <td class='text-center'>".$leito['RG']."</td>
                    <td class='text-center'>".$leito['data_entrada']."</td>
                    <td class='text-center'>".$leito['data_saida']."</td>
					<td class='text-center'>
						<a href='editar_leito_clinico.php?id=".$leito['id']."'>Editar</a>
                        <a href='adicionar_leito_clinico.php?id=".$leito['id']."'>Cadastrar novo</a>
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