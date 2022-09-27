<?php

$name = $_POST['name'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

$servername = "localhost";
$database = "laravel9";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);


?>