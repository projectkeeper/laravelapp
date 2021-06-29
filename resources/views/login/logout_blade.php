<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>

<?php

session_start();

$_SESSION = array();

if(isset($_COOKIE[session_name()])==true){

  setcookie(session_name(),'',time()-42000,'/');
}
session_destroy();
 ?>
<body>
ログアウトしました<br/><br/>
<a href="../login/login.html" target="content">ログイン画面</a>
</body>
</html>
