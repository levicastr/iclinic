<?php
$login_cookie = $_COOKIE['login'];
  if(isset($login_cookie)){
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
     
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Ubuntu:wght@700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../iclinic/styles/main.css"> 
    <link rel="stylesheet" href="../iclinic/styles/create-point.css">
    
    <link rel="stylesheet" href="../iclinic/styles/responsive.css">

</head>
<body>
    <div id="page-create-point">
        <div class="content">
            <header>
                <img src="../iclinic/login.images/logo_iclinic.jpeg"  alt="logomarca">
              <div>
                <input type="button" value="voltar" onclick="history.go(-1)">
              </div>
            </header>     
            <form method="post" action="../iclinic/cadastro_usu.php">
                <h1>Cadastro do Usuário</h1>
                
                <fieldset>
                    <legend>
                        <h2>Dados do Usuário </h2>
                    </legend>
                    <div class="field-group">
                        <div class="field">
                            <label for="email">E-mail</label>
                            <input type="email" name="login" id="email" required>
                        </div>
                        <div class="field">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" required>
                        </div>   
                    </div>
                </fieldset>
                <button type="submit" value="Enviar"> cadastrar </button>
            </form>                 
        </div>
    </div> 
</body>
</html>		
<?php
}else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.php'>Faça Login</a> Para ver o conteúdo";
	}
?>