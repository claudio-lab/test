<?php
include('conexao.php');
//$connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');

//$db = mysql_select_db('nome_do_banco_de_dados');
  if (isset($entrar)) {

    $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        setcookie("name",$name);
        header("Location:index.php");
    } else {
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
    }

    /*$verifica = mysql_query("SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }*/
  }
?>