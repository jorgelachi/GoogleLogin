<?php session_start();?>
<?php include('google_login.php'); ?>
<!--- este include, se colocó aquí para no tirar el error de cabeceras, debido a que google_login.php maneja cabeceras que no pueden ser llamadas después del session_start().----->
<!doctype html>
<html>
<title>Login with Google Account OAuth</title>
<body>
<div style="margin:0px auto; width:800px;text-align:center;font-family:arial">
<div><div height="125px" align='center'>  
</div></div> 
<h1>Login with Google Account</h1>
<div><center><img id="logo2" src="ou3.png" data-hi-res="" alt="" style="width:329px; height:221px;" /></center><img src="developers-logo.png" width="200" height="48"></div>
<div>
</div>
</div>
<iframe src="" frameborder="0" scrolling="no" height="0"></iframe>
</body>
</html>
