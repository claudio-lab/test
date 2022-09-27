<?php
session_start();
session_destroy();
setcookie("name",'');
header('Location: index.php');
exit();