<?php
  $login_cookie = $_COOKIE['login'];
  if(isset($login_cookie)){

	include_once('../classes/funcionarios.php');
	$a = new funcionarios();

	$todos = $a -> listar_funcionarios();	
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>Funcionários</title>
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
    <h3>Lista de Funcionários</h3>
    <div class="table-responsive-sm">
        <table  class="table table-hover table-sm">
            <thead class="thead-dark "> 
                <tr>
                    <th class="text-center text-uppercase" scope="col">Id</th>
                    <th class="text-center text-uppercase" scope="col">Nome</th>
                    <th class="text-center text-uppercase" scope="col">data de nascimento</th>
                    <th class="text-center text-uppercase" scope="col">CPF</th>
                    <th class="text-center text-uppercase" scope="col">RG</th>
                    <th class="text-center text-uppercase" scope="col">Endereço</th>
                    <th class="text-center text-uppercase" scope="col">Numero</th>
                    <th class="text-center text-uppercase" scope="col">Bairro</th>
                    <th class="text-center text-uppercase" scope="col">Estado</th>  
                    <th class="text-center text-uppercase" scope="col">Cidade</th>
                    <th class="text-center text-uppercase" scope="col">telefone</th>
                    <th class="text-center text-uppercase" scope="col" colspan="2">AÇÕES</th>
                </tr>

	<?php	
		foreach($todos as $funcionarios){
			echo "
				<tr>
					<td class='text-center'>".$funcionarios['id']."</td>
					<td class='text-center'>".$funcionarios['nome']."</td>
					<td class='text-center'>".$funcionarios['data_nascimento']."</td>
					<td class='text-center'>".$funcionarios['CPF']."</td>
					<td class='text-center'>".$funcionarios['RG']."</td>
					<td class='text-center'>".$funcionarios['endereco']."</td>
					<td class='text-center'>".$funcionarios['numero']."</td>
					<td class='text-center'>".$funcionarios['bairro']."</td>
          <td class='text-center'>".$funcionarios['estado']."</td>
          <td class='text-center'>".$funcionarios['cidade']."</td>
					<td class='text-center'>".$funcionarios['telefone']."</td>
					<td class='text-center'>
						<a href='adicionar_funcionario.php?id=".$funcionarios['id']."'>Adicionar novo</a>
            <a href='deletar_funcionario.php?id=".$funcionarios['id']."'>Excluir</a>
            <a href='editar_funcionario.php?id=".$funcionarios['id']."'>Editar</a>
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