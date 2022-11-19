<?php
  $login_cookie = $_COOKIE['login'];
  if(isset($login_cookie)){

	include_once('../classes/pagamento.php');
	//CRIANDO UM OBJETO	
	$a = new pagamento();
	//
	$todos = $a->listar_pagamento();
	
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>Pagamento</title>
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
    <h3>Lista de Pagamento</h3>
    <div class="table-responsive-sm">
        <table  class="table table-hover table-sm">
            <thead class="thead-dark "> 
                <tr>
                    <th class="text-center text-uppercase" scope="col">Id</th>
					<th class="text-center text-uppercase" scope="col">Nome</th>
					<th class="text-center text-uppercase" scope="col">Data de Nascimento</th>
					<th class="text-center text-uppercase" scope="col">Data de Pagamento</th>
                    <th class="text-center text-uppercase" scope="col">CPF</th>
				    <th class="text-center text-uppercase" scope="col">RG</th>
                    <th class="text-center text-uppercase" scope="col">Valor</th>
                    <th class="text-center text-uppercase" scope="col" colspan="2">AÇÕES</th>
                </tr>
	<?php		foreach($todos as $pagamento){
			echo "
				<tr>
                    <td class='text-center'>".$pagamento['id']."</td>
                    <td class='text-center'>".$pagamento['nome']."</td>
					<td class='text-center'>".$pagamento['data_nascimento']."</td>
					<td class='text-center'>".$pagamento['data_pagamento']."</td>
                    <td class='text-center'>".$pagamento['CPF']."</td>
                    <td class='text-center'>".$pagamento['RG']."</td>
                    <td class='text-center'>".$pagamento['valor']."</td>
					<td class='text-center'>
						<a href='editar_pagamento.php?id=".$pagamento['id']."'>editar</a>
                        <a href='adicionar_pagamento.php?id=".$pagamento['id']."'>Cadastrar novo</a>
					</td>
				</tr>
			";
		}	
	?>
	</table>
  <script>
  function sair(){
        window.location.href="../iclinic/logout.php";
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