<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Pagina Home </title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a href="index.php" style="text-decoration:none">Inicio</a></li>
 
  <!--li><a href="#contact">Contact</a></li-->

  <?php if (isset($_COOKIE['name'])):?>
    <li><a href="#news">Produtos</a></li>
    <li style=" float: right;"><a href='logout.php'>Sair</a></li>
  <?php else: ?>
    <li style=" float: right;"><a href='login.html'>Login</a></li>
  <?php endif; ?>

</ul>

<div style="text-align:center">
 
  <?php if (isset($_COOKIE['name'])):?>
  <p> Bem-Vindo <b><?php echo $_COOKIE['name']; ?></b> </p>
  <!--p> Essas informações <font color='red'>PODEM</font> ser acessadas por você </p--> 
  <?php else: ?>
    <p> Bem-Vindo <b>convidado</b></p> 
    <!--p>Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você</p-->
  <?php endif;?>
  
</div>

</body>
</html>


