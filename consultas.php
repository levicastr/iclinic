<?php
$login_cookie = $_COOKIE['login'];
  if(isset($login_cookie)){
?>
<!doctype html>
<html lang="pt-br" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>consultas</title>
    <!-- Bootstrap core CSS -->
    <link href="btp/bootstrap.min.css" rel="stylesheet">
    <link href="btp/style.css" rel="stylesheet"> 
    <link href="../iclinic/paginascss/paginas.css" rel="stylesheet" >   
  </head>
  <body >
    <nav class="navbar navbar-expand-xl navbar-dark " >
        <div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       </div>
          <div>
          <img src="../iclinic/login.images/logo_iclinic.jpeg" class="rounded-lg position-static "  alt="" loading="lazy">
          <a class="navbar-brand" href="#" >Iclinic</a>
        </div>
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
          <div class="position-static">
              <button type="button" class="btn btn-outline-danger" onclick="sair()">SAIR</button>
          </div>    
      </nav> 
      <br>
      <div class="container-fluid" style="width: 80%;">
      <div class="row row-cols-1 row-cols-md-2">
        <div class="col mb-4"> 
          <div class="card">
            <img src="../iclinic/imgs/cadastro_consulta.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Agendar Consulta</h5>
              <p class="card-text">Ação com intuito de realizar adição de consultas, assim vista na listagem.</p>
            </div>
            <div class="button">
                <button  onclick="cadastrar()"  type="button" class="btn btn-success" id="consul">Agendar Consulta</button>
              </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="../iclinic/imgs/consultar_consulta.jpg" class="card-img-top" alt="...">
            <div class="card-body" >
              <h5 class="card-title">Verificar Consulta</h5>
              <p class="card-text">Encontra-se listado informações sobre os pacientes, onde podem ser observadas de forma organizada por ordem de consulta.</p>
            </div>
            <div class="button">
                <button  onclick="consultar()"  type="button" class="btn btn-success" id="consul">Verificar Consulta</button>
              </div>
          </div>
        </div>
      </div>
      </div>
       <!-- javascript direcionamento para outras paginas com onclick -->
      <script>  
      function sair(){
        window.location.href="logout.php";
      }  
      function cadastrar(){
        window.location.href="../iclinic/crud_marcar_cons/adicionar_consultas.php";
      }
      function consultar(){
        window.location.href="../iclinic/crud_marcar_cons/consultar_consulta.php";
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