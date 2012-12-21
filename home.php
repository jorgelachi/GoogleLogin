<?php session_start(); ?>
<!doctype html>
<html>
<title>Home - Login with Google Account OAuth</title>
<head>
<script type="text/javascript" src="syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="syntaxhighlighter/scripts/shBrushJScript.js"></script>
<link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shCoreDefault.css"/>
<script type="text/javascript">SyntaxHighlighter.all();</script>
<style>
div.code {
	font-family: Courier, monospace, Courier New;
	font-size: 13px;
	color: #000;
	border: dashed 2px #dedede;
	padding: 10px;
	line-height: 16px;
	word-wrap: break-word;
}
</style>
</head>
<body style="margin:0px auto; width:800px;text-align:left;font-family:arial">
<!--<a href='http://www.ourlimm.com'>www.ourlimm.com</a>-->
<h1>
  <center>
    Home - Login with Google Account Login
  </center>
</h1>
<div>
  <center>
    <img id="logo2" src="ou3.png" data-hi-res="" alt="" style="width:329px; height:221px;" />
  </center>
  <center>
    <img src="developers-logo.png" width="200" height="48">
  </center>
  <br>
</div>
<?php
include('db.php');
if (!isset($_SESSION['google_data'])) {
    // Redirection to login page twitter or facebook
    /*header("location: index.php");*/
	echo"<script language='javascript'>window.location='index.php'</script>;";
}
else
{
//echo print_r($userdata);
$userdata=$_SESSION['google_data'];
$email =$userdata['email'];
$googleid =$userdata['id'];
$fullName =$userdata['name'];
$firstName=$userdata['given_name'];
$lastName=$userdata['family_name'];
$gplusURL=$userdata['link'];
$avatar=$userdata['picture'];
$gender=$userdata['gender'];
$dob=$userdata['birthday'];

//Execture query
$sql=mysql_query("insert into users(email,fullname,firstname,lastname,google_id,gender,dob,profile_image,gpluslink) values('$email','$fullName','$firstName','$lastName','$googleid','$gender','$dob','$avatar','$gplusURL')");

?>
<div>
  <table width='100%'>
    <tr>
      <td valign='top'><img src="<?php echo $avatar; ?>" style='float:left;width:100px'/></td>
      <td valign='top'><b>Email:</b> <?php echo  $email; ?><br/>
        <b>Full Name:</b> <?php echo $fullName; ?><br/>
        <b>First Name:</b> <?php echo $firstName; ?><br/>
        <b>Last Name:</b> <?php echo $lastName; ?><br/>
        <b>Google Id</b> <?php echo $googleid; ?><br/>
        <b>Gender:</b> <?php echo $gender; ?><br/>
        <b>Image URL:</b> <?php echo $avatar; ?><br/>
        <b>DOB:</b> <?php echo $dob; ?><br/>
        <b>Google Plus Link:</b> <?php echo $gplusURL; ?></td>
    </tr>
  </table>
  <br>
  <div class='code'> <b>SQL Query </b>:<br/>
    insert into users(email,fullname,firstname,lastname,google_id,gender,dob,profile_image,gpluslink) values("<span style="color:#cc0000"> <?php echo $email; ?></span>","<span style="color:#cc0000"> <?php echo $fullName; ?></span>","<span style="color:#cc0000"> <?php echo $firstName; ?></span>","<span style="color:#cc0000"> <?php echo $lastName; ?></span>","<span style="color:#cc0000"> <?php echo $googleid; ?></span>","<span style="color:#cc0000"> <?php echo $gender; ?></span>","<span style="color:#cc0000"> <?php echo $dob; ?></span>","<span style="color:#cc0000;"> <?php echo $avatar; ?></span>","<span style="color:#cc0000"> <?php echo $gplusURL; ?></span>")'; </div>
  <br>
  <b>Array Data</b>
  <pre class="brush: js;">
	
//Execture query
$sql=mysql_query("insert into users(email,fullname,firstname,
lastname,google_id,gender,dob,profile_image,gpluslink) 
values('$email','$fullName','$firstName','$lastName','$googleid',
'$gender','$dob','$avatar','$gplusURL')");
    
    Array
(
    [id] => <?php echo $googleid;?> 
    [email] => <?php echo $email;?> //(correo)
    [full_name] => <?php echo $fullName;?> //(nombre completo)
    [given_name] => <?php echo $firstName;?> //(1er nombre)
    [family_name] => <?php echo $lastName;?> //(Apellidos)
    [link] => <?php echo $gplusURL;?> //(G+)
    [picture] => <?php echo $avatar;?> //(Imagen)
    [gender] => <?php echo $gender;?> //(Genero)
    [birthday] => 0<?php echo $dob;?> //(Fecha de Nacimiento)
 }
 
</pre>
</div>
<br>
<?php 
print "<a class='logout' href='index.php?logout'>Logout</a><br/> <br/> "; 
}
?>
</div>
</body>
</html>
