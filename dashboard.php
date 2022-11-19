<?php
$login_cookie = $_COOKIE['login'];
  if(isset($login_cookie)){
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="btp/bootstrap.min.css" rel="stylesheet">
    <link href="btp/style.css" rel="stylesheet">
    <link href="../iclinic/paginascss/paginas.css" rel="stylesheet" > 
    
  </head>
  <body >
    <nav class="navbar navbar-expand-xl navbar-dark ">
        <img src="../iclinic/login.images/logo_iclinic.jpeg" class="rounded-lg position-static"  alt="" loading="lazy">
        <a class="navbar-brand" href="#" >Iclinic</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" ><span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        <div class="position-static">
            <button type="button" class="btn btn-outline-danger" onclick="sair()">SAIR</button>
      </div>
    </nav>
      <br>
    <div class="container-fluid">  
      <div class="button">  
        <button onclick="receita()"  type="button" class="btn btn-success" id="consul"> Acesse a Receita </button>
        <button onclick="usuarios()"  type="button" class="btn btn-success" id="consul"> Cadastro de Usuários</button>
      </div>
      <br>
    <div class="card-deck">
      <div class="card">
        <img src="../iclinic/imgs/paciente.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" >Pacientes</h5>
          <p class="card-text">Ao clicar em PACIENTES você será direcionado para páginas com Consulta e Cadastro do paciente.</p>
        </div>
        <div class="button">
          <button  onclick="Pacientes()"  type="button" class="btn btn-success" id="consul">Pacientes </button>
        </div>
      </div>
      <div class="card">
        <img src="../iclinic/imgs/funcionario.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" >Funcionários</h5>
          <p class="card-text">A página que você acabou de clicar lhe direcionará a outras duas páginas, a esquerda cadastro e a direita consulta.</p>
        </div>
         <div class="button">
          <button  onclick="funcionarios()"  type="button" class="btn btn-success" id="consul">Funcionários</button>
        </div>
      </div>
      <div class="card">
        <img src="../iclinic/imgs/uti.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" >Leitos</h5>
          <p class="card-text">Ao clicar no botão a seguir terá acesso aos leitos UTI, Emêrgencia e ao leito Clínico. </p>
        </div>
        <div class="button">
          <button  onclick="leitos()"  type="button" class="btn btn-success" id="consul">Leitos</button>
        </div>
      </div>
    </div>
    <br>
    <div class="card-deck">
      <div class="card">
        <img src="../iclinic/imgs/consulta.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" >Consultas</h5>
          <p class="card-text">Composta por características baseadas em informações, de onde o paciente será direcionado de
             acordo com sua necessidade e momento em que está sendo realizado aquele procedimento.</p>
        </div>
        <div class="button">
          <button  onclick="consultas()"  type="button" class="btn btn-success" id="consul">Consultas</button>
        </div>
      </div>
      <div class="card">
        <img src="../iclinic/imgs/cadastro_clinico.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Prontuário</h5>
          <p class="card-text">Clicando no botão a seguir, você terá acesso a consulta, que tem a função de mostrar os
            prontuários cadastrados no sistema e ao cadastro de prontuário.</p>
        </div>
        <div class="button">
          <button  onclick="prontuario()"  type="button" class="btn btn-success" id="consul">Prontuário</button>
        </div>
      </div>
      <div class="card">
        <img src="../iclinic/imgs/pagamento.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title" >Pagamento</h5>
          <p class="card-text">Clicando no botão a seguir, você terá acesso a consulta e ao cadastro do pagamento.</p>
        </div>
        <div class="button">
          <button  onclick="pagamento()"  type="button" class="btn btn-success" id="consul">Pagamento</button>
        </div>
      </div>
    </div>
    <br>
   
    
    <!-- javascript direcionamento para outras paginas com onclick -->
    <script> 
      function sair(){
        window.location.href="logout.php";
      }
      function Pacientes(){
         window.location.href="paciente.php";
      }
       function funcionarios(){
         window.location.href="funcionarios.php";
      }
      function leitos(){
         window.location.href="leitos.php";
      }
      function consultas(){
         window.location.href="consultas.php";
      }
      function prontuario(){
         window.location.href="prontuario.php";
      }
      function pagamento(){
         window.location.href="pagamento.php";
      }
      function usuarios(){
         window.location.href="cadastrousua.php";
      }
      function receita(){
         window.location.href="";
      }
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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