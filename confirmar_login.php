<?php 
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'iclinic');
  if (isset($entrar)) {
           
    $verifica = mysqli_query($connect ,"SELECT * FROM usuarios WHERE login = 
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Email e/ou senha incorretos');
        window.location.href='login.php';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:dashboard.php");
      }
  }
?>  