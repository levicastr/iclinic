<?php
$login_cookie = $_COOKIE['login'];
  if(isset($login_cookie)){
?>

<!doctype html>
<html lang="pt-br" id="leitos">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>leitos</title>
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
          <img src="../iclinic/login.images/logo_iclinic.jpeg" class="rounded-lg position-static " alt="" loading="lazy">
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
      <div class="container-fluid">  
        <div class="card-deck">
          <div class="card">
            <img src="../iclinic/imgs/uti.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">UTI</h5>
              <p class="card-text">A unidade de tratamento intensivo, caracterizada por tratar dos doentes mais graves, de acordo com os dados fornecidos, irá direcionar a opção de consulta ou cadastro.</p>
            </div>
            <div class="button">
              <button  onclick="UTI()"  type="button" class="btn btn-success" id="consul">UTI</button>
            </div>
          </div>
          <div class="card">
            <img src="../iclinic/imgs/emergencia.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" >Emêrgencia</h5>
              <p class="card-text">Ao clicar na parte de emergência, ele irá direcionar você para os leitos onde estão as pessoas com um caso de emergência médica.</p>
            </div>
             <div class="button">
              <button  onclick="Emergencia()"  type="button" class="btn btn-success" id="consul">Emêrgencia</button>
            </div>
          </div>
          <div class="card">
            <img src="../iclinic/imgs/leito_clinico.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title" >Leito Clínico</h5>
              <p class="card-text">Destinado ao atendimento do paciente na unidade, para a realização de tratamento clínico, assim como foi informado.</p>
            </div>
            <div class="button">
              <button  onclick="leitoclinico()"  type="button" class="btn btn-success" id="consul"> Leito Clínico</button>
            </div>
          </div>
        </div>
      </div>
      <br>
       <!-- javascript direcionamento para outras paginas com onclick -->
      <script>
      function sair(){
        window.location.href="logout.php";
      }
      function UTI(){
        window.location.href="uti.php";
      }
      function Emergencia(){
        window.location.href="emergencia.php";
      }
      function leitoclinico(){
        window.location.href="clinico.php";
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