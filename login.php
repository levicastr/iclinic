
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login.images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login.vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login.fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login.vendo/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login.vendo/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login.vendo/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login.css/util.css">
	<link rel="stylesheet" type="text/css" href="login.css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="login.images/logo_iclinic.jpeg" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST" action="confirmar_login.php" >
					<span class="login100-form-title">
						 Realize seu Login!
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Email válido é necessário: ex@abc.xyz">
						<input class="input100" type="email" name="login" id="login" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "É necessário senha">
						<input class="input100" type="password" name="senha" id="senha" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="entrar" id="entrar" name="entrar">
							entrar
						</button>
                    </div>
					<div>
					<br>
					</div>
					<div class="text-center p-t-12">
						<span class="txt1">
							esqueceu
						</span>
						<a class="txt2" href="#">
							sua senha?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->	
	<script src="login.vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login.vendor/bootstrap/js/popper.js"></script>
	<script src="login.vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login.vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login.vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="login.js/main.js"></script>

</body>
</html>


  
